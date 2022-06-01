<?php

namespace App\Models;

use CodeIgniter\Model;

class Tecnicos extends Model
{
    protected $table = 'tecnicos';
    protected $primaryKey = 'id_tecnico';
    protected $AllowFields = ['nome_tecnico', 'cc_tecnico', 'data_nascimento', 'genero', 'nacionalidade', 'morada', 'cod_Postal', 'telefone','cargo'];

    public function buscar_nome_tecnico()
    {
        $db = db_connect();

        $query = $db->query('SELECT id_tecnico,nome_tecnico from tecnicos');

        return $query->getResult();
    }
}