<div class="card card-tabelas">
    <div class="card-header">
        <br>
        <h4 class="d-inline"> Tabela jogadores </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example" style="float:right;">
            <a href="<?php echo base_url('/inserir_jogador'); ?>"><button type="button" class="btn btn-danger">Inserir jogador</button></a>
            <a href="<?php echo base_url('/associar_jogadores'); ?>"><button type="button" class="btn btn-danger">Associar jogador a uma equipa</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CC</th>
                    <th>Data<br>Nascimento</th>
                    <th>Genero</th>
                    <th>Nacionalidade</th>
                    <th>Morada</th>
                    <th>Cod_Postal</th>
                    <th>Telemovel</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogadores as $jogador) : ?>
                    <tr>
                        <td><?= $jogador->id_jogador; ?></td>
                        <td><?= $jogador->nome_jogador; ?></td>
                        <td><?= $jogador->cc_jogador; ?></td>
                        <td><?= date('d/m/Y', strtotime($jogador->data_nascimento)); ?></td>
                        <td><?= $jogador->genero; ?></td>
                        <td><?= $jogador->nacionalidade; ?></td>
                        <td><?= $jogador->morada; ?></td>
                        <td><?= $jogador->cod_Postal; ?></td>
                        <td><?= $jogador->telefone; ?></td>

                        <td><button class="btn btn-dark"> <a href="<?= base_url('/atualizar_jogadores/' . $jogador->id_jogador) ?>"><i class="bi bi-pencil-fill"></i><a></button></td>
                        <td><button class="btn btn-dark" onclick="apagar_jogador('<?php echo $jogador->id_jogador ?>','<?php echo $jogador->nome_jogador ?>')"> <i class="bi bi-trash-fill"></i> </button></td>
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

    
    function apagar_jogador(id,nome) {
        
    var id= id; //id que foi enviado na funçao

    var nome = nome;

        Swal.fire({
            title: 'Voce têm a certeza que deseja eliminar o jogador ' + nome + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#5cb85c',
            cancelButtonColor: '#f90000',
            confirmButtonText: 'Apagar!'
        }).then((result) => {

            if (result.isConfirmed) {

                window.location.replace('/apagar_jogadores/' + id ); //envia para a funçao apagar jogador e volta para aqui e amostra o swal

                Swal.fire(

                    'Deleted!',
                    'Jogador eliminado com sucesso.',
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