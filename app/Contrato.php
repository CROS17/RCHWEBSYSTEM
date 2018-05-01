<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    
    protected $fillable = ['user_id', 'tipoevents_id','clients_id','direccion','fecha','precio','status'];

    public function user(){

		return $this->belongsTo(User::class);	
	}

	public function tipoevents(){

		return $this->belongsTo(Tipoevent::class);	
	}

	public function clients(){

		return $this->belongsToMany(Client::class);	
	}

}
