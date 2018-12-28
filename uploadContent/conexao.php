<?php

function pdo()
{
    $db = new \PDO('mysql:host=localhost;dbname=db_exemplo_upload;charset=utf8', 'root', '');
    return $db;
}

function insert($files) {
	$sql =  "INSERT INTO files (arquivos) VALUES (?)";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1,$files);
	$stmt->execute();
}

function lista() {
	$sql = "SELECT * FROM files";
	$stmt = pdo()->prepare($sql);
	$stmt->execute();
	 if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    } else {
        return 0;
    }
}



 ?>