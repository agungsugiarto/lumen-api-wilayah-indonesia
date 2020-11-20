<?php

namespace App\Http\Controllers;

use App\Entities\ProvinceEntity;
use App\Entities\RegencyEntity;
use App\Http\Transformers\ProvinceTransformer;
use App\Http\Transformers\RegencyTransformer;

class ProvinceController extends Controller
{
    /**
     * Get the resource province.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProvinceEntity $province)
    {
        return $this->fractal($province->getProvinces(), new ProvinceTransformer(), 'provinces');
    }

    /**
     * Get the spesific resource province.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProvinceEntity $province, int $id)
    {
        return $this->fractal($province->getProvince($id), new ProvinceTransformer(), 'provinces');
    }
}
