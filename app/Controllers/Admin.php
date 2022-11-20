<?php

namespace App\Controllers;
use App\Models\EquipeModel;

class Admin extends BaseController
{
    private $equipeModel;

    public function __construct()
    {

        $this->equipeModel = new EquipeModel();

    }
    public function index()
    {
        return view('admin', [
            'equipes' => $this->equipeModel->paginate(10),
            'pager' => $this->equipeModel->pager
        ]);
    }

    public function delete($id) {
        if ($this->equipeModel->delete($id)) {
            echo view('messages', [
                'message' => 'Funcionário excluido com sucesso!'
            ]);
        } else {
            echo view('messages', [
                'message' => 'Erro ao tentar excluit funcionário!'
            ]);
        }
    }

    public function create() {
        return view('form');
    }

    public function store() {
        if ($this->equipeModel->save($this->request->getPost())) {
            return view('messages', [
                'message' => 'Funcionário salvo com sucesso!'
            ]);
        } else {
            return view('messages', [
                'message' => 'Erro ao tentar salvar o funcionário!'
            ]);
        }
    }

    public function edit($id) {
        return view('form', [
            'user' => $this->equipeModel->find($id)
        ]);
    }
}