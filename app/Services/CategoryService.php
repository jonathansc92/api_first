<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Validations\CategoryValidator;
use Exception;

class CategoryService
{
    private $repository;
    private $validator;

    public function __construct(CategoryRepository $repository, CategoryValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function get() {
        try {
            $categories = $this->repository->select('id', 'description')->get();

            return response()->json(["data" => $categories], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function find(Int $id) {
        try {
            $category = $this->repository->find($id);

            if (!$category) {
                return response()->json(["message" => "A categoria não foi encontrada!"], 404);
            }

            return response()->json(["data" => $category], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function create(Array $data) {
        try {
            $this->repository->create($data);

            return response()->json(["message" => "Categoria criada com sucesso!"], 201);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function update(Array $data, Int $id) {
        try {
            $this->repository->update($data, $id);

            return response()->json(["message" => "Categoria atualizada com sucesso!"], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }

    public function delete(Int $id) {
        try {

            $category = $this->repository->find($id);
            
            if (!$category) {
                return response()->json(["message" => "A categoria não foi encontrada!"], 404);
            }

            $this->repository->delete($id);
            return response()->json(["message" => "Categoria deletada com sucesso!"], 200);

        } catch(Exception $e) {
            return response()->json(["error" => "Erro interno contate o administrador!"], 500);
        }
    }
}