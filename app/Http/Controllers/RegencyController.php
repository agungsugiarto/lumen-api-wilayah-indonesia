<?php

namespace App\Http\Controllers;

use App\Entities\RegencyEntity;
use App\Http\Transformers\RegencyTransformer;

class RegencyController extends Controller
{
    public function index(RegencyEntity $regency)
    {
        return $this->fractal($regency->getRegencies(), new RegencyTransformer(), 'regencies');
    }

    public function show(RegencyEntity $regency, int $id)
    {
        return $this->fractal($regency->getRegency($id), new RegencyTransformer(), 'regencies');
    }
}
