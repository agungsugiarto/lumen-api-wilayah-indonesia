<?php

namespace App\Http\Transformers;

use App\Models\Districts;
use League\Fractal\TransformerAbstract;

class DistrictTransformer extends TransformerAbstract
{
    /**
     * {@inheritdoc}
     */
    protected $availableIncludes = [
        'villages',
    ];

    /**
     * {@inheritdoc}
     */
    public function transform(Districts $district)
    {
        return [
            'id'            => $district->id,
            'regency_id'    => $district->regency_id,
            'district_name' => $district->name,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function includeVillages(Districts $district)
    {
        return $this->collection($district->villages, new VillageTransformer(), 'villages');
    }
}
