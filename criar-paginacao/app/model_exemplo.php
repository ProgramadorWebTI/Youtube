<?php

function select() {
	$sql =  "SELECT * FROM exemplos";
	$stmt = pdo()->prepare($sql);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    } else {
        return 0;
    }
}