<?php

namespace App\Repositories;

use App\Models\Categories;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function model()
    {
        return Categories::class;
    }
}