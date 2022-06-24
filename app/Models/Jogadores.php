<?php

namespace App\Models;

use CodeIgniter\Model;

class Jogadores extends Model
{
    protected $table = 'jogadores';
    protected $primaryKey = 'id_jogador';
    protected $AllowFields = ['nome_jogador', 'cc_jogador', 'data_nascimento', 'genero', 'nacionalidade', 'morada', 'cod_Postal', 'telefone','estado'];
        

    public function getjogadores_juniores()
    {

        $db = db_connect();
        $query = $db->query("select j.id_jogador,nome_jogador,data_nascimento,genero,nacionalidade from jogadores j ,equipas e, jogadores_equipa js where  j.id_jogador = js.id_jogador and js.id_equipa = e.id_equipa and e.nome_escalao = 'juniores'  order by nome_jogador asc");

        return $query->getResult();
    }

    public function mostrar_jogadores_seniores()
    {
        $db = db_connect();
        $query = $db->query("SELECT j.id_jogador,nome_jogador,data_nascimento,genero,nacionalidade from jogadores j ,equipas e, jogadores_equipa js where  j.id_jogador = js.id_jogador and js.id_equipa = e.id_equipa and e.nome_escalao = 'seniores'  order by nome_jogador asc ");

        return $query->getResult();
    }    

    public function buscar_jogadores_nao_associados()
    {
        $db = db_connect();

        //Mostra os jogadores que nao estão associados a uma equipa
        $query = $db->query("SELECT jogadores.* FROM jogadores left JOIN jogadores_equipa ON jogadores.id_jogador = jogadores_equipa.id_jogador  WHERE jogadores_equipa.id_equipa IS NULL");

        return $query->getResult();
    }

    public function mostrar_todos_jogadores()
    {
        $db = db_connect();
        $query = $db->query("SELECT * from jogadores where jogadores.estado like 'ativo' ");

        return $query->getResult();
    }

  
}