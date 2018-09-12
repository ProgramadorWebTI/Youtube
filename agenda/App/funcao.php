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

// CRIAR A FUNÇÃO DE ATUALIZAR UM REGISTRO NA AGENDA

function editarContato($con_nome, $con_fone1, $con_fone2, $con_cel, $con_email, $con_codigo) {
    $sql = "UPDATE contato SET con_nome=?,con_fone1=?,con_fone2=?,con_cel=?,con_email=? WHERE con_codigo =?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $con_nome);
    $stmt->bindValue(2, $con_fone1);
    $stmt->bindValue(3, $con_fone2);
    $stmt->bindValue(4, $con_cel);
    $stmt->bindValue(5, $con_email);
    $stmt->bindValue(6, $con_codigo);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return 1;
    } else {
        return 0;
    }
}

// CRIAR FUNCAO DE DELETAR CONTATO

function deletarContato($id) {
    $sql = "DELETE FROM contato WHERE con_codigo=?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return 1;
    } else {
        return 0;
    }
}