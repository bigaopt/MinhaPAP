<?php

namespace App\Models;

use CodeIgniter\Model;

class Jogos extends Model
{
    protected $table = 'jogos';
    protected $primaryKey = 'id_jogo';
    protected $returnType = 'array';
    protected $allowedFields = ['dia','hora','local','id_equipa','adversario','resultado','tipo_resultado'];

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
    
    public function buscar_todos_jogos()
    {
        $db = db_connect();
        
        $query = $db->query("select jogos.id_jogo,jogos.dia,jogos.hora,jogos.local,equipas.nome_equipa ,jogos.adversario,jogos.resultado,jogos.tipo_resultado from jogos, equipas  where jogos.estado like 'ativo' and jogos.id_equipa = equipas.id_equipa");
        
        return $query->getResult();  
    }
}