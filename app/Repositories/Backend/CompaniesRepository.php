<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Companies\CompanyCreated;
use App\Events\Backend\Companies\CompanyDeleted;
use App\Events\Backend\Companies\CompanyUpdated;
use App\Exceptions\GeneralException;
use App\Models\Company;
use App\Repositories\BaseRepository;

class CompaniesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Company::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->with([
                'creator',
                'updater',
            ])
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'companies.created_by')
            ->select([
                'companies.id',
                'companies.name',
				'companies.email',
				'companies.phoneno',
                'companies.status',
                'companies.created_at',
                'users.first_name as created_by',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        if ($this->query()->where('name', $input['name'])->first()) {
            throw new GeneralException(__('exceptions.backend.blog-category.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Company = Company::create($input)) {
            event(new CompanyCreated($Company));

            return $Company;
        }

        throw new GeneralException(__('exceptions.backend.blog-category.create_error'));
    }

    /**
     * @param \App\Models\Company $Company
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Company $Company, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Company->id)->first()) {
            throw new GeneralException(__('exceptions.backend.blog-category.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Company->update($input)) {
            event(new CompanyUpdated($Company));

            return $Company->fresh();
        }

        throw new GeneralException(__('exceptions.backend.blog-category.update_error'));
    }

    /**
     * @param \App\Models\Company $Company
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Company $Company)
    {
        if ($Company->delete()) {
            event(new CompanyDeleted($Company));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.blog-category.delete_error'));
    }
}
