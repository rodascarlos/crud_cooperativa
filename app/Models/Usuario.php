<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $created_at
 * @property $updated_at
 *
 * @property Caracteristicaproducto[] $caracteristicaproductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caracteristicaproductos()
    {
        return $this->hasMany('App\Models\Caracteristicaproducto', 'usuario_id', 'id');
    }
    

}
