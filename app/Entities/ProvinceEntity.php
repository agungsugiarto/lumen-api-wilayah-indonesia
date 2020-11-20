<?php

namespace App\Entities;

use App\Models\Provinces;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ProvinceEntity
{
    /**
     * Get all resource.
     *
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function getProvinces()
    {
        return QueryBuilder::for(Provinces::class)
            ->allowedSorts(['id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
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
    public function getProvince(int $id)
    {
        return QueryBuilder::for(Provinces::class)
            ->allowedSorts(['id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'name'
            ])
            ->find($id);
    }
}
