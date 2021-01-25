<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'id', 'name','image'
    ];


    public function products()
    {
        return $this->hasMany('App\Product','category_id');
    }
}
