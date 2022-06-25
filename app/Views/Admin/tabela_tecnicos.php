<div class="card">
    <div class="card-header"><br>
        <br>
        <h4 class="d-inline"> Tabela Técnicos </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example" style="float:right;">
            <a href="<?php echo base_url('/inserir_tecnico');?>"><button type="button" class="btn btn-danger">Inserir técnico</button></a>
            <a href="<?php echo base_url('/associar_tecnico');?>"><button type="button" class="btn btn-danger">Associar técnico a uma equipa</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cartao cidadao</th>
                    <th>Data Nascimento</th>
                    <th>Genero</th>
                    <th>Nacionalidade</th>
                    <th>Morada</th>
                    <th>Codigo Postal</th>
                    <th>Telemovel</th>
                    <th>Cargo</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($tecnicos as $tecnico) : ?>
                    <tr>
                        <td><?= $tecnico->id_tecnico; ?></td>
                        <td><?= $tecnico->nome_tecnico; ?></td>
                        <td><?= $tecnico->cc_tecnico; ?></td>
                        <td><?= date('d/m/Y', strtotime($tecnico->data_nascimento)); ?></td>
                        <td><?= $tecnico->genero; ?></td>
                        <td><?= $tecnico->nacionalidade; ?></td>
                        <td><?= $tecnico->morada; ?></td>
                        <td><?= $tecnico->cod_Postal; ?></td>
                        <td><?= $tecnico->telefone; ?></td>
                        <td><?= $tecnico->cargo; ?></td>
                        
                        <td><button class="btn btn-dark"><a href="<?= base_url('/atualizar_tecnico/'.$tecnico->id_tecnico) ?>"><i class="bi bi-pencil-fill"></i></a></button></td>
                        <td><button class="btn btn-dark" onclick="apagar_tecnico('<?php echo $tecnico->id_tecnico ?>','<?php echo $tecnico->nome_tecnico ?>')"> <i class="bi bi-trash-fill"></i> </button></td>
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

    function apagar_tecnico(id,nome) {
            
        var id= id; //id que foi enviado na funçao
    
        var nome = nome;
    
            Swal.fire({
                title: 'Voce têm a certeza que deseja eliminar o técnico ' + nome + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5cb85c',
                cancelButtonColor: '#f90000',
                confirmButtonText: 'Apagar!'
            }).then((result) => {
    
                if (result.isConfirmed) {
    
                    window.location.replace('/apagar_tecnico/' + id ); //envia para a funçao apagar jogador e volta para aqui e amostra o swal
    
                    Swal.fire(
    
                        'Deleted!',
                        'Técnico eliminado com sucesso.',
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