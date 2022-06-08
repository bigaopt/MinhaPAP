<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inserir Jogo</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/inserir_jogo') ?>">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="hora">Hora</label>
                                        <input type="time"  class="form-control"  name="hora-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="data">Data</label>
                                        <input type="date" id="data-column" class="form-control" placeholder="Data" name="data-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="local">Local</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Local do jogo" name="local-column" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="equipa">Equipa</label>
                                        <select class="form-select" name="equipa-column">
                                            <?php foreach ($equipas as $equipa) : ?>
                                                <option value="<?= $equipa->id_equipa ?>"><?= $equipa->nome_equipa ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="adversario">Adversário</label>
                                        <input type="text" id="country-floating" class="form-control" name="adversario-column" placeholder="Equipa adversária">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="resultado">Resultado</label>
                                        <input type="text" id="company-column" class="form-control" name="resultado-column" placeholder="Resultado" required pattern="^(?[0-9])[0-9]-(?[0-9])[0-9]$">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tipo_resultado">Tipo de resultado</label>
                                        <select class="form-select" name="tipo-resultado">
                                            <option value="vitoria">Vitória</option>
                                            <option value="empates">Empate</option>
                                            <option value="derrota">Derrota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Inserir jogo</button>
                                    <button type="reset" class="btn btn-dark me-1 mb-1">Limpar campos</button>
                                    <a href="/tabela_jogos" ><button type="button" class="btn btn-danger">Voltar à tabela</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
