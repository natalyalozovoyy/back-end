<?php

$nomecomplet = "jobileu";
$senha = 310309;
$confirmarsenha = 310309;
$idade = 17;

if($nomecomplet = ""){
    echo " nome errado: <br> ";
}

else{
    echo "nome correto <br> ";
}

if($senha==$confirmarsenha){
    echo "senha correta <br> ";
}

else{
    echo " senha incorreta <br> ";
}

if($idade >= 18){
    echo "maior de idade <br> ";    
}

else{
    echo "menor de idade <br> ";
}

if($nomecomplet <> "" && $senha == $confirmarsenha && $idade >=18){
    echo " cadastro permitido  <br> ";
}

else{
    echo "cadastro não permitido <br> ";
}
?>