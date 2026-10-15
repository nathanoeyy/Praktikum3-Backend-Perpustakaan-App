<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'isbn', 'publisher_year', 'price', 'stock', 'author_id'];

    public function author()
    {
        return $this->belongTo(Author::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
    //
}
