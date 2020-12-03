<?php

namespace App\Entities;

use App\Models\Villages;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class VillageEntity
{
    /**
     * Get all resource.
     *
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function getVillages()
    {
        return QueryBuilder::for(Villages::class)
            ->allowedSorts(['id', 'province_id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('district_id'),
                'name',
            ])
            ->jsonPaginate();
    }

    /**
     * Get resouce by id.
     *
     * @param int $id
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function getVillage(int $id)
    {
        return QueryBuilder::for(Villages::class)
            ->allowedSorts(['id', 'province_id', 'name'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('district_id'),
                'name',
            ])
            ->find($id);
    }
}
