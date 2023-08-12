<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    // use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function cart()
    {
        return $this->hasMany('App\Models\Cart', 'carts_id', 'id');
    }
}
