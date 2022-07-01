<?php

namespace App\Models;

use CodeIgniter\Model;

class Clubes extends Model
{
    protected $table = 'clubes';
    protected $primaryKey = 'id_clube';
    protected $AllowFields = ['nome_clube','estado'];


    public function buscar_todos_clubes()
    {
        $db = db_connect();
        
        $query = $db->query("SELECT * from clubes where estado like 'ativo' order by nome_clube ");
        
        return $query->getResult();    
    }
}