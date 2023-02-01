<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $service;

    public function __construct(AuthorService $service)
    {
        $this->service = $service;
    }

    public function index() {
        return $this->service->get();
    }

    public function find($id) {
        return $this->service->find($id);
    }

    public function create(Request $data) {
        return $this->service->create($data->all());
    }

    public function update(Request $data, $id) {
        return $this->service->update($data->all(), $id);
    }

    public function delete($id) {
        return $this->service->delete($id);
    }
}
