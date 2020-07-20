<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReWork extends Model
{
    protected $table = "reworks";

    protected $fillable = [ 'id','title', 'slug', 'details', 'image', 'category_id', 'status'
    , 'view_count', 'work_address', 'deadline_for_sub', 'salary', 'emp_total'];
    
    protected $searchable = [
        'title',
        'slug',
        'details'
    ];
    
    public function listReWorks()
    {
        return $this->hasMany('App\ReWork');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
