<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReWork extends Model
{
    protected $fillable = ['title', 'slug', 'details', 'image', 'category_id', 'status'
    , 'featured', 'view_count', 'video_id', 'work_address', 'deadline_for_sub', 'salary', 'emp_total'];

    
    public function listReWorks()
    {
        return $this->hasMany('App\ReWork');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
