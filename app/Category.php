<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'slug', 'body'];



    public function posts(){
    	return $this->hasMany(Post::class);
    }
}
