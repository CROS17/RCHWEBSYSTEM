<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodoc extends Model
{
     
    protected $fillable = ['documento'];

    public function clients(){

    	return $this->hasMany(Client::class);
    }
}
