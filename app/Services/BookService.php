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

    public function __construct(BookRepository $repository, BookValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
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
            $book = $this->repository->find($id);

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
            $this->validator->
            $this->repository->create($data);

            return response()->json(["message" => "Livro criado com sucesso!"], 201);

        } catch(Exception $e) {
            Log::error("Falha ao salvar livro " . $e);
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function update(Array $data, Int $id) {
        try {
            $this->repository->update($data, $id);

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