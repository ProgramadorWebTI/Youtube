<?php

// CRIAR A FUNÇÃO DE SELECIONA TODA AGENDA

function selecionaAgenda() {
    $sql  = "SELECT * FROM contato";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        return $stmt->fetch(\PDO::FETCH_OBJ);
    } else {
        return 0;
    }

}