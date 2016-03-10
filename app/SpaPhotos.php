<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaPhotos extends Model
{
	protected $table = 'spas_photos';

    protected $fillable = ['photo','caption'];	

    public function spa(){
    	return $this->belongsTo('App\Spa', 'link_spa_id', 'id');
    }
}
