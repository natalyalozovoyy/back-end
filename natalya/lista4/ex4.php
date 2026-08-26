<?php

$email= "seuemail@gmail.com";
$senha= "suasenha123";
$ativo= true;

echo "Login - Facebook<br>";

if($email == "seuemail@gmail.com" && $senha == "suasenha123" && $ativo == true){
    echo "Login autorizado!";
}
else{
    echo"Email ou senha incorretos...:(";

}