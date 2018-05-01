<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    protected $fillable = ['user_id', 'tipoclients_id','tipodocs_id','name', 'correo','telefono','celular'];


    public function user(){

		return $this->belongsTo(User::class);	
	}

	public function Tipoclient(){

		return $this->belongsTo(Tipoclient::class);	
	}

	public function Tipodoc(){

		return $this->belongsTo(Tipodoc::class);	
	}

    public function Contrato(){
    	return $this->belongsToMany(Contrato::class);
    }
}
