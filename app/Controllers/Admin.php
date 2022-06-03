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
        
        $db->table('jogadores')->set('estado','0')->where('id_jogador', $id)->update();

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

            $cargos = $model->buscar_nome_tecnico();

            
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

        return redirect()->to(base_url('/tabela_tecnicos'));
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

        return redirect()->to(base_url('/tabela_tecnicos'));
    }

    public function pagina_apagar_tecnico()
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
            echo view('admin/apagar_tecnico',['nome_tecnicos' => $nome_tecnicos]);
            echo view('footer');
        }  
    }

    public function apagar_tecnico()
    {
        $id = $this->request->getPost('nome-column');

        $db = db_connect();

        $db->table('tecnicos')->set('estado','0')->where('id_tecnico', $id)->update();

        return redirect()->to(base_url('/tabela_tecnicos'));
    }

    public function pagina_associar_tecnico() 
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Tecnicos();

            $model_equipa = new Equipas();

            $nomes_tecnicos = $model->buscar_nome_tecnico();

            $nome_equipas = $model_equipa->buscar_nomes_equipas();
                       
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/associar_tecnicos',['nomes_tecnicos' => $nomes_tecnicos,'nomes_equipas' => $nome_equipas]);
            echo view('footer');
        } 
    }

    public function associar_tecnicos()
    {
        $id_tecnico = $this->request->getPost('nome-column');
        $id_equipa = $this->request->getPost('equipa-column');

        

        $dados_jogador = [
            'id_jogador' => $id_tecnico,
            'id_equipa' => $id_equipa
        ];

        $db = db_connect();
        $db->table('tecnicos_equipa')->insert($dados_jogador); 

        return redirect()->to(base_url('/tabela_tecnicos'));
    }

    public function pagina_tabela_jogadores()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Jogadores();

            $jogadores = $model->mostrar_todos_jogadores();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_jogadores',['jogadores' => $jogadores]);
            echo view('footer');
        } 
    }

    public function pagina_tabela_tecnicos()
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Tecnicos();

            $tecnicos = $model->buscar_todo_tecnicos();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_tecnicos',['tecnicos' => $tecnicos]);
            echo view('footer');
        } 
    }

    public function pagina_tabela_equipas() 
    {
        if ((bool)session()->logado != true) 
        {
            return redirect()->to(base_url('/login'));
        } 
        else 
        {
            $model = new Equipas();

            $equipas = $model->buscar_todas_equipas();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_equipas',['equipas' => $equipas]);
            echo view('footer');
        } 
    }
}



