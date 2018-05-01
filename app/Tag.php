<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     /**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'slug'];



    public function posts(){
    	return $this->belongsToMany(Post::class);
    }
}
