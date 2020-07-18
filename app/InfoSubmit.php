<?php

namespace App;

use App\GroupCategory;
use Illuminate\Database\Eloquent\Model;

class InfoSubmit extends Model
{
    protected $fillable = [
        'name', 'email', 'date_of_birth', 'orders', 'phone', 'address', 'group_category_id'
    ];

    public function groupCategory()
    {
      return $this->hasOne('App\GroupCategory', 'id', 'group_category_id');
    }
}
