<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialRoom
 *
 * @property $id
 * @property $material_id
 * @property $room_id
 *
 * @property Material $material
 * @property Room $room
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaterialRoom extends Model
{
    public $timestamps = false;

    static $rules = [
        'material_id' => 'required',
        'room_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['material_id','room_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function material()
    {
        return $this->hasOne('App\Models\Material', 'id', 'material_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'room_id');
    }


}
