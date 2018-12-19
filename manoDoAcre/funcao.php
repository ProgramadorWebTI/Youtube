<?php
require_once 'vendor/autoload.php';
// FAZER LOGIN;

function redireciona($caminho) {
    return header('location:'.$caminho);
}

function  fazer_login($email,$senha){
    $sql  = "SELECT * from usuarios WHERE email=? AND senha=?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1,$email);
    $stmt->bindValue(2,$senha);
    $stmt->execute();
    $resultado = $stmt->fetch(\PDO::FETCH_OBJ);
    return $resultado;
}

function verifyForm() {
    if (isset($_SESSION['logado']) && !empty($_SESSION['logado'])) {
        
    } else {
        header("location: form_login.php");
    }
}

// VERIFICA SE O USUARIO ESTA LOGADO;
function verifyLogged() {
    if( isset($_SESSION['logado'])  && !empty($_SESSION['logado'])) {
        header("location: admin.php");
    }else {
        header("location: form_login.php");
    }
}


function  insert_post($titulo, $post, $imagem) {
    $sql = "INSERT INTO postagens (titulo,post,imagem) VALUES (?,?,?)";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $titulo);
    $stmt->bindValue(2, $post);
    $stmt->bindValue(3, $imagem);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}


function list_post_all() {
    $sql = "SELECT * FROM postagens";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    } else {
        return 0;
    }
}

function list_post_id($id)
{
    $sql = "SELECT * FROM postagens WHERE id=?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return $stmt->fetch(\PDO::FETCH_OBJ);
    } else {
        return 0;
    }
}

function editar_post($titulo, $post, $imagem, $id) {
    $sql = "UPDATE postagens SET titulo = ?, post= ? , imagem= ? WHERE id=?";
  
        $stmt = pdo()->prepare($sql);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $post);
        $stmt->bindValue(3, $imagem);
        $stmt->bindValue(4, $id);
        $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }

}

function delete($id){
    $sql =  "DELETE FROM postagens WHERE id = ?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }

}
