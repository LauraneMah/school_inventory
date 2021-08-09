<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 *
 * @property $id
 * @property $description
 * @property $type_id
 *
 * @property Downgraded[] $downgradeds
 * @property MaterialPerson[] $materialPeoples
 * @property MaterialRoom[] $materialRooms
 * @property MaterialType $materialType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Material extends Model
{
    public $timestamps = false;

    static $rules = [
        'description' => 'required',
        'type_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','type_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function downgradeds()
    {
        return $this->hasMany('App\Models\Downgraded', 'material_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materialPeople()
    {
        return $this->hasMany('App\Models\MaterialPerson', 'material_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materialRooms()
    {
        return $this->hasMany('App\Models\MaterialRoom', 'material_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materialType()
    {
        return $this->hasOne('App\Models\MaterialType', 'id', 'type_id');
    }


}
