<?php

try{
    $conexao = new PDO(
        "mysql:host=127.0.0.1;dbname=estoque_facil", "root", "");
} 
catch(PDOException $erro){
    die("Erro na conexão ");
}