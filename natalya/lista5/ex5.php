<?php

$nome= "João";
$nivel_acesso=2;

if($nivel_acesso == 1){
    echo "Acesso basico";
}
else if($nivel_acesso == 2){
    echo "Acesso intermediario";
}
else if($nivel_acesso == 3){
    echo "Acesso administrativo ";
}
else{
    echo "Acesso invalido";
}