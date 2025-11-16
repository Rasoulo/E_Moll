<?php

namespace App\Models;

use App\Models\User;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function cartitem() {
        return $this->hasMany(CartItem::class);
    }
}
