<?php 

include_once "tema_header.php"; 

if(isset($_GET['id']) && !empty($_GET['id'])){

      $id = $_GET['id'];
      $lista = list_post_id($id);
}

?>

   <form action="processa.php?acao=editar_post" method="POST" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?= $lista->id ?>"> <br>
       <input type="text" name="titulo" value="<?= $lista->titulo ?>"> <br>
       <input type="text" name="post" value="<?= $lista->post ?>"> <br>
       <input type="text" name="imagem" value="<?= $lista->imagem ?>"> <br>
      <input type="submit" value="Enviar">
   </form>

<?php include_once "tema_footer.php"; ?>