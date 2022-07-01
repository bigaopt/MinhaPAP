<div class="card card-tabelas">
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

                        <td><button class="btn btn-dark" onclick="apagar_jogo('<?php echo $jogo->id_jogo ?>','<?php echo $jogo->nome_equipa ?>','<?php echo $jogo->adversario ?>')"> <i class="bi bi-trash-fill"></i> </button></td>
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

    function apagar_jogo(id,nome,adversario) {
        
        var id= id; //id que foi enviado na funçao
    
        var nome = nome;

        var adversario = adversario;
    
            Swal.fire({
                title: 'Voce têm a certeza que deseja eliminar o jogo do ' + nome + ' contra  o '+ adversario +' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5cb85c',
                cancelButtonColor: '#f90000',
                confirmButtonText: 'Apagar!'
            }).then((result) => {
    
                if (result.isConfirmed) {
    
                    window.location.replace('/apagar_jogo/' + id ); //envia para a funçao apagar jogador e volta para aqui e amostra o swal
    
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