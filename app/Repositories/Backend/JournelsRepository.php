<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Journels\JournelCreated;
use App\Events\Backend\Journels\JournelDeleted;
use App\Events\Backend\Journels\JournelUpdated;
use App\Exceptions\GeneralException;
use App\Models\Journel;
use App\Repositories\BaseRepository;

class JournelsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Journel::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		'journel_type',
        'journel_category',
        'amount',
        'date',
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
     * @return mixed'journel_type',
        'journel_category',
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'journels.created_by')
			//->where('journels.parent_id', '=', null)
            ->select([
                'journels.id',
                'journels.name',
                 'journels.date',
                 'journels.amount',
				'journels.journel_type',
                'journels.journel_category',
                'journels.journel_subcategory',
                'journels.journel_entry',
                'journels.status',
                'journels.created_at',
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
            throw new GeneralException(__('exceptions.backend.journel.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Journel = Journel::create($input)) {
            event(new JournelCreated($Journel));

            return $Journel;
        }

        throw new GeneralException(__('exceptions.backend.journel.create_error'));
    }

    /**
     * @param \App\Models\Journel $Journel
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Journel $Journel, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Journel->id)->first()) {
            throw new GeneralException(__('exceptions.backend.journel.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Journel->update($input)) {
            event(new JournelUpdated($Journel));

            return $Journel->fresh();
        }

        throw new GeneralException(__('exceptions.backend.journel.update_error'));
    }

    /**
     * @param \App\Models\Journel $Journel
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Journel $Journel)
    {
        if ($Journel->delete()) {
            event(new JournelDeleted($Journel));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.journel.delete_error'));
    }
}
