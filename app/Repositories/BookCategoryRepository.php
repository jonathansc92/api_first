<?php

namespace App\Repositories;

use App\Models\BookCategories;
use Prettus\Repository\Eloquent\BaseRepository;

class BookCategoryRepository extends BaseRepository
{
    public function model()
    {
        return BookCategories::class;
    }
}