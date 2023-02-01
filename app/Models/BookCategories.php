<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategories extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'book_categories';
   
    protected $fillable = ['book_id', 'category_id'];

    protected $dates = ['created_at', 'updated_at'];

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
