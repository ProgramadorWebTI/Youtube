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
<form action="lista-contatos.php?pesquisa=1" method="post" class="form-inline">
    <div class="form-group">
        <label for="busca" class="sr-only">busca</label>
        <input type="text" class="form-control" id="busca" name="busca" placeholder="buscar" required>
    </div>
  <button type="submit" class="btn btn-primary">pesquisar</button>
</form>
 <br>

<?php  
 if(isset($_GET['pesquisa'])){
 if($_GET['pesquisa'] == 1){
?>
 <div class="lista-contatos">
                <div class="lista-contatos-header">
                <div class="h1">Lista de contatos - busca</div>
                </div>
                <div class="lista-contatos-body">
                
                <table class="table">
                    <thead>
                    <?php if(pesquisaAgenda($_POST['busca']) == 0 ) {echo "<h2 class='text-center'>Sem resultado</h2>"; exit;}?>
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
                        <?php foreach(pesquisaAgenda($_POST['busca']) as $contato): ?>
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

<?php exit; }}?>
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