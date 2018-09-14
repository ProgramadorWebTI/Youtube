<?php

require_once "vendor/autoload.php";

// VERIFICA SE HOUVE UMA REQUISIÇÃO DO TIPO GET
if(isset($_GET['p'])) {

	$argumento = trim($_GET['p']);

	switch ($argumento) {
		case 'adiciona':
			if (isset($_POST['con_nome']) && empty($_POST['con_nome'])) {
				echo json_encode(
					array(
						"status" => 1,
						"msg" => "Preencha o nome"
					)
				);
				exit;
			} elseif(isset($_POST['con_email']) && empty($_POST['con_email'])) {
				echo json_encode(
					array(
						"status" => 1,
						"msg" => "Preencha o email"
					)
				);
				exit;
			}else {
				// nessa parte agente envia para o banco de dados pq realmente esta certo;
				$con_nome    = trim($_POST['con_nome']);
				$con_fone1   = trim($_POST['con_fone1']);
				$con_fone2   = trim($_POST['con_fone2']);
				$con_cel     = trim($_POST['con_cel']);
				$con_email   = trim($_POST['con_email']);
				
				// chama a função de inserir();
				$response = inserirNovoContato($con_nome, $con_fone1, $con_fone2, $con_cel, $con_email);

				if($response == 1) {
					echo json_encode(
						array(
							"status" => 1,
							"msg" => "Cadastrado com sucesso"
						)	
					);
				}else {
					echo json_encode(
						array(
							"status" => 1,
							"msg" => "Error, não pode ser inserido o registro"
						)
					);
				}
			}
			break;
		case 'edita':
			$con_codigo = trim($_POST['con_codigo']);
			$con_nome = trim($_POST['con_nome']);
			$con_fone1 = trim($_POST['con_fone1']);
			$con_fone2 = trim($_POST['con_fone2']);
			$con_cel = trim($_POST['con_cel']);
			$con_email = trim($_POST['con_email']);

			if(editarContato($con_nome, $con_fone1, $con_fone2, $con_cel, $con_email, $con_codigo)) {
				echo json_encode(array(
					"status" => 1,
					"msg" => "Editado com sucesso"
				));
			}

		break;

		case 'deleta':
			$id = trim($_GET['id']);
			if(deletarContato($id) == 1) {
				header("location:".base_url('lista-contatos.php'));
			}
			break;
		
		default:
			# code...
			break;
	}

}
