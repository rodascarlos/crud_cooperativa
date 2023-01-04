<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $titulo
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Caracteristicaproducto[] $caracteristicaproductos
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caracteristicaproductos()
    {
        return $this->hasMany('App\Models\Caracteristicaproducto', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
