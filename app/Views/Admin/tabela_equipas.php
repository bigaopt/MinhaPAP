<div class="card">
    <div class="card-header">
        <br><h4 class="d-inline"> Tabela das equipas </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example" style="float:right;">
           <a href="<?php echo base_url('/inserir_equipa'); ?>" ><button type="button" class="btn btn-danger">Inserir equipa</button></a>
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
                <?php foreach ($equipas as  $equipa) : ?>
                    <tr class="table-light">
                        <td><?= $equipa->nome_equipa ?></td>
                        <td><?= $equipa->nome_escalao; ?></td>
                        <td><?= $equipa->pontos; ?></td>
                        <td><?= $equipa->vitorias; ?></td>
                        <td><?= $equipa->empates; ?></td>
                        <td><?= $equipa->derrotas; ?></td>
                        <td><?= $equipa->classificacao; ?></td>

                        <td><button class="btn btn-dark"> <a href="<?= base_url('/atualizar_equipa/' . $equipa->id_equipa) ?>"><i class="bi bi-pencil-fill"></i><a></button></td>
                        <td><button class="btn btn-dark" onclick="apagar_equipa('<?php echo $equipa->id_equipa ?>','<?php echo $equipa->nome_equipa ?>')"> <i class="bi bi-trash-fill"></i> </button></td>
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

    function apagar_equipa(id,nome) {
        
        var id= id; //id que foi enviado na funçao
    
        var nome = nome;
    
            Swal.fire({
                title: 'Voce têm a certeza que deseja eliminar a equipa ' + nome + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5cb85c',
                cancelButtonColor: '#f90000',
                confirmButtonText: 'Apagar!'
            }).then((result) => {
    
                if (result.isConfirmed) {
    
                    window.location.replace('/apagar_equipas/' + id ); //envia para a funçao apagar jogador e volta para aqui e amostra o swal
    
                    Swal.fire(
    
                        'Deleted!',
                        'Equipa eliminado com sucesso.',
                        'success',
                    )
    
                } else {
                    Swal.fire(
                        'Cancelado!',
                        'Ação cancelada com sucesso.',
                        'error'
                    )
                }
    
            })
        }
</script>