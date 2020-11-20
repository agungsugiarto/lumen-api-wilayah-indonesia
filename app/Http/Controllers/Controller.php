<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use League\Fractal\Serializer\JsonApiSerializer;
use League\Fractal\TransformerAbstract;

class Controller extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function fractal($data, TransformerAbstract $transformer, string $key)
    {
        return fractal()
            ->create($data, $transformer, new JsonApiSerializer())
            ->withResourceName($key)
            ->respond();
    }
}
