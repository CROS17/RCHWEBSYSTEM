<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoclient extends Model
{

    protected $fillable = ['descripcion'];


    public function clients(){

    	return $this->hasMany(Client::class);
    }
}
