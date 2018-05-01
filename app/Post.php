<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	/**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'];

	public function user(){

		return $this->belongsTo(User::class);	
	}

	public function Category(){

		return $this->belongsTo(Category::class);	
	}

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }
}
