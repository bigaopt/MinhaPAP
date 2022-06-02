<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        $jogos = new \App\Models\Jogos();

        $equipa = new \App\Models\Equipas();

        $jogos_recentes = $jogos->mostrar_jogos_mais_recentes(); 

        $equipas = $equipa->mostrar_todas_equipas();

        echo view('head');
        echo view('header');
        echo view('Pages/inicio',['jogos'=>$jogos_recentes,'equipas'=>$equipas]);
        echo view('footer');


    }

    public function clube()
    {
        echo view('head');
        echo view('header');
        echo view('Pages/clube');
        echo view('footer');
    }

    public function noticias()
    {
        echo view('head');
        echo view('header');
        echo view('Pages/noticias');
        echo view('footer');
    }

    public function loja()
    {
        echo view('head');
        echo view('header');
        echo view('Pages/loja');
        echo view('footer');
    }

    public function seniores()
    {
        $jogadores = new \App\Models\Jogadores();

        $equipa = new \App\Models\Equipas();

        $jogos = new \App\Models\Jogos();

        $dados_equipa = $equipa->dados_equipa_seniores();

        $dados_jogos = $jogos->mostrar_jogos_seniores();

        $dados_jogadores = $jogadores->mostrar_jogadores_seniores();

        $pontos_seniores = $equipa->atualiza_pontos_dos_seniores();

        $vitorias_seniores = $equipa->atualiza_numero_vitorias_seniores();

        $empates_seniores = $equipa->atualiza_numero_empates_seniores();

        $derrotas_seniores = $equipa->atualiza_numero_derrotas_seniores();
        

        echo view('head');
        echo view('header');
        echo view('Pages/escaloes/seniores',['dados_equipa'=>$dados_equipa,'dados_jogos'=>$dados_jogos,'dados_jogadores'=>$dados_jogadores]);
        echo view('footer');
    }

    public function juniores()
    {
        $jogadores = new \App\Models\Jogadores();

        $equipa = new \App\Models\Equipas();

        $jogos = new \App\Models\Jogos();

        $dados = $jogadores->getjogadores_juniores();

        $dados_equipa = $equipa->getequipas_juniores();

        $dados_jogos = $jogos->getjogos_juniores();

        $resultados_juniores = $equipa->atualiza_placar_na_equipa_juniores();

        $vitorias_juniores = $equipa->atualizar_numero_vitorias_juniores();

        $empates_juniores = $equipa->atualizar_numero_empates_juniores();

        $derrotas_juniores = $equipa->atualizar_numero_derrotas_juniores();

        
        echo view('head');
        echo view('header');
        echo view('Pages/escaloes/juniores', ['jogadores' => $dados, 'equipa' => $dados_equipa, 'jogos' => $dados_jogos]);
        echo view('footer');
    }

   

}