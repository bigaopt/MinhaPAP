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
                                <h4>Séniores</h4>
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
                                                    <?php foreach ($dados_equipa as $equipa) : ?>
                                                        <tr class="table-light">
                                                            <td><?= $equipa->nome_equipa; ?></td>
                                                            <td><?= $equipa->nome_escalao; ?></td>
                                                            <td><?= $equipa->pontos; ?></td>
                                                            <td><?= $equipa->vitorias; ?></td>
                                                            <td><?= $equipa->empates; ?></td>
                                                            <td><?= $equipa->derrotas; ?></td>
                                                            <td><?= $equipa->classificacao; ?></td>
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
                                                <img src="Img/seniores/Gabriel_gr.png" width="100%">
                                                <p>Gabriel</p>
                                            </div>
                                            <div class="col-3">
                                                <img src="Img/seniores/Pipas_gr.png" width="100%">
                                                <p>João</p>
                                            </div>
                                            <div class="col-3">
                                                <img src="Img/seniores/Zé Paulo_gr.png" width="100%">
                                                <p>Zé Paulo</p>
                                            </div>
                                            <div class="col-3">

                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h5>Defesas</h5>
                                            <div class="row">
                                                <div class="col-3 text-center" id="helder">
                                                    <img src="Img/seniores/andre_dc.png" width="100%">
                                                    <p>André</p>
                                                </div>
                                                <div class="col-3 text-center" id="henrique">
                                                    <img src="Img/seniores/Baixinho_dc.png" width="100%" >
                                                    <p>Baixinho</p>
                                                </div>
                                                <div class="col-3 text-center" id="ze">
                                                    <img src="Img/seniores/Dani_dc.png" width="100%">
                                                    <p>Dani</p>
                                                </div>
                                                <div class="col-3 text-center" id="mateus">
                                                    <img src="Img/seniores/David_dc.png" width="100%">
                                                    <p>David</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 text-center" id="pedro">
                                                    <img src="Img/seniores/Santiago_dc.png" width="100%">
                                                    <p>Santiago</p>
                                                </div>
                                                <div class="col-3 text-center" id="rodrigo">
                                                    
                                                </div>
                                                <div class="col-3 text-center" id="micael">
                                                    
                                                </div>
                                                <div class="col-3 text-center" id="talhas">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <h5>Medios</h5>
                                            <div class="row">
                                                <div class="col-3 text-center" id="david">
                                                    <img src="Img/seniores/Abilio_md.png" width="100%" height="70%">
                                                    <p>Abilio</p>
                                                </div>
                                                <div class="col-3 text-center" id="lino">
                                                    <img src="Img/seniores/Balona_md.png" width="100%" height="70%">
                                                    <p>Balona</p>
                                                </div>
                                                <div class="col-3 text-center" id="carvalho">
                                                    <img src="Img/seniores/Gerson_md.png" width="100%" height="70%">
                                                    <p>Gerson</p>
                                                </div>
                                                <div class="col-3 text-center" id="avelino">
                                                    <img src="Img/seniores/Júnior_md.png" width="100%" height="70%">
                                                    <p>Júnior</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 text-center" id="jose">
                                                    <img src="Img/seniores/Marcelo_md.png" width="100%" height="70%">
                                                    <p>Marcelo</p>
                                                </div>
                                                <div class="col-3 text-center" id="jose">
                                                    <img src="Img/seniores/Mauro_md.png" width="100%" height="70%">
                                                    <p>Mauro</p>
                                                </div>
                                                <div class="col-3 text-center" id="jose">
                                                    <img src="Img/seniores/Nelson_md.png" width="100%" height="70%">
                                                    <p>Nelson</p>
                                                </div>
                                                <div class="col-3 text-center" id="jose">
                                                    <img src="Img/seniores/Ricardo_md.png" width="100%" height="70%">
                                                    <p>Ricardo Maia</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 text-center" id="david">
                                                    <img src="Img/seniores/Sousa_md.png" width="100%" height="70%">
                                                    <p>Sousa</p>
                                                </div>
                                                <div class="col-3 text-center" id="lino">
                                                    <img src="Img/seniores/Torres_md.png" width="100%" height="70%">
                                                    <p>Torres</p>
                                                </div>
                                                <div class="col-3 text-center" id="carvalho">
                                                    
                                                </div>
                                                <div class="col-3 text-center" id="avelino">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <h5>Avançados</h5>
                                            <div class="row">
                                                <div class="col-3 text-center" id="marco">
                                                    <img src="Img/seniores/Clauffer_ac.png" width="100%" >
                                                    <p>Clauffer</p>
                                                </div>
                                                <div class="col-3 text-center" id="pereira">
                                                    <img src="Img/seniores/Hugo_ac.png" width="100%" >
                                                    <p>Hugo</p>
                                                </div>
                                                <div class="col-3 text-center" id="renato">
                                                    <img src="Img/seniores/Pereira_ac.png" width="100%">
                                                    <p>Pereira</p>
                                                </div>
                                                <div class="col-3 text-center" id="moutinho">
                                                    <img src="Img/seniores/Talhas_ac.png" width="100%" >
                                                    <p>Rui Talhas</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                       <div class="row">
                                            <h5>Tecnicos</h5>
                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <img src="Img/seniores/Pedro_Silva_treinador_principal.png" width="100%" height="70%">
                                                    <p>Pedro Silva</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <img src="Img/seniores/Andre_Dolores_treinador_adjunto.png" width="100%" >
                                                    <p>Andre Dolores</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <img src="Img/seniores/Joel_Cardoso_Treinador_adjunto.png" width="100%"  >
                                                    <p>Joel Cardoso</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <img src="Img/seniores/Mike_Pinto_Treinador_gr.png" width="100%" >
                                                    <p>Mike Pinto</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <img src="Img/seniores/Filipe_Santos_diretor.png" width="100%" >
                                                    <p>Filipe Santos</p>
                                                </div>
                                                <div class="col-3 text-center">
                                                    
                                                </div>
                                                <div class="col-3 text-center">
                                                    
                                                </div>
                                                <div class="col-3 text-center">
                                                    
                                                </div>
                                            </div>
                                        </div> 

                                    </div>
                                    <div class="tab-pane fade pt-3" id="contact" role="tabpanel" aria-labelledby="jogos-tab">
                                        <div class="table-responsive ">
                                            <table class="table table-hover table-dark text-center" id="tabela_jogos">
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
                                                    <?php foreach ($dados_jogos as $jogo) : ?>
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
                                    <?php foreach ($dados_jogadores as $jogador) : ?>
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