<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nombre','nit','direccion','telefono','email'];

    //Relacion con el modelo Facturas
    public function facturas()
    {
        return $this->hasMany('App\Factura');
    }
    
    //Función para buscar clientes por el nombre
    public function scopeBuscador($query,$nombre){
    	return $query->where('nombre','LIKE','%'.$nombre.'%');
    }


}
