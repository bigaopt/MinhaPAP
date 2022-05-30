<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        return view('Admin/login');
    }

    public function login()
    {
        $username = $this->request->getPost('inputUsername');
        $password = $this->request->getPost('inputPassword');

        $model = new UserModel(); //instancia o model
 
        $dados_user = $model->procurar_por_username($username); //retorna o array que pode ter algum valor ou nao
        

        if(count($dados_user) > 0 ) 
        {    

            if(password_verify($password, $dados_user['password'])) //verifica se pass da base de dados é igual ao que o utilizador escreveu
            {
                session()->set('logado', true);
                session()->set('username', $username);
                return redirect()->to('/entrou');
            }
            else
            {
                session()->setFlashdata('msg','ops, A password esta errada');
                return redirect()->to(base_url('/admin'));
            }
        }
        else
        {
            session()->setFlashdata('msg','ops, utilizador foi não encontrado');
            return redirect()->to(base_url('/admin'));
        }

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/inicio'));
    }

    public function logado()
    {
        return redirect()->to(base_url('/inicio'));
    }


    public function index_registo()
    {
        return view('Admin/registo');
    }

    public function signup()
    {
        $username = $this->request->getPost('inputUsername');
        $email = $this->request->getPost('inputEmail');
        $password = $this->request->getPost('inputPassword');
        
        $dados = [

            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)

        ];
        
        (new UserModel())->insert($dados);


        return redirect()->to(base_url('/admin'));
    }
}