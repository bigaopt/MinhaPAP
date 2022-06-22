<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/css/modal.css'); ?> ">

<body>

    <div class="w3-container">

        <div id="modal_jogador" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container w3-teal">
                    <h2 style="color:white">Eliminar Jogo</h2>
                </header>
                <div class="w3-container">
                    <h3 style="color:black"> <?php echo "Deseja apagar o jogo do $equipa  vs  $adversario ?  " ?></h3>
                </div>
                <footer class="w3-container w3-teal">
                    <div class="btn-group mb-2 d-inline mt-2" role="group" aria-label="Basic example" style="float:right;">
                        <a href="<?= base_url('/tabela_jogos/') ?>"><button type="button" class="btn btn-light">Cancelar</button></a>
                        <a href="<?= base_url('/apagar_jogo/' . $id) ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                    </div>
                </footer>
            </div>
        </div>
    </div>

</body>

</html>

<script type="text/javascript" defer>
    var modal = document.getElementById('modal_jogador');

    modal.style.display = 'block';
</script>