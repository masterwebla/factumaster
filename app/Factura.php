<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['numero','detalles','valor','archivo','idcliente','idforma','idestado'];

    
    //Relación con la modelo cliente
    public function cliente()
    {
        return $this->belongsTo('App\Cliente','idcliente');
    }

}
