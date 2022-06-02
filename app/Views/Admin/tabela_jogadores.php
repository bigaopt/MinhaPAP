<div class="card">
    <div class="card-header">
        <h4>Jogadores</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-dark text-center" id="tabela_j">
                <thead>
                    <tr>
                        <th>Equipa</th>
                        <th>Nome</th>
                        <th>Cartao cidadao</th>
                        <th>Data Nascimento</th>
                        <th>Genero</th>
                        <th>Nacionalidade</th>
                        <th>Morada</th>
                        <th>Codigo Postal</th>
                        <th>Telemovel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jogadores as $jogador) : ?>
                        <tr class="table-light">
                            <td><?= $jogador->nome_equipa; ?></td>
                            <td><?= $jogador->nome_jogador; ?></td>
                            <td><?= $jogador->cc_jogador; ?></td>
                            <td><?= $jogador->data_nascimento; ?></td>
                            <td><?= $jogador->genero; ?></td>
                            <td><?= $jogador->nacionalidade; ?></td>
                            <td><?= $jogador->morada; ?></td>
                            <td><?= $jogador->cod_Postal; ?></td>
                            <td><?= $jogador->telefone; ?></td>
                        </tr>
                    <?php endforeach ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>