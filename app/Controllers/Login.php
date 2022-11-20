<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Login extends BaseController
{

    public function index()
    {
        return view('login');
    }

    public function signIn()
    {
        $name = $this->request->getPost('inputName');
        $password = $this->request->getPost('inputPassword');

        $usuarioModel = new UsuarioModel();
        $dadosUsuario = $usuarioModel->getByName($name);
        if (count($dadosUsuario) > 0) {
            $hashUsuario = $dadosUsuario['password'];
            if (password_verify($password, $hashUsuario)) {
                session()->set('isLoggedIn', true);
                session()->set('name', $dadosUsuario['name']);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('msg', 'Usuario ou Senha incorretos');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('msg', 'Usuario ou Senha incorretos');
            return redirect()->to('/login');
        }

    }

    public function signOut() {
        session()->destroy();
        return redirect()->to(base_url());
    }
}

