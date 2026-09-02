<?php

function analisarvenda($produto, $custo, $venda){
    $lucro= $venda - $custo;

    if($lucro <= 0){
        $mensagem= "Prejuízo";
    }
    elseif ($lucro <=20){
        $mensagem= "Lucro baixo, mas vale a pena";
    }
    else{
        $mensagem= "Lucro alto, investe!!";
    }
    echo "Produto:  , $produto  <br>";
    echo "Lucro: R$ , $lucro  <br>";
    echo "Analise:  , $mensagem  <br>";
}
analisarvenda("Camiseta", 40, 35);
?> 