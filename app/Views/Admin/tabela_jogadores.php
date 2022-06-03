<div class="card">
    <div class="card-header">
        <br><h4 class="d-inline"> Tabela jogadores </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example">
           <a href="/inserir_jogador" ><button type="button" class="btn btn-danger">Inserir jogador</button></a>
           <a href="/atualizar_jogadores" ><button type="button" class="btn btn-danger">Atualizar jogador</button></a>
           <a href="/apagar_jogadores" ><button type="button" class="btn btn-danger">Apagar jogador</button></a>
           <a href="/associar_jogadores" ><button type="button" class="btn btn-danger">Associar jogador a uma equipa</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Equipa</th>
                    <th>Name</th>
                    <th>CC</th>
                    <th>Data<br>Nascimento</th>
                    <th>Genero</th>
                    <th>Nacionalidade</th>
                    <th>Morada</th>
                    <th>Cod_Postal</th>
                    <th>Telemovel</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogadores as $jogador) : ?>
                    <tr class="table-light">
                        <td><?= $jogador->nome_equipa ?></td>
                        <td><?= $jogador->nome_jogador; ?></td>
                        <td><?= $jogador->cc_jogador; ?></td>
                        <td><?= $jogador->data_nascimento; ?></td>
                        <td><?= $jogador->genero; ?></td>
                        <td><?= $jogador->nacionalidade; ?></td>
                        <td><?= $jogador->morada; ?></td>
                        <td><?= $jogador->cod_Postal; ?></td>
                        <td><?= $jogador->telefone; ?></td>
                        <td><?= $jogador->estado; ?></td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>