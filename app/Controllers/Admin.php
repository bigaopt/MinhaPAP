<?php

namespace App\Controllers;

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

    public function inserir_jogador()
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
}