<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card card-tabelas">
                <div class="card-header">
                    <h4 class="card-title">Inserir Clube</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/inserir_clube') ?>">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="clube">Clube</label>
                                        <input type="text" class="form-control" placeholder="Nome do Clube" name="clube-column"  required>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Inserir Clube</button>
                                    <button type="reset" class="btn btn-dark me-1 mb-1">Limpar campos</button>
                                    <a href="/tabela_clubes" ><button type="button" class="btn btn-danger">Voltar à tabela</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
