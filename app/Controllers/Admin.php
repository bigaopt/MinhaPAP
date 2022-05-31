<?php

namespace App\Controllers;

use \App\Models\Jogadores;

class Admin extends BaseController
{
    public function index()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
        echo view('head');
        echo view('Admin/header2');
        echo view('admin/index');
        echo view('footer');
        }
    }

    public function pagina_inserir_jogador()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/inserir_jogadores');
            echo view('footer');
        }   
    }

    public function inserir_jogadores()
    {
        $nome = $this->request->getPost('nome-column');
        $cc = $this->request->getPost('cc-column');
        $data_nascimento = $this->request->getPost('data-column');
        $genero = $this->request->getPost('genero-column');
        $nacionalidade= $this->request->getPost('nacionalidade-column');
        $morada = $this->request->getPost('morada-column');
        $cod_postal = $this->request->getPost('CodPostal-column');
        $telemovel = $this->request->getPost('telemovel-column');

        $dados_jogador = [
            'nome_jogador' => $nome,
            'cc_jogador' => $cc,
            'data_nascimento' => $data_nascimento,
            'genero' => $genero,
            'nacionalidade' => $nacionalidade,
            'morada' => $morada,
            'cod_Postal' => $cod_postal,
            'telefone' => $telemovel
        ];
        
        $db = db_connect();
        $db->table('jogadores')->insert($dados_jogador);


        return redirect()->to(base_url('/admin'));
    }


    public function pagina_atualizar_dados_jogadores()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Jogadores();

            $nomes_jogadores = $model->buscar_nomes_jogadores();
                       
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/atualizar_jogadores',['nomes_jogadores' => $nomes_jogadores]);
            echo view('footer');
        }   
    }

    public function atualizar_dados_jogadores()
    {
        $id = $this->request->getPost('nome-column');
        $cc = $this->request->getPost('cc-column');
        $data_nascimento = $this->request->getPost('data-column');
        $genero = $this->request->getPost('genero-column');
        $nacionalidade= $this->request->getPost('nacionalidade-column');
        $morada = $this->request->getPost('morada-column');
        $cod_postal = $this->request->getPost('CodPostal-column');
        $telemovel = $this->request->getPost('telemovel-column');

        $dados_jogador = [
            'cc_jogador' => $cc,
            'data_nascimento' => $data_nascimento,
            'genero' => $genero,
            'nacionalidade' => $nacionalidade,
            'morada' => $morada,
            'cod_Postal' => $cod_postal,
            'telefone' => $telemovel
        ];

        $db = db_connect();
        $db->table('jogadores')->where('id_jogador', $id)->update($dados_jogador);

        return redirect()->to(base_url('/admin'));
    }

    public function pagina_apagar_jogadores()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Jogadores();

            $nomes_jogadores = $model->buscar_nomes_jogadores();
                       
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/apagar_jogadores',['nomes_jogadores' => $nomes_jogadores]);
            echo view('footer');
        }  
    }

    public function apagar_jogadores()
    {
        $id = $this->request->getPost('nome-column');

        $db = db_connect();
        $db->table('jogadores')->where('id_jogador', $id)->delete();

        return redirect()->to(base_url('/admin'));
    }
}