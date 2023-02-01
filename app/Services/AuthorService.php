<?php

namespace App\Services;

use App\Repositories\AuthorRepository;
use App\Validations\AuthorValidator;
use Exception;

class AuthorService
{
    private $repository;
    private $validator;

    public function __construct(AuthorRepository $repository, AuthorValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function get() {
        try {
            $authors = $this->repository->select('id', 'name')->get();

            return response()->json(["data" => $authors], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function find(Int $id) {
        try {
            $author = $this->repository->find($id);

            if (!$author) {
                return response()->json(["message" => "O Autor não foi encontrado!"], 404);
            }

            return response()->json(["data" => $author], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function create(Array $data) {
        try {
            $this->repository->create($data);

            return response()->json(["message" => "Autor criado com sucesso!"], 201);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function update(Array $data, Int $id) {
        try {
            $this->repository->update($data, $id);

            return response()->json(["message" => "Autor atualizado com sucesso!"], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function delete(Int $id) {
        try {

            $author = $this->repository->find($id);
            
            if (!$author) {
                return response()->json(["message" => "O Autor não foi encontrado!"], 404);
            }

            $this->repository->delete($id);
            return response()->json(["message" => "Autor deletado com sucesso!"], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }
}