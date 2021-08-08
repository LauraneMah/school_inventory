<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialType
 *
 * @property $id
 * @property $name
 *
 * @property Material[] $materials
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaterialType extends Model
{
    public $timestamps = false;

    static $rules = [
        'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materials()
    {
        return $this->hasMany('App\Models\Material', 'type_id', 'id');
    }


}
