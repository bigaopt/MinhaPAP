<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inserir Equipa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/inserir_equipa') ?>">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Nome Equipa" name="nome-column" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <fieldset class="form-group">
                                            <label for="escalao">Escalão</label>
                                            <select class="form-select" name="cargo-column">
                                                <?php foreach ($escaloes as $escalao) : ?>
                                                    <option><?php echo $escalao->nome_escalao; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="data_nascimento">Classificação</label>
                                        <input type="text" id="classificacao-column" class="form-control" placeholder="classificação" name="classificacao-column" required>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Inserir equipa</button>
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