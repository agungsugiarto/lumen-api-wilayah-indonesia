<?php

namespace App\Http\Transformers;

use App\Models\Regencies;
use League\Fractal\TransformerAbstract;

class RegencyTransformer extends TransformerAbstract
{
    /**
     * {@inheritdoc}
     */
    protected $availableIncludes = ['districts'];

    /**
     * {@inheritdoc}
     */
    public function transform(Regencies $regency)
    {
        return [
            'id'           => $regency->id,
            'province_id'  => $regency->province_id,
            'regency_name' => $regency->name,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function includeDistricts(Regencies $regency)
    {
        return $this->collection($regency->districts, new DistrictTransformer(), 'districts');
    }
}
