<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $dpi
 * @property $nacimiento
 * @property $telefono
 * @property $direccion
 * @property $tipocliente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Caracteristicaproducto[] $caracteristicaproductos
 * @property Tipocliente $tipocliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'dpi' => 'required',
		'nacimiento' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'tipocliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','dpi','nacimiento','telefono','direccion','tipocliente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caracteristicaproductos()
    {
        return $this->hasMany('App\Models\Caracteristicaproducto', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipocliente()
    {
        return $this->hasOne('App\Models\Tipocliente', 'id', 'tipocliente_id');
    }
    

}
