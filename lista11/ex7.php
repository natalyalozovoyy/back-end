<?php

$email= $_POST['email'];
$senha= $_POST['senha'];

if($email== "nlozovoy@gmail.com"
    && $senha== "n1234"){
        echo "Login sucedido!!";
    }
    else{
        echo "Login ou senha invalida";
    }
    ?>