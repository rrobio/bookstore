<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'first_name',
        'last_name',
    ];

    public function books() {
        return $this->hasMany(Book::class, 'author_id');
    }
}
