<?php

$usuario= "joaopaulooz";
$idade= 27;

if($idade <13 ){
    echo "Cadastro nao permitido";
}
else if($idade >=13 && $idade <16){
    echo "So pode usar a plataforma com supervisao dos pais";
}
else{
    echo "Plataforma liberada";
}