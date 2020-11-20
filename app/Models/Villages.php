<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Villages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'villages';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'district_id', 'name'];
}
