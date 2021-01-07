<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'jumlah_pesanan',
        'quantity',
        'harga',
        'subtotal',
        'status',
        'user_id'
    ];
}
