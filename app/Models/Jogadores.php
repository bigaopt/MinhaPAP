<?php

namespace App\Models;

use CodeIgniter\Model;

class Jogadores extends Model
{
    protected $table = 'jogadores';
    protected $primaryKey = 'id_jogador';
    protected $AllowFields = ['nome_jogador', 'cc_jogador', 'data_nascimento', 'genero', 'nacionalidade', 'morada', 'cod_Postal', 'telefone'];
        

    public function getjogadores_juniores()
    {

        $db = db_connect();
        $query = $db->query("select j.id_jogador,nome_jogador,data_nascimento,genero,nacionalidade from jogadores j ,equipas e, jogadores_equipa js where j.id_jogador = js.id_jogador and js.id_equipa = e.id_equipa and e.nome_escalao = 'juniores' order by nome_jogador asc");

        return $query->getResult();
    }

    public function mostrar_jogadores_seniores()
    {
        $db = db_connect();
        $query = $db->query("select j.id_jogador,nome_jogador,data_nascimento,genero,nacionalidade from jogadores j ,equipas e, jogadores_equipa js where j.id_jogador = js.id_jogador and js.id_equipa = e.id_equipa and e.nome_escalao = 'seniores'  order by nome_jogador asc ");

        return $query->getResult();
    }    

    public function buscar_nomes_jogadores()
    {
        $db = db_connect();

        $query = $db->query("select id_jogador,nome_jogador from jogadores");

        return $query->getResult();
    }
}