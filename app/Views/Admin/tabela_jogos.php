<div class="card">
    <div class="card-header">
        <br><h4 class="d-inline"> Tabela das equipas </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example" style="float:right;">
           <a href="/inserir_equipa" ><button type="button" class="btn btn-danger">Inserir equipa</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Nome Equipa</th>
                    <th>Escalão</th>
                    <th>Pontos</th>
                    <th>Vitórias</th>
                    <th>Empates</th>
                    <th>Derrotas</th>
                    <th>Classificação</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogos as  $jogo) : ?>
                    <tr class="table-light">
                        <td><?= $jogo->id_jogo; ?></td>
                        <td><?= $jogo->dia; ?></td>
                        <td><?= $jogo->hora; ?></td>
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