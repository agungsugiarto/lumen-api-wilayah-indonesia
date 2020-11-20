<?php

namespace App\Http\Transformers;

use App\Models\Villages;
use League\Fractal\TransformerAbstract;

class VillageTransformer extends TransformerAbstract
{
    /**
     * {@inheritdoc}
     */
    public function transform(Villages $village)
    {
        return [
            'id'           => $village->id,
            'district_id'  => $village->district_id,
            'village_name' => $village->name,
        ];
    }
}
