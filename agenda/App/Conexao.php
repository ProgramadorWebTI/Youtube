<?php
function pdo()
{
    $db = new \PDO('mysql:host=localhost;dbname=agendanita;charset=utf8', 'root', '');
    return $db;
}