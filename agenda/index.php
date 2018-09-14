<?php require_once "_header.php" ?>
<div class="container mt-10">
	<div class="row">		
	<div class="col-md-6 col-md-offset-3">
	
		<form class="fmCadastro" action="processa.php?p=adiciona" method="post">

			<label for="con_nome">Nome:</label>
			<input type="text" name="con_nome" class="form-control"> <br>

			<label for="con_fone1">Phone 1:</label>
			<input type="text" name="con_fone1" class="form-control"> <br>


			<label for="con_fone2">Phone 2:</label>
			<input type="text" name="con_fone2" class="form-control"> <br>

			<label for="con_cel">Celular:</label>
			<input type="text" name="con_cel" class="form-control"> <br>

			<label for="con_email">Email:</label>
			<input type="text" name="con_email" class="form-control"> <br>
			
			<button type="submit" class="btnCadastro btn btn-default">enviar</button>

		</form>
	<!-- 
ESSA DIV COM CLASS resposta SERÁ RESPONSAVÉL POR RECEBER AS MENSAGEM DO ARQUIVO
processa.php
-->
<style>
	.container.mt-10{
		margin-top: 22px;
	}

	.resposta {
		margin-top: 5px;
		font-size: 20px;
	}
</style>
<div class="resposta"></div>
	 </div>	<!--END COL-md-offset-3 -->
</div>
</div>



<?php require_once "_footer.php" ?>