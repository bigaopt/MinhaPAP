<div class="content-wrapper container">
    <div class="page-content">
        <section class="row">
            <div class="col-10" style="margin-left:6em;">
                <div class="row">
                    <div class="col-12">
                        <div class="card" >
                            <div class="card-header">
                                <h4>Noticías recentes</h4>
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner" id="not">
                                         <div class="carousel-item">
                                            <img src="https://scontent.fopo6-2.fna.fbcdn.net/v/t39.30808-6/280491594_412160057580994_2363366396023841115_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeF-J56FHyoQraii33aAVIX-k95zK-X_cyKT3nMr5f9zIuNDMrI6edvd9nZNNdzw5egyifgvQ3j7ebkkyVtQsnnl&_nc_ohc=Ee2UeDuVDVYAX_iO4oW&_nc_ht=scontent.fopo6-2.fna&oh=00_AT86uspMMLTxdbUrMqjgE4eq6E53-1CtlMA7chw5qt8Kew&oe=62C0DBFF" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="Img/caminhada/foto_caminhada.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Img/la_remontada/joel&marco.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block text-light">
                                                <h5>"La Remontada"</h5>
                                                <p>Os Juniores do Milheiroense venceram neste fim de semana o S. Roque por 3-2 no Centro de Formação Desportiva Floriano Borges.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Img/campo/inauguraçao_campo.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Inauguraçao do Relvado sintético e iluminação LED</h5>
                                                <p>Decorreu neste sábado a inauguração destas 2 obras ansiadas há muito tempo pelo GD Milheiroense.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                                        <!-- botao noticia anteriror-->
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                                        <!-- botao proxima noticia-->
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>

            </div> -->
        </section>
        <section class="row">
            <div class="col-12">
                <div class="col-12 col-xl-10" >
                    <div class="card" id="jogos_recentes" style="left:6em;">
                        <div class="card-header">
                            <h4>Jogos mais recentes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg table-dark text-center">
                                    <thead>
                                        <tr>
                                            <th>Dia</th>
                                            <th>Horas</th>
                                            <th>Local</th>
                                            <th>Nome Equipa</th>
                                            <th>Adversário</th>
                                            <th>Resultado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($jogos as $jogo) : ?>
                                            <tr class="table-light">
                                                <td><?= date('d/m/Y', strtotime($jogo->dia)); ?></td>
                                                <td><?= date('H:i', strtotime($jogo->hora)); ?></td>
                                                <td><?= $jogo->local; ?></td>
                                                <td><?= $jogo->nome_equipa; ?></td>
                                                <td><?= $jogo->adversario; ?></td>
                                                <td><?= $jogo->resultado; ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>