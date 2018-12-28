<?php require_once "vendor/autoload.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="./processa.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivos" value=""/>
		<input type="submit" value="Upload File"/>
	</form>

<hr>
<?php
$lista = lista();
foreach ($lista as $key => $value):
?>
<li> <a href="./arquivos/<?=$value->arquivos?>"><?=$value->arquivos?></a> </li>

<?php endforeach; ?>

</body>
</html>