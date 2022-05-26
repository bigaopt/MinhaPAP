<?php

namespace App\Models;

use CodeIgniter\Model;

class Jogos extends Model
{
    protected $table = 'jogos';
    protected $primaryKey = 'id_jogo';
    protected $returnType = 'array';

    public function getjogos_juniores()
    {

        $db = db_connect();
        
        $query = $db->query("select j.id_jogo, j.dia ,j.hora, j.local,e.nome_equipa,j.adversario,j.resultado,j.tipo_resultado from jogos j, equipas e where j.id_equipa = e.id_equipa and e.nome_escalao like 'juniores' ");
        
        return $query->getResult();    

    }

    public function mostrar_jogos_mais_recentes()
    {
        $db = db_connect();

        $query = $db->query("select j.dia,j.hora,j.local,e.nome_equipa,j.adversario,j.resultado,j.tipo_resultado from jogos j , equipas e where j.id_equipa = e.id_equipa order by dia DESC limit 8");

        return $query->getResult();
    }

    
    public function mostrar_jogos_seniores()
    {
        $db = db_connect();
        
        $query = $db->query("select j.id_jogo, j.dia ,j.hora, j.local,e.nome_equipa,j.adversario,j.resultado,j.tipo_resultado from jogos j, equipas e where j.id_equipa = e.id_equipa and e.nome_escalao like 'seniores' ");
        
        return $query->getResult();  
    }
    
}