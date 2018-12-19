<?php 
include_once "tema_header.php"; ?>

<?php 

if(list_post_all()){

foreach (list_post_all() as $value): 

?>

    <h1><?php  echo $value->titulo;?></h1>
    <p class="text-justify"><?php echo $value->post; ?></p>
    <div class="row">
    <div class="col-md-7">
    <img class="img-responsive" width="" src="<?php echo "uploads/".$value->imagem; ?>" alt="">
    </div>
    </div>

    <a href="form_edit_post.php?id=<?php echo $value->id; ?>" class="label label-warning">Editar</a>
    <a href="processa.php?id=<?php echo $value->id; ?>&acao=deletar" class="label label-danger">deletar</a>

<?php 
endforeach; 
}else {

}
?>

<?php include_once "tema_footer.php"; ?>