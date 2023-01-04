<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caracteristicaproducto
 *
 * @property $id
 * @property $nombre
 * @property $fecha_contactado
 * @property $fecha_presentara
 * @property $usuario_id
 * @property $cliente_id
 * @property $producto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Producto $producto
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caracteristicaproducto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fecha_contactado' => 'required',
		'fecha_presentara' => 'required',
		'usuario_id' => 'required',
		'cliente_id' => 'required',
		'producto_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fecha_contactado','fecha_presentara','usuario_id','cliente_id','producto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    

}
