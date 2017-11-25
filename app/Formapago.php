<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formapago extends Model
{
    protected $table = 'formaspago';
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
