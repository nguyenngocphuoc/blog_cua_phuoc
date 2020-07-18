<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'status', 'group_categories_id'];

    
    public function newslist()
    {
        return $this->hasMany('App\News');
    }

    public function groupCategory()
    {
      return $this->hasOne('App\GroupCategory', 'id', 'group_categories_id');
    }
}
