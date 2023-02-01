<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'books';
   
    protected $fillable = ['title', 'description', 'author_id'];

    protected $dates = ['created_at', 'updated_at'];

    public function author() {
        return $this->belongsTo(Authors::class, 'author_id', 'id');
    }

    public function categories() {
        return $this->hasMany(BookCategories::class, 'book_id', 'id');
    }
}
