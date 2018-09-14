<?php 

// INCLUIR O AUTOLOAD PARA O CARREGAMENTO DAS FUNÇÕES AUTOMÁTICAS;
require_once "./vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/app.js"></script>
    <title>Agenda nita</title>
    <style>
        a{
            text-decoration:none; 
        }
        a:link{
            text-decoration:none; 
        }
    </style>
</head>
<body>

<!-- CRIAR NAVEGAÇÃO -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url()?>">Agenda Nita</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= base_url('lista-contatos.php') ?>">Listar de contatos</a></li>           
          </ul>
          <ul class="nav navbar-nav navbar-right">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- FIM DA NAVEGAÇÃO -->