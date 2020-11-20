<?php

namespace App\Entities;

use App\Models\Regencies;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class RegencyEntity
{
    /**
     * Get all resource.
     *
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function getRegencies()
    {
        return QueryBuilder::for(Regencies::class)
        ->allowedSorts(['id', 'province_id', 'name'])
        ->allowedFilters([
            AllowedFilter::exact('id'),
            AllowedFilter::exact('province_id'),
            'name'
        ])
        ->jsonPaginate();
    }
    
    /**
     * Get resouce by id.
     *
     * @param int $id
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function getRegency(int $id)
    {
        return QueryBuilder::for(Regencies::class)
            ->allowedSorts(['id', 'province_id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('province_id'),
                'name'
            ])
            ->find($id);
    }
}
