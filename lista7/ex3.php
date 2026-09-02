<?php

function calculardesconto($preco, $desconto){
    $valordesconto= $preco * $desconto / 100;

    return $preco- $valordesconto;
}
echo"Preço final: R$", calculardesconto(100, 10);