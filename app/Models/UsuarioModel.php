<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'users';

    protected $allowedFields = [
        'name',
        'password'
    ];

    public function getByName(string $name) : array {

        $rq = $this->where('name', $name)->first();

        return !is_null($rq) ? $rq : [];
    }

}