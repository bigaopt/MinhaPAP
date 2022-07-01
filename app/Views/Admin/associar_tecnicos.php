<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-10 placares">
            <div class="card card-tabelas">
                <div class="card-header">
                    <h4 class="card-title">AssociarTecnicos</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/associar_tecnicos') ?>">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label>Tecnico</label>
                                    </div>
                                    <div class="col-md-11 form-group">
                                        <select class="form-select" name="nome-column">
                                            <?php foreach ($nomes_tecnicos as $nome) : ?>
                                                <option value="<?= $nome->id_tecnico ?>"><?= $nome->nome_tecnico ?></option>
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
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Associar técnico</button>
                                    <a href="/tabela_tecnicos" ><button type="button" class="btn btn-danger">Voltar à tabela</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>