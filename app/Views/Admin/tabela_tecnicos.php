<div class="card">
    <div class="card-header"><br>
       <br><h4 class="d-inline"> Tabela Técnicos </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example">
           <a href="/inserir_tecnico" ><button type="button" class="btn btn-danger">Inserir técnico</button></a>
           <a href="/atualizar_tecnico" ><button type="button" class="btn btn-danger">Atualizar técnico</button></a>
           <a href="/apagar_tecnico" ><button type="button" class="btn btn-danger">Apagar técnico</button></a>
           <a href="/associar_tecnico" ><button type="button" class="btn btn-danger">Associar técnico a uma equipa</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
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
                    <th>Estado</th>
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
                        <td><?= $tecnico->estado; ?></td>
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