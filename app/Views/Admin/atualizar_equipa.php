<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Atualizar Equipa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/atualizar_equipa') ?>">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nome">Equipa</label>
                                        <select class="form-control" name="equipa-column">
                                            <option name="<?= $id ?>"><?= $nome ?></option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="cc">Classificação</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Classificação atual" name="classificacao-column">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1" >Atualizar jogador</button>
                                    <button type="reset" class="btn btn-dark me-1 mb-1">Limpar campos</button>
                                    <a href="/tabela_equipas"><button type="button" class="btn btn-danger">Voltar à tabela</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>