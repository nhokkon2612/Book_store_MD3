<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->belongsToMany(Book::class, 'order_detail', 'order_id');

    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'customer_id');
    }
}
