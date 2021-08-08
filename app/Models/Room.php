<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $name
 * @property $number
 *
 * @property MaterialRoom[] $materialRooms
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{
    public $timestamps = false;

    static $rules = [
        'name' => 'required',
        'number' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materialRooms()
    {
        return $this->hasMany('App\Models\MaterialRoom', 'room_id', 'id');
    }


}
