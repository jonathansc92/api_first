<?php

namespace App\Repositories;

use App\Models\Books;
use Prettus\Repository\Eloquent\BaseRepository;

class BookRepository extends BaseRepository
{
    public function model()
    {
        return Books::class;
    }
}