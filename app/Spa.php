<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Spa extends Model
{
    
	protected $table = "spas";

    public function photos()
    {
    	return $this->hasMany('App\SpaPhotos', 'link_spa_id', 'id');
    }
}
