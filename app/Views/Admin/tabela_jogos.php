<div class="card">
    <div class="card-header">
        <br><h4 class="d-inline"> Tabela dos jogos </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example" style="float:right;">
           <a href="<?php echo base_url('/inserir_jogo');?>" ><button type="button" class="btn btn-danger">Inserir jogo</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>ID Jogo</th>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Local</th>
                    <th>Equipa</th>
                    <th>Adversario</th>
                    <th>Resultado</th>
                    <th>Tipo_Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogos as  $jogo) : ?>
                    <tr class="table-light">
                        <td><?= $jogo->id_jogo; ?></td>
                        <td><?= date('d/m/Y', strtotime($jogo->dia)); ?></td>
                        <td><?= date('H:i', strtotime($jogo->hora)); ?></td>
                        <td><?= $jogo->local; ?></td>
                        <td><?= $jogo->nome_equipa; ?></td>
                        <td><?= $jogo->adversario; ?></td>
                        <td><?= $jogo->resultado; ?></td>
                        <td><?= $jogo->tipo_resultado; ?></td>

                        <td><button class="btn btn-dark"> <a href="<?= base_url('/confirmaçao_jogo/' . $jogo->id_jogo) ?>"><i class="bi bi-trash-fill"></i><a></button></td>
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