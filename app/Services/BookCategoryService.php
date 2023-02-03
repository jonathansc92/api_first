<?php

namespace App\Services;

use App\Repositories\BookCategoryRepository;
use Exception;
use Illuminate\Support\Facades\Log;

class BookCategoryService
{
    private $repository;

    public function __construct(BookCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(Array $data) {
        try {
            $this->repository->create($data);
        } catch(Exception $e) {
            Log::error("Falha ao salvar livro " . $e);
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function deleteByBook(Int $bookId) {
        try {
            $this->repository->where('book_id', $bookId)->delete();
        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }
}