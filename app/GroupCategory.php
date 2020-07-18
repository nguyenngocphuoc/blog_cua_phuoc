<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'status'];

    
    public function newslist()
    {
        return $this->hasMany('App\Category');
    }
}
