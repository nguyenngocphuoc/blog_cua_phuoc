<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoSubmit extends Model
{
    protected $fillable = [
        'name', 'email', 'date_of_birth', 'category_id', 'phone', 'address'
    ];
}
