<?php require_once "_header.php" ?>

<form class="fmCadastro" action="processa.php?p=adiciona" method="post">
	<label for="con_nome">Nome:</label>
	<input type="text" name="con_nome" class=""> <br>

	<label for="con_fone1">Phone 1:</label>
	<input type="text" name="con_fone1" class=""> <br>


	<label for="con_fone2">Phone 2:</label>
	<input type="text" name="con_fone2" class=""> <br>

	<label for="con_cel">Celular:</label>
	<input type="text" name="con_cel" class=""> <br>

	<label for="con_email">Email:</label>
	<input type="text" name="con_email" class=""> <br>
	
	<button type="submit" class="btnCadastro">enviar</button>

</form>
<div class="resposta"></div>
<?php require_once "_footer.php" ?>

<?php

