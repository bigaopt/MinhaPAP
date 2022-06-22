<div id="app">
    <div id="main" class="layout-horizontal">
        <header class="mb-5">
            <div class="header-top">
                <div class="container">
                    <div class="logo">
                        <img src="<?php echo base_url('Img/logo.jpg')?>" alt="Logo" srcset="">
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
                                        <h5 class="user-dropdown-status text-sm text-muted">Admin</h5>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/admin">Pagina do admin</a></li>
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
                    <ul class="navbar mx-auto">

                        <li class="menu-item  ">
                            <a href="inicio" class='menu-link'>
                                <i class="bi bi-house-fill" style="color:white;"></i>
                                <span>Início</span>
                            </a>
                        </li>

                        <li class="menu-item  ">
                            <a href="clube" class='menu-link'>
                                <i class="bi bi-shield-fill" style="color:white;"></i>
                                <span>Clube</span>
                            </a>
                        </li>

                        <li class="menu-item active has-sub">
                            <a href="#" class='menu-link'>
                                <i class="bi bi-bar-chart-steps" style="color:white;"></i>
                                <span>Escalões</span>
                            </a>
                            <div class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li class="submenu-item  ">
                                            <a href="seniores" class='submenu-link'>Séniores</a>
                                        </li>

                                        <li class="submenu-item  ">
                                            <a href="juniores" class='submenu-link'>Juniores</a>
                                        </li>
                                </div>
                            </div>
                        </li>

                        <li class="menu-item  ">
                            <a href="noticias" class='menu-link'>
                                <i class="bi bi-newspaper" style="color:white;"></i>
                                <span>Notícias</span>
                            </a>
                        </li>

                        <li class="menu-item  ">
                            <a href="loja" class='menu-link'>
                                <i class="bi bi-shop-window" style="color:white;"></i>
                                <span>Loja</span>
                            </a>
                        </li>



                    </ul>
                </div>
            </nav>

        </header>
        <main>