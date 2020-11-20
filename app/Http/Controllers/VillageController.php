<?php

namespace App\Http\Controllers;

use App\Entities\VillageEntity;
use App\Http\Transformers\VillageTransformer;

class VillageController extends Controller
{
    public function index(VillageEntity $villages)
    {
        return $this->fractal($villages->getVillages(), new VillageTransformer(), 'villages');
    }

    public function show(VillageEntity $villages, int $id)
    {
        return $this->fractal($villages->getVillage($id), new VillageTransformer(), 'villages');
    }
}
