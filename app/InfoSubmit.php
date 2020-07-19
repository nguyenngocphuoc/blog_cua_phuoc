<?php

namespace App;

use App\GroupCategory;
use Illuminate\Database\Eloquent\Model;

class InfoSubmit extends Model
{
    protected $fillable = [
        'name', 'email', 'date_of_birth', 'orders', 'phone', 'address' ];

}
