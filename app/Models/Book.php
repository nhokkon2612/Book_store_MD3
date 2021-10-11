<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id');

    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');

    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_detail', 'book_id');

    }
}
