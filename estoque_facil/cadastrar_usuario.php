<?php

include "config/conexao.php";

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senha= password_hash($senha, PASSWORD_DEFAULT);

    $sql= "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conexao->QUERY($sql);

    if ($resultado->rowCount() > 0) {
        echo "Usuário já cadastrado.";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
       
        if ($conexao->query($sql)) {
            echo "Usuário cadastrado com sucesso!";
            echo "<br>";
            echo "<a href='login.html'>Ir para o Login</a>";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
}

?>