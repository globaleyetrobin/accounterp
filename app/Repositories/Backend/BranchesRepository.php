<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Branches\BranchCreated;
use App\Events\Backend\Branches\BranchDeleted;
use App\Events\Backend\Branches\BranchUpdated;
use App\Exceptions\GeneralException;
use App\Models\Branch;
use App\Repositories\BaseRepository;

class BranchesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Branch::class;

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
            ->leftjoin('users', 'users.id', '=', 'Branches.created_by')
			->leftjoin('companies', 'companies.id', '=', 'Branches.company_id')
            ->select([
                'Branches.id',
                'Branches.name',
				
				//DB::raw('companies.name'),
                 'companies.name as company_name',
				'Branches.email',
				'Branches.phoneno',
                'Branches.status',
                'Branches.created_at',
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

        if ($Branch = Branch::create($input)) {
            event(new BranchCreated($Branch));

            return $Branch;
        }

        throw new GeneralException(__('exceptions.backend.blog-category.create_error'));
    }

    /**
     * @param \App\Models\Branch $Branch
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Branch $Branch, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Branch->id)->first()) {
            throw new GeneralException(__('exceptions.backend.blog-category.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Branch->update($input)) {
            event(new BranchUpdated($Branch));

            return $Branch->fresh();
        }

        throw new GeneralException(__('exceptions.backend.blog-category.update_error'));
    }

    /**
     * @param \App\Models\Branch $Branch
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Branch $Branch)
    {
        if ($Branch->delete()) {
            event(new BranchDeleted($Branch));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.blog-category.delete_error'));
    }
}
