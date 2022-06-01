<?php

namespace App\Controllers;

use \App\Models\Jogadores;

use \App\Models\Equipas;

use \App\Models\Tecnicos;

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

            $model_equipa = new Equipas();
                       
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

    public function pagina_associar_jogadores() 
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Jogadores();

            $model_equipa = new Equipas();

            $nomes_jogadores = $model->buscar_nomes_jogadores();

            $nome_equipas = $model_equipa->buscar_nomes_equipas();
                       
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/associar_jogadores',['nomes_jogadores' => $nomes_jogadores,'nomes_equipas' => $nome_equipas]);
            echo view('footer');
        }  
    }

    public function associar_jogadores()
    {
        $id_jogador = $this->request->getPost('nome-column');
        $id_equipa = $this->request->getPost('equipa-column');

        dd($id_jogador,$id_equipa);

        $dados_jogador = [
            'id_jogador' => $id_jogador,
            'id_equipa' => $id_equipa
        ];

        $db = db_connect();
        $db->table('jogadores_equipa')->insert($dados_jogador); 

        return redirect()->to(base_url('/admin'));
    }

    public function pagina_inserir_tecnico()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {    
            $model = new Tecnicos();

            $cargos = $model->buscar_cargos();


            
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/inserir_tecnico',['cargos' => $cargos]);
            echo view('footer');
        }  
    }

    public function inserir_tecnico()
    {
        $nome = $this->request->getPost('nome-column');
        $cc = $this->request->getPost('cc-column');
        $data_nascimento = $this->request->getPost('data-column');
        $genero = $this->request->getPost('genero-column');
        $nacionalidade= $this->request->getPost('nacionalidade-column');
        $morada = $this->request->getPost('morada-column');
        $cod_postal = $this->request->getPost('CodPostal-column');
        $telemovel = $this->request->getPost('telemovel-column');
        $cargo = $this->request->getPost('cargo-column');

        $dados_tecnico = [
            'nome_tecnico' => $nome,
            'cc_tecnico' => $cc,
            'data_nascimento' => $data_nascimento,
            'genero' => $genero,
            'nacionalidade' => $nacionalidade,
            'morada' => $morada,
            'cod_Postal' => $cod_postal,
            'telefone' => $telemovel,
            'cargo' => $cargo
        ];

        $db = db_connect();
        $db->table('tecnicos')->insert($dados_tecnico);

        return redirect()->to(base_url('/admin'));
    }

    public function pagina_atualizar_tecnico()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {      
            $model = new Tecnicos();

            $nome_tecnicos = $model->buscar_nome_tecnico();


            echo view('head');
            echo view('Admin/header2');
            echo view('admin/atualizar_tecnico',['nome_tecnicos' => $nome_tecnicos]);
            echo view('footer');
        }  
    }

    public function atualizar_dados_tecnicos()
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
            'cc_tecnico' => $cc,
            'data_nascimento' => $data_nascimento,
            'genero' => $genero,
            'nacionalidade' => $nacionalidade,
            'morada' => $morada,
            'cod_Postal' => $cod_postal,
            'telefone' => $telemovel
        ];

        $db = db_connect();
        $db->table('tecnicos')->where('id_tecnico', $id)->update($dados_jogador);

        return redirect()->to(base_url('/admin'));
    }
}