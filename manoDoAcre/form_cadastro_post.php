<?php 

include_once "tema_header.php";
   verifyForm();
?>

   <form action="processa.php?acao=add_novo_post" method="POST" enctype="multipart/form-data">
       <div class="form-group">
             <input type="text" name="titulo" class="form-control"> 
       </div>
       <div class="form-group">
       <textarea name="post" id="" cols="30" rows="10" class="form-control"></textarea>             
       </div>
       <div class="form-group">
          <input type="file" name="imagem"  class="form-control"> 
       </div>

      <input type="submit" value="Enviar" clas="btn btn-success">
   </form>

<?php include_once "tema_footer.php"; ?>