<?php

namespace App\Entities;

use App\Models\Districts;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class DistrictEntity
{
    /**
     * Get all resource.
     *
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function getDistricts()
    {
        return QueryBuilder::for(Districts::class)
            ->allowedSorts(['id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('regency_id'),
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
    public function getDistrict(int $id)
    {
        return QueryBuilder::for(Districts::class)
            ->allowedSorts(['id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('regency_id'),
                'name'
            ])
            ->find($id);
    }
}
