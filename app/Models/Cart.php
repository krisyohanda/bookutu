<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // use HasFactory;
    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'book_id', 'id');
    }
    public function checkout()
    {
        return $this->belongsTo('App\Models\Checkout', 'user_id', 'id');
    }
}
