<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadofactura extends Model
{
    protected $table = 'estadosfacturas';
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
