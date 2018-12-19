<?php


function pdo()
{
    $db = new \PDO('mysql:host=localhost;dbname=db_upload_video;charset=utf8', 'root', '');
    return $db;
}