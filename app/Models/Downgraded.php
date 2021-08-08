<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Downgraded
 *
 * @property $id
 * @property $stock
 * @property $motive
 * @property $material_id
 *
 * @property Material $material
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Downgraded extends Model
{
    public $timestamps = false;

    static $rules = [
        'stock' => 'required',
        'motive' => 'required',
        'material_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['stock','motive','material_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function material()
    {
        return $this->hasOne('App\Models\Material', 'id', 'material_id');
    }


}
