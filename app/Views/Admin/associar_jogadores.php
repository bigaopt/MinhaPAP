<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-10 placares">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">AssociarJogadores</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/associar_jogadores') ?>">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label>Jogador</label>
                                    </div>
                                    <div class="col-md-11 form-group">
                                        <select class="form-select" name="nome-column">
                                            <?php foreach ($nomes_jogadores as $nome) : ?>
                                                <option value="<?= $nome->id_jogador ?>"><?= $nome->nome_jogador ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <label>Equipa</label>
                                    </div>
                                    <div class="col-md-11 form-group">
                                        <select class="form-select" name="equipa-column">
                                            <?php foreach ($nomes_equipas as $equipa) : ?>
                                                <option value="<?= $equipa->id_equipa ?>"><?= $equipa->nome_equipa ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" style="background-color:red">Associar</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>