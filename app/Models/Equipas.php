<?php

namespace App\Models;

use CodeIgniter\Model;

class Equipas extends Model
{
    protected $table = 'equipas';
    protected $primaryKey = 'id_equipa';
    protected $returnType = 'array';

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getequipas_juniores()
    {

        $db = db_connect();
        
        $query = $db->query("select* from equipas where nome_escalao like'juniores'");
        
        return $query->getResult();    
    }

    public function atualiza_placar_na_equipa_juniores() 
    {
        $db = db_connect(); 

        // query para contar o numero de vitorias   $query = $db->query("select count(tipo_resultado) as vitorias from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'juniores' and jogos.tipo_resultado like 'vito%'");

        //query para fazer upade na base de dados  $db->query("UPDATE `equipas` SET `vitorias` =  WHERE `equipas`.`id_equipa` = 1 ;");

        if ($db->simpleQuery("SELECT vitorias FROM `equipas` WHERE id_equipa = 1")) 
        {
          $db->query("UPDATE `equipas` SET `pontos` = (SELECT vitorias * 3 from equipas where id_equipa = 1) + (SELECT empates* 1 from equipas where id_equipa = 1) WHERE `equipas`.`id_equipa` = 1;");
        }           
    }    

    public function atualizar_numero_vitorias_juniores()
    {
        $db = db_connect(); 

        $vitorias = $db->query("UPDATE `equipas` SET `vitorias` = (select count(tipo_resultado) as vitorias from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'juniores' and jogos.tipo_resultado like 'vito%') WHERE `equipas`.`id_equipa` = 1 ;");
    }

    public function atualizar_numero_empates_juniores()
    {
        $db = db_connect(); 

        $empates = $db->query("UPDATE `equipas` SET `empates` = (select count(tipo_resultado) as empates from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'juniores' and jogos.tipo_resultado like 'emp%') WHERE `equipas`.`id_equipa` = 1 ;");
    }

    public function atualizar_numero_derrotas_juniores()
    {
        $db = db_connect(); 

        $derrotas = $db->query("UPDATE `equipas` SET `derrotas` = (select count(tipo_resultado) as derrotas from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'juniores' and jogos.tipo_resultado like 'derro%') WHERE `equipas`.`id_equipa` = 1 ;");
    }



    public function dados_equipa_seniores() 
    {
        $db = db_connect(); 

        $query = $db->query("select* from equipas where nome_escalao like'seniores'");
        
        return $query->getResult();    
    }

    public function atualiza_pontos_dos_seniores()
    {
        $db = db_connect(); 

        if ($db->simpleQuery("SELECT vitorias FROM `equipas` WHERE id_equipa = 2")) 
        {
          $db->query("UPDATE `equipas` SET `pontos` = (SELECT vitorias * 3 from equipas where id_equipa = 2) + (SELECT empates* 1 from equipas where id_equipa = 2) WHERE `equipas`.`id_equipa` = 2;");
        }  
    }

    public function atualiza_numero_vitorias_seniores()
    {
        $db = db_connect(); 

        $vitorias = $db->query("UPDATE `equipas` SET `vitorias` = (select count(tipo_resultado) as vitorias from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'seniores' and jogos.tipo_resultado like 'vito%') WHERE `equipas`.`id_equipa` = 2 ;");
    }

    public function atualiza_numero_empates_seniores()
    {
        $db = db_connect(); 

        $empates = $db->query("UPDATE `equipas` SET `empates` = (select count(tipo_resultado) as empates from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'seniores' and jogos.tipo_resultado like 'emp%') WHERE `equipas`.`id_equipa` = 2 ;");
    }

    public function atualiza_numero_derrotas_seniores()
    {
        $db = db_connect(); 

        $derrotas = $db->query("UPDATE `equipas` SET `derrotas` = (select count(tipo_resultado) as derrotas from jogos , equipas where jogos.id_equipa = equipas.id_equipa and equipas.nome_escalao like 'seniores' and jogos.tipo_resultado like 'derro%') WHERE `equipas`.`id_equipa` = 2 ;");
    }


    public function mostrar_todas_equipas()
    {

        $builder = $this->db->table("equipas");

        $builder->select('nome_equipa , nome_escalao , pontos , classificacao');
        $builder->orderBy('classificacao','desc');
        $query = $builder->get();
        
        return $query->getResult();
    }


    public function buscar_nomes_equipas()
    {
        $db = db_connect();

        $query = $db->query("select id_equipa, nome_equipa from equipas");

        return $query->getResult();
    }
}