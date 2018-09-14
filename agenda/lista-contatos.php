<?php require_once "_header.php" ?>

<style>
    .lista-contatos{
        width: 100%;
        border:1px solid #ddd;
        border-radius: 2px;
        padding-bottom: -10px;
        background-color: #ccc;
    }

    .lista-contatos > .lista-contatos-header{
        border-bottom:1px solid #ddd;
        margin:0px;
        padding:0px;
        color: #fff;
        
    }

    div.h1{
        padding-left:15px;
    }

    .lista-contatos-body{
        background-color: #fff;
        padding: 5px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="lista-contatos">
                <div class="lista-contatos-header">
                <div class="h1">Lista de contatos</div>
                </div>
                <div class="lista-contatos-body">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone 1</th>
                            <th>Telefone 2</th>
                            <th>Celular</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach(selecionaAgenda() as $contato): ?>
                            <tr>
                                <td><?= $contato->con_nome; ?></td>
                                <td><?= $contato->con_fone1; ?></td>
                                <td><?= $contato->con_fone2; ?></td>
                                <td><?= $contato->con_cel; ?></td>
                                <td><?= $contato->con_email; ?></td>
                                <td>
                                    <a href="<?=base_url('show-edita-contato.php');?>?id=<?= $contato->con_codigo; ?>&p=edita">
                                    <span class="label label-warning">Edita</span>
                                    </a>
                                    <a href="<?= base_url('processa.php'); ?>?id=<?= $contato->con_codigo; ?>&p=deleta">
                                    <span class="label label-danger">Deleta</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "_footer.php" ?>