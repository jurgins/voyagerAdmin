<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name', 'phone', 'nameProduct', 'price', 'description', 'descriptionKratk', 'category_id', 'picture', 'comments', 'user_id', 'status', 'created_at', 'updated_at'];
    public function catalogs(){
    	return $this->belongsTo('App\Category','category_id');
    }
}
