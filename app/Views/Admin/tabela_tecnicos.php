<div class="card">
    <div class="card-header">
        <h4>Tecnicos</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-dark text-center" id="tabela_j">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cartao cidadao</th>
                        <th>Data Nascimento</th>
                        <th>Genero</th>
                        <th>Nacionalidade</th>
                        <th>Morada</th>
                        <th>Codigo Postal</th>
                        <th>Telemovel</th>
                        <th>Cargo</th>
                        <th>Equipa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tecnicos as $tecnico) : ?>
                        <tr class="table-light">
                            <td><?= $tecnico->nome_tecnico; ?></td>
                            <td><?= $tecnico->cc_tecnico; ?></td>
                            <td><?= $tecnico->data_nascimento; ?></td>
                            <td><?= $tecnico->genero; ?></td>
                            <td><?= $tecnico->nacionalidade; ?></td>
                            <td><?= $tecnico->morada; ?></td>
                            <td><?= $tecnico->cod_Postal; ?></td>
                            <td><?= $tecnico->telefone; ?></td>
                            <td><?= $tecnico->cargo; ?></td>
                             <td><?= $tecnico->nome_equipa ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>