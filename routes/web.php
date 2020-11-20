<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Jobs\ImportJob;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    dispatch(new ImportJob);
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    /**
     * Province
     */
    $router->group(['prefix' => 'provinces'], function () use ($router) {
        $router->get('/', 'ProvinceController@index');
        $router->get('{id}', 'ProvinceController@show');
    });

    /**
     * Regency
     */
    $router->group(['prefix' => 'regencies'], function () use ($router) {
        $router->get('/', 'RegencyController@index');
        $router->get('{id}', 'RegencyController@show');
    });

    /**
     * District
     */
    $router->group(['prefix' => 'districts'], function () use ($router) {
        $router->get('/', 'DistrictController@index');
        $router->get('{id}', 'DistrictController@show');
    });

    /**
     * Village
     */
    $router->group(['prefix' => 'villages'], function () use ($router) {
        $router->get('/', 'VillageController@index');
        $router->get('{id}', 'VillageController@show');
    });
});
