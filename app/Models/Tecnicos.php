<?php

namespace App\Models;

use CodeIgniter\Model;

class Tecnicos extends Model
{
    protected $table = 'tecnicos';
    protected $primaryKey = 'id_tecnico';

    protected $AllowFields = [
        'nome_tecnico',
        'cc_tecnico',
        'data_nascimento',
        'genero',
        'nacionalidade',
        'morada',
        'cod_Postal',
        'telefone',
        'cargo'
    ];

    public function buscar_nome_tecnico()
    {
        $db = db_connect();

        $query = $db->query('SELECT id_tecnico,nome_tecnico from tecnicos ');

        return $query->getResult();
    }

    public function buscar_todo_tecnicos()
    {
        $db = db_connect();

        $query = $db->query("select * from tecnicos where tecnicos.estado like 'Ativo' ");

        return $query->getResult();
    }

    public function buscar_tecnico_nao_associado()
    {
        $db = db_connect();

        $query = $db->query("SELECT tecnicos.* FROM tecnicos left JOIN tecnicos_equipa ON tecnicos.id_tecnico = tecnicos_equipa.id_tecnico WHERE tecnicos_equipa.id_equipa IS NULL and tecnicos.estado like'ativo' ");

        return $query->getResult();
    }
}
