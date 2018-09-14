<?php

 header("Access-Control-Allow-Origin: *");
// FUNÇÃO PARA CONEXAO COM BANCO DE DADOS
function pdo()
{
    $db = new \PDO('mysql:host=localhost;dbname=agendanita;charset=utf8', 'root', '');
    return $db;
}

// CRIAR FUNÇÃO PARA GERENCIAR OS LINKS, OU SEJA SEMPRE PEGAR A URL BASE DO PROJETO

function base_url($url='') {
    $base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).$url;
    return $base_url;
}