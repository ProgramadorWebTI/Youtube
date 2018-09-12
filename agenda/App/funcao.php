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

//  CRIAR FUNÇÃO PARA INSERIR UM NOVO CONTATO NA AGENDA

function inserirNovoContato() {
    $sql = "INSERT INTO contato (con_nome,con_fone1,con_fone2,con_cel,con_email) VALUES (?,?,?,?,?)";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return 1;
    } else {
        return 0;
    }
}