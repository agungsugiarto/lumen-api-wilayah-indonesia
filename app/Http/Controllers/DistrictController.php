<?php

namespace App\Http\Controllers;

use App\Entities\DistrictEntity;
use App\Http\Transformers\DistrictTransformer;

class DistrictController extends Controller
{
    public function index(DistrictEntity $district)
    {
        return $this->fractal($district->getDistricts(), new DistrictTransformer(), 'districts');
    }

    public function show(DistrictEntity $district, int $id)
    {
        return $this->fractal($district->getDistrict($id), new DistrictTransformer(), 'districts');
    }
}
