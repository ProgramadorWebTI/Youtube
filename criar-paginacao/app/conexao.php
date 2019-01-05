<?php

function pdo() {
	$db = new \PDO('mysql:host=localhost;port=3308;dbname=criar-paginacao;charset=utf8', 'root', '');
	return $db;
}