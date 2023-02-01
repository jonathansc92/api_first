<?php

namespace App\Repositories;

use App\Models\Authors;
use Prettus\Repository\Eloquent\BaseRepository;

class AuthorRepository extends BaseRepository
{
    public function model()
    {
        return Authors::class;
    }
}