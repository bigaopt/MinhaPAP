<?php

namespace App\Controllers;

use \App\Models\Jogadores;

use \App\Models\Equipas;

use \App\Models\Tecnicos;

use \App\Models\Jogos;

class Admin extends BaseController
{

    public function index()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            echo view('head');
            echo view('Admin/header2');
            echo view('admin/index');
            echo view('footer');
        }
    }

    public function pagina_inserir_jogador()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
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
        $nacionalidade = $this->request->getPost('nacionalidade-column');
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


    public function pagina_atualizar_dados_jogadores($id)
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Jogadores();

            $dados = $model->find($id); //procura o tecnico na base de dados

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/atualizar_jogadores', ['id' => $dados['id_jogador'], 'nome' => $dados['nome_jogador']]);
            echo view('footer');
        }
    }

    public function atualizar_dados_jogadores()
    {
        $nome = $this->request->getPost('id-column'); //vai buscar o nome do jogador à view

        $model = new Jogadores();

        $data = $model->where('nome_jogador', $nome)->first(); //PROCURA NA BASE DE DADOS O jogador COM O MESMO NOME


        $cc = $this->request->getPost('cc-column');
        $data_nascimento = $this->request->getPost('data-column');
        $genero = $this->request->getPost('genero-column');
        $nacionalidade = $this->request->getPost('nacionalidade-column');
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
        $db->table('jogadores')->where('id_jogador', $data['id_jogador'])->update($dados_jogador);

        return redirect()->to(base_url('/admin'));
    }

    public function confimacao_apagar_jogador($id)
    {

        $model = new Jogadores();

        $jogador = $model->find($id);

        $nome = $jogador['nome_jogador'];

        echo view('head');
        echo view('admin/pagina_apagar_jogador', ['nome' => $nome, 'id' => $id]);
    }

    public function apagar_jogadores($id)
    {

        $dados = [
            'estado' => 'inativo'
        ];

        $db = db_connect();

        $db->table('jogadores')->where('id_jogador', $id)->update($dados);

        return redirect()->to(base_url('/tabela_jogadores'));
    }

    public function pagina_associar_jogadores()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Jogadores();

            $model_equipa = new Equipas();

            $nomes_jogadores = $model->buscar_nomes_jogadores();

            $nome_equipas = $model_equipa->buscar_nomes_equipas();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/associar_jogadores', ['nomes_jogadores' => $nomes_jogadores, 'nomes_equipas' => $nome_equipas]);
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
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Tecnicos();

            $cargos = $model->buscar_nome_tecnico();


            echo view('head');
            echo view('Admin/header2');
            echo view('admin/inserir_tecnico', ['cargos' => $cargos]);
            echo view('footer');
        }
    }

    public function inserir_tecnico()
    {
        $nome = $this->request->getPost('nome-column');
        $cc = $this->request->getPost('cc-column');
        $data_nascimento = $this->request->getPost('data-column');
        $genero = $this->request->getPost('genero-column');
        $nacionalidade = $this->request->getPost('nacionalidade-column');
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

    public function pagina_atualizar_tecnico($id)
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Tecnicos();

            $data = $model->find($id); //procura o tecnico na base de dados

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/atualizar_tecnico', ['id' => $data['id_tecnico'], 'nome' => $data['nome_tecnico']]);
            echo view('footer');
        }
    }

    public function atualizar_dados_tecnicos()
    {


        $nome = $this->request->getPost('id-column');
        $model = new Tecnicos();

        $data = $model->where('nome_tecnico', $nome)->first(); //PROCURA NA BASE DE DADOS O TECNICO COM O MESMO NOME

        $cc = $this->request->getPost('cc-column');
        $data_nascimento = $this->request->getPost('data-column');
        $genero = $this->request->getPost('genero-column');
        $nacionalidade = $this->request->getPost('nacionalidade-column');
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



        $model = new Tecnicos();

        $db = db_connect();

        $query = $db->table('tecnicos')->where('id_tecnico', $data['id_tecnico'])->update($dados_tecnico);

        return redirect()->to(base_url('/tabela_tecnicos'));
    }

    public function confimacao_apagar_tecnico($id)
    {
        $model = new Tecnicos();

        $tecnico = $model->find($id);

        $nome = $tecnico['nome_tecnico'];

        echo view('head');
        echo view('admin/pagina_apagar_tecnico', ['nome' => $nome, 'id' => $id]);
    }

    public function apagar_tecnico($id) //recebe o id do URL
    {
        $model = new Tecnicos();

        $dados = [
            'estado' => 'inativo'
        ];

        $db = db_connect();


        $db->table('tecnicos')->where('id_tecnico', $id)->update($dados);

        return redirect()->to(base_url('/tabela_tecnicos'));
    }

    public function pagina_associar_tecnico()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Tecnicos();

            $model_equipa = new Equipas();

            $nomes_tecnicos = $model->buscar_nome_tecnico();

            $nome_equipas = $model_equipa->buscar_nomes_equipas();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/associar_tecnicos', ['nomes_tecnicos' => $nomes_tecnicos, 'nomes_equipas' => $nome_equipas]);
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
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Jogadores();

            $jogadores = $model->mostrar_todos_jogadores();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_jogadores', ['jogadores' => $jogadores]);
            echo view('footer');
        }
    }

    public function pagina_tabela_tecnicos()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Tecnicos();

            $tecnicos = $model->buscar_todo_tecnicos();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_tecnicos', ['tecnicos' => $tecnicos]);
            echo view('footer');
        }
    }

    public function pagina_tabela_equipas()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Equipas();

            $equipas = $model->buscar_todas_equipas();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_equipas', ['equipas' => $equipas]);
            echo view('footer');
        }
    }

    public function confimacao_apagar_equipa($id)
    {
        $model = new Equipas();

        $equipa = $model->find($id);

        $nome = $equipa['nome_equipa'];

        echo view('head');
        echo view('admin/pagina_apagar_equipa', ['nome' => $nome, 'id' => $id]);
    }

    public function apagar_equipa($id)
    {
        $db = db_connect();

        $model = new Equipas();

        $dados = $model->find($id); //procura se o id que recebeu existe na base de dados

        $escalao = $dados['nome_escalao'];


        $query = $db->query("SELECT count(equipas.nome_equipa) as equipas from equipas where nome_escalao like '$escalao' and estado like 'ativo'"); //conta o numero de equipas que estao ativas de um escalao

        echo $query->getRow()->equipas;

        $estado = [
            'estado' => 'inativo'
        ];

        if ($query->getRow()->equipas <= 1) //se tiver mais que uma equipa
        {
            $db->table('equipas')->where('id_equipa', $id)->update($estado); //elimina a equipa
            $apagar_escalao = $db->query("UPDATE escaloes set escaloes.estado = 'inativo' where  escaloes.nome_escalao like '$escalao' "); //muda o estado para inativo o escalao da equipa que foi apagada
            return redirect()->to(base_url('/tabela_equipas'));
        } else {
            $db->table('equipas')->where('id_equipas', $id)->update($estado); //elimina a equipa
            return redirect()->to(base_url('/tabela_equipas'));
        }
    }


    public function pagina_inserir_equipa()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {

            $model = new Equipas();

            $escaloes = $model->buscar_escaloes();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/inserir_equipa', ['escaloes' => $escaloes]);
            echo view('footer');
        }
    }

    public function inserir_equipa()
    {
        $nome = $this->request->getPost('nome-column');
        $escalao = $this->request->getPost('cargo-column');
        $classificaçao = $this->request->getPost('classificacao-column');


        $dados_equipa = [
            'nome_equipa' => $nome,
            'nome_escalao' => $escalao,
            'classificacao' => $classificaçao
        ];

        $db = db_connect();
        if ($db->table('equipas')->insert($dados_equipa)) {
            $query = $db->query("SELECT escaloes.nome_escalao, escaloes.estado from escaloes join equipas on equipas.nome_escalao = escaloes.nome_escalao where equipas.nome_equipa like'$nome'"); //procura o estado da equipa que acabei de inserir

            $estado = $query->getRowArray();

            $estado_escalao = $estado['estado'];

            if ($estado_escalao == 'inativo') {
                $db->table('escaloes')->where('nome_escalao', $escalao)->update(['estado' => 'ativo']); //se o estado tiver inativo altera para ativo
            }
            return redirect()->to(base_url('/tabela_equipas'));
        } else {
            die("erro ao inserir equipa");
            return redirect()->to(base_url('/tabela_equipas'));
        }
    }

    public function pagina_tabela_jogos()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {

            $model = new Jogos();

            $jogos = $model->buscar_todos_jogos();


            echo view('head');
            echo view('Admin/header2');
            echo view('admin/tabela_jogos', ['jogos' => $jogos]);
            echo view('footer');
        }
    }

    public function pagina_inserir_jogo()
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {

            $model = new Equipas();

            $equipas = $model->buscar_nomes_equipas();

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/inserir_jogo', ['equipas' => $equipas]);
            echo view('footer');
        }
    }

    public function inserir_jogo()
    {
        $hora = $this->request->getPost('hora-column');
        $data = $this->request->getPost('data-column');
        $local = $this->request->getPost('local-column');
        $equipa = $this->request->getPost('equipa-column');
        $adversario = $this->request->getPost('adversario-column');
        $resultado = $this->request->getPost('resultado-column');
        $tipo_resultado = $this->request->getPost('tipo-resultado');

        $dados = [
            'hora' => $hora,
            'dia' => $data,
            'local' => $local,
            'id_equipa' => $equipa,
            'adversario' => $adversario,
            'resultado' => $resultado,
            'tipo_resultado' => $tipo_resultado
        ];

        $model = new Jogos();

        $insert = $model->insert($dados);
        return redirect()->to(base_url('/tabela_jogos'));
    }

    public function confimacao_apagar_jogo($id)
    {
        $model = new Jogos();

        $db = db_connect();

        $query= $db->query("Select e.nome_equipa , j.* from equipas e, jogos j where j.id_equipa = e.id_equipa and j.id_jogo = '$id'");
        $jogo = $query->getRow(); //O get Row  retorna uma única linha de resultado. Se sua consulta tiver mais de uma linha, ela retornará apenas a primeira linha.
        

        if (isset($jogo)) {
            $equipa =  $jogo->nome_equipa;
            $adversario  = $jogo->adversario;
            
        }     

       
        echo view('head');
        echo view('admin/pagina_apagar_jogo', ['equipa' => $equipa ,'adversario'=>$adversario ,'id' => $id]);
    }

    public function apagar_jogo($id)
    {
        $dados = [
            'estado' => 'inativo'
        ];

        $db = db_connect();

        $db->table('jogos')->where('id_jogo', $id)->update($dados);

        return redirect()->to(base_url('/tabela_jogos'));

    }

    public function pagina_atualizar_equipa($id)
    {
        if ((bool)session()->logado != true) {
            return redirect()->to(base_url('/login'));
        } else {
            $model = new Equipas();

            $data = $model->find($id); //procura a equipa na base de dados

            echo view('head');
            echo view('Admin/header2');
            echo view('admin/atualizar_equipa', ['id' => $data['id_equipa'], 'nome' => $data['nome_equipa']]);
            echo view('footer');
        }
    }

    public function atualizar_equipa()
    {
        $nome = $this->request->getPost('equipa-column');

        $model = new Equipas();

        $equipa = $model->where('nome_equipa', $nome)->first(); //procura a equipa na base de dados



        $classificaçao = $this->request->getPost('classificacao-column');

        $dados = [
            'classificacao' => $classificaçao
        ];

        $db = db_connect();
        $db->table('equipas')->where('id_equipa', $equipa['id_equipa'])->update($dados);

        return redirect()->to(base_url('/tabela_equipas'));
    }
}
