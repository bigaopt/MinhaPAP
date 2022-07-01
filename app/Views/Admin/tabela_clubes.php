<div class="card card-tabelas">
    <div class="card-header">
        <br><h4 class="d-inline"> Tabela dos clubes </h4>
        <div class="btn-group mb-3 float-right d-inline" role="group" aria-label="Basic example" style="float:right;">
           <a href="<?php echo base_url('/inserir_clube'); ?>" ><button type="button" class="btn btn-danger">Inserir clube</button></a>
        </div>
    </div>
    <div class="card-body ">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Id Clube</th>
                    <th>Nome do  Clube</th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clubes as  $clube) : ?>
                    <tr class="table-light">

                        <td><?php echo $clube->id_clube; ?></td>
                        <td><?php echo $clube->nome_clube; ?></td>

                        <td><button class="btn btn-dark" onclick="apagar_clube('<?php echo $clube->id_clube ?>','<?php echo $clube->nome_clube ?>')"> <i class="bi bi-trash-fill"></i> </button></td>
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

    function apagar_clube(id,nome) {
        
        var id= id; //id que foi enviado na funçao
    
        var nome = nome;
    
            Swal.fire({
                title: 'Voce têm a certeza que deseja eliminar o clube ' + nome + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5cb85c',
                cancelButtonColor: '#f90000',
                confirmButtonText: 'Apagar!'
            }).then((result) => {
    
                if (result.isConfirmed) {
    
                    window.location.replace('/apagar_clube/' + id ); //envia para a funçao apagar clube e volta para aqui e amostra o swal
    
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