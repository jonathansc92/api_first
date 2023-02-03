<?php

namespace App\Services;

use App\Repositories\BookRepository;
use App\Validations\BookValidator;
use Exception;
use Illuminate\Support\Facades\Log;

class BookService
{
    private $repository;
    private $validator;
    private $bookCategoryService;

    public function __construct(BookRepository $repository, BookValidator $validator, BookCategoryService $bookCategoryService)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->bookCategoryService = $bookCategoryService;
    }

    public function get() {
        try {
            $books = $this->repository
                ->select('id', 'title', 'description', 'author_id')
                ->with(
                    [
                        'author' => function ($q) {
                            return $q->select('id', 'name');
                        }, 
                        'categories.category'
                    ]
                )
                ->get();

            return response()->json(["data" => $books], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function find(Int $id) {
        try {
            $book = $this->repository->with(['author', 'categories.category'])->find($id);

            if (!$book) {
                return response()->json(["message" => "O livro não foi encontrado!"], 404);
            }

            return response()->json(["data" => $book], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function create(Array $data) {
        try {

            $bookData['title'] = $data['title']; 
            $bookData['description'] = $data['description']; 
            $bookData['author_id'] = $data['author_id']; 

            $book = $this->repository->create($bookData);

            if ($data['categories']) {
                foreach ($data['categories'] as $category) {
                    $bookCategoryData['book_id'] = $book->id;
                    $bookCategoryData['category_id'] = $category;

                    $this->bookCategoryService->create($bookCategoryData);
                }
            }

            return response()->json(["message" => "Livro criado com sucesso!"], 201);

        } catch(Exception $e) {
            Log::error("Falha ao salvar livro " . $e);
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function update(Array $data, Int $id) {
        try {

            $bookData['title'] = $data['title']; 
            $bookData['description'] = $data['description']; 
            $bookData['author_id'] = $data['author_id']; 

            $this->repository->update($bookData, $id);

            if ($data['categories']) {
                $this->bookCategoryService->deleteByBook($id);

                foreach ($data['categories'] as $category) {
                    $bookCategoryData['book_id'] = $id;
                    $bookCategoryData['category_id'] = $category;
                    $this->bookCategoryService->create($bookCategoryData);
                }
            }

            return response()->json(["message" => "Livro atualizado com sucesso!"], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function delete(Int $id) {
        try {

            $book = $this->repository->find($id);
            
            if (!$book) {
                return response()->json(["message" => "O livro não foi encontrado!"], 404);
            }

            $this->repository->delete($id);
            return response()->json(["message" => "Livro deletado com sucesso!"], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }
}