<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password'];

    public function procurar_por_username(string $username) : array
    {
        $query = $this->where('username', $username)->first();

        return !is_null($query) ? $query : []; //se for diferente de null retorna o query se não retorna um arrray vazio
            
    }
}