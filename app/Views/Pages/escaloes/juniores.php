<div class="content-wrapper container">
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Equipa</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Plantel</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Jogos</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="card-body">
                                <h4>Juniores</h4>
                                <h5>Plantel 2021/2022</h5>
                                <img src="Img/juniores/foto_seniores.jpg" width="100%">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active pt-3" id="home" role="tabpanel" aria-labelledby="equipa-tab">
                                        <div class="table-responsive ">
                                            <table class="table table-hover table-dark text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Escalao</th>
                                                        <th>Pontos</th>
                                                        <th>Vitórias</th>
                                                        <th>Empates</th>
                                                        <th>Derrotas</th>
                                                        <th>Classificação</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($equipa as $registo) : ?>
                                                        <tr class="table-light">
                                                            <td><?= $registo->nome_equipa; ?></td>
                                                            <td><?= $registo->nome_escalao; ?></td>
                                                            <td><?= $registo->pontos; ?></td>
                                                            <td><?= $registo->vitorias; ?></td>
                                                            <td><?= $registo->empates; ?></td>
                                                            <td><?= $registo->derrotas; ?></td>
                                                            <td><?= $registo->classificacao; ?></td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade pt-3" id="profile" role="tabpanel" aria-labelledby="plantel-tab">
                                        <div class="row">
                                            <h5>Guarda-Redes</h5>
                                            <div class="col-3 text-center" id="gustavo">
                                                <img src="Img/juniores/Gustavo Pinto junior.png" width="100%">
                                                <p>Gustavo Pinto</p>
                                            </div>
                                            <div class="col-3">

                                            </div>
                                            <div class="col-3">

                                            </div>
                                            <div class="col-3">

                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h5>Defesas</h5>
                                            <div class="row">
                                                <div class="col-3 text-center" id="helder">
                                                    <img src="Img/juniores/Helder Tavares junior.png" width="100%">
                                                    <p>Helder Tavares</p>
                                                </div>
                                                <div class="col-3 text-center" id="henrique">
                                                    <img src="Img/juniores/Henrique Cardoso junior.png" width="100%" height="70%">
                                                    <p>Henrique Cardoso</p>
                                                </div>
                                                <div class="col-3 text-center" id="ze">
                                                    <img src="Img/juniores/Jose Silva junior.png" width="100%">
                                                    <p>Jose Silva</p>
                                                </div>
                                                <div class="col-3 text-center" id="mateus">
                                                    <img src="Img/juniores/Mateus Nunes junior.png" width="100%">
                                                    <p>Mateus Nunes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 text-center" id="pedro">
                                                    <img src="Img/juniores/Pedro Rodrigues junior.png" width="100%">
                                                    <p>Pedro Rdorigues</p>
                                                </div>
                                                <div class="col-3 text-center" id="rodrigo">
                                                    <img src="Img/juniores/Rodrigo Soares junior.png" width="100%" height="70%">
                                                    <p>Rodrigo Soares</p>
                                                </div>
                                                <div class="col-3 text-center" id="micael">
                                                    <img src="Img/juniores/Micael Paiva junior.png" width="100%" height="70%">
                                                    <p>Micael Paiva</p>
                                                </div>
                                                <div class="col-3 text-center" id="talhas">
                                                    <img src="Img/juniores/Henrique Talhas junior.png" width="100%">
                                                    <p>Henrique Talhas</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <h5>Medios</h5>
                                            <div class="row">
                                                <div class="col-3 text-center" id="david">
                                                    <img src="Img/juniores/David Santos junior.png" width="100%" height="70%">
                                                    <p>David Santos</p>
                                                </div>
                                                <div class="col-3 text-center" id="lino">
                                                    <img src="Img/juniores/Gonçalo Lino junior.png" width="100%" height="70%">
                                                    <p>Gonçalo Lino</p>
                                                </div>
                                                <div class="col-3 text-center" id="carvalho">
                                                    <img src="Img/juniores/Joao Carvalho junior.png" width="100%">
                                                    <p>João carvalho</p>
                                                </div>
                                                <div class="col-3 text-center" id="avelino">
                                                    <img src="Img/juniores/Nuno Avelino junior.png" width="100%" height="70%">
                                                    <p>Nuno Avelino</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <h5>Avançados</h5>
                                            <div class="row">
                                                <div class="col-3 text-center" id="marco">
                                                    <img src="Img/juniores/Marco Bastos junior.png" width="100%" height="70%">
                                                    <p>Marco Bastos</p>
                                                </div>
                                                <div class="col-3 text-center" id="pereira">
                                                    <img src="Img/juniores/Marco Pereira junior.png" width="100%" >
                                                    <p>Marco Pereira</p>
                                                </div>
                                                <div class="col-3 text-center" id="renato">
                                                    <img src="Img/juniores/Renato Lima junior.png" width="100%">
                                                    <p>Renato Lima</p>
                                                </div>
                                                <div class="col-3 text-center" id="moutinho">
                                                    <img src="Img/juniores/Xavier Moutinho junior.png" width="100%" height="70%">
                                                    <p>Xavier Moutinho</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                       <div class="row">
                                            <h5>Tecnicos</h5>
                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <img src="Img/juniores/Treinador Helder juniores.PNG" width="100%">
                                                    <p>Helder Sousa</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <img src="Img/juniores/Treinador Eduardo juniores.PNG" width="100%"  height="70%">
                                                    <p>Eduardo Sousa</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <img src="Img/juniores/Diretor Fernando juniores.PNG" width="100%" height="70%">
                                                    <p>Fernando Tavares</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                </div>
                                            </div>
                                        </div> 

                                    </div>
                                    <div class="tab-pane fade pt-3" id="contact" role="tabpanel" aria-labelledby="jogos-tab">
                                        <div class="table-responsive ">
                                            <table class="table table-hover table-dark text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Dia</th>
                                                        <th>Hora</th>
                                                        <th>Local</th>
                                                        <th>Nome Equipa</th>
                                                        <th>Adversário</th>
                                                        <th>Resultado</th>
                                                        <th>Tipo de Resultado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($jogos as $jogo) : ?>
                                                        <tr class="table-light">
                                                            <td><?= $jogo->dia; ?></td>
                                                            <td><?= $jogo->hora; ?></td>
                                                            <td><?= $jogo->local; ?></td>
                                                            <td><?= $jogo->nome_equipa; ?></td>
                                                            <td><?= $jogo->adversario; ?></td>
                                                            <td><?= $jogo->resultado; ?></td>
                                                            <td><?= $jogo->tipo_resultado; ?></td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="card">

                    <div class="card-header">
                        <h4>Jogadores</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-dark text-center" id="tabela_j">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Data Nascimento</th>
                                        <th>Genero</th>
                                        <th>Nacionalidade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jogadores as $jogador) : ?>
                                        <tr class="table-light"> 
                                            <td><?= $jogador->nome_jogador; ?></td>
                                            <td><?= $jogador->data_nascimento; ?></td>
                                            <td><?= $jogador->genero; ?></td>
                                            <td><?= $jogador->nacionalidade; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>