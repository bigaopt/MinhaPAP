<div id="app">
    <div id="main" class="layout-horizontal">
        <header class="mb-5">
            <div class="header-top">
                <div class="container">
                    <div class="logo">
                        <img src="Img/logo.jpg" alt="Logo" srcset="">
                    </div>
                    <div class="header-top-right">
                        <!-- Burger button responsive -->
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>
                    <?php

                    if ((bool)session()->logado != true) {
                    } else {
                    ?>

                        <div class="menu-admin">
                            <div class="dropdown" id="conta-admin">
                                <a href="#" class="user-dropdown d-flex dropend" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <i class="bi bi-person-fill" style="color:black;font-size:20px"></i>
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name" style="color:black"> <?php echo session()->username ?> </h6>
                                        <h5 class="user-dropdown-status text-sm text-muted" >Admin</h5>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/admin">Pagina só para admin</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                                </ul>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
            <nav class="main-navbar">
                <div class="container">
                    <ul class="navbar mx-auto justify-content-around">
                        <li class="menu-item  ">
                            <a href="inicio" class='menu-link'>
                                <i class="bi bi-house-fill"></i>
                                <span>Inicio</span>
                            </a>
                        </li>

                        <li class="menu-item active has-sub">
                            <a href="#" class='menu-link'>
                            <i class="bi bi-person"></i>
                                <span>Jogadores</span>
                            </a>
                            <div class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li class="submenu-item  ">
                                            <a href="/inserir_jogador" class='submenu-link'>Inserir Jogador</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="/atualizar_jogadores" class='submenu-link'>Atualizar dados do Jogador</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="/apagar_jogadores" class='submenu-link'>Deletar Jogador</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="#" class='submenu-link'>Associar Jogador a uma Equipa</a>
                                        </li>
                                </div>
                            </div>
                        </li>


                        <li class="menu-item active has-sub">
                            <a href="#" class='menu-link'>
                                <i class="bi bi-person"></i>
                                <span>Tecnicos</span>
                            </a>
                            <div class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">
                                    <ul class="submenu-group">

                                        <li class="submenu-item  ">
                                            <a href="#" class='submenu-link'>Inserir Tecnico</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="#" class='submenu-link'>Atualizar dados do Tecnico</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="#" class='submenu-link'>Deletar tecnico</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="#" class='submenu-link'>Associar Tecnico a uma Equipa</a>
                                        </li>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <main>