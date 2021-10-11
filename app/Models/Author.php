<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    private mixed $live_die_unknow;

    public function books()
    {
        return $this->hasMany(Book::class, 'author_id');
    }
}
