<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Currencies\CurrencyCreated;
use App\Events\Backend\Currencies\CurrencyDeleted;
use App\Events\Backend\Currencies\CurrencyUpdated;
use App\Exceptions\GeneralException;
use App\Models\Currency;
use App\Repositories\BaseRepository;

class CurrenciesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Currency::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		'short_name',
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
            ->leftjoin('users', 'users.id', '=', 'currencies.created_by')
            ->select([
                'currencies.id',
                'currencies.name',
				'currencies.short_name',
                'currencies.status',
                'currencies.created_at',
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
            throw new GeneralException(__('exceptions.backend.Currency.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Currency = Currency::create($input)) {
            event(new CurrencyCreated($Currency));

            return $Currency;
        }

        throw new GeneralException(__('exceptions.backend.Currency.create_error'));
    }

    /**
     * @param \App\Models\Currency $Currency
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Currency $Currency, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Currency->id)->first()) {
            throw new GeneralException(__('exceptions.backend.Currency.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Currency->update($input)) {
            event(new CurrencyUpdated($Currency));

            return $Currency->fresh();
        }

        throw new GeneralException(__('exceptions.backend.Currency.update_error'));
    }

    /**
     * @param \App\Models\Currency $Currency
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Currency $Currency)
    {
        if ($Currency->delete()) {
            event(new CurrencyDeleted($Currency));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.Currency.delete_error'));
    }
}
