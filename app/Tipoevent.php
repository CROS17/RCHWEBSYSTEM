<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoevent extends Model
{
    protected $fillable = ['evento'];

    public function contratos(){

    	return $this->hasMany(Contrato::class);
    }
}
