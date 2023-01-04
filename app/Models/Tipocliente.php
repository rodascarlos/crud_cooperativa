<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipocliente
 *
 * @property $id
 * @property $titulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipocliente extends Model
{
    
    static $rules = [
		'titulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'tipocliente_id', 'id');
    }
    

}
