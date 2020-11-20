<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regencies extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regencies';

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
    protected $fillable = ['id', 'province_id', 'name'];

    /**
     * Define a one-to-many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts()
    {
        return $this->hasMany(Districts::class, 'regency_id', 'id');
    }
}
