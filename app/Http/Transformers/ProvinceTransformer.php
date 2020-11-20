<?php

namespace App\Http\Transformers;

use App\Models\Provinces;
use League\Fractal\TransformerAbstract;

class ProvinceTransformer extends TransformerAbstract
{
    /**
     * {@inheritdoc}
     */
    protected $availableIncludes = ['regencies'];

    /**
     * {@inheritdoc}
     */
    public function transform(Provinces $province)
    {
        return [
            'id'            => $province->id,
            'province_name' => $province->name,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function includeRegencies(Provinces $province)
    {
        return $this->collection($province->regencies, new RegencyTransformer(), 'regencies');
    }
}
