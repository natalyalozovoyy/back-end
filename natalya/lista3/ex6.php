<?php
$valor_pedido = 100;
$valor_min = 80;
$idade_cliente = 21;
$idade_minima_bebida_alcoolica = 18;
$estoque = 20;
$quantidade_perdida = 18;
$statuspedido = "pago";

if($valor_pedido>=$valor_min){
    echo "entrega gratis <br> ";

}

else{
    echo"taxa 10,00 <br> ";
}
if($idade_cliente >= 18){

    echo"compra aceita <br> ";
}
else{
    echo"compra recusada <br> ";
}
if($quantidade_perdida <= $estoque){
    echo "solitação aceita <br> ";
}
else{
    echo "solitação recusada <br> ";
}    
if($statuspedido == "pago <br> "){
    echo "aberto! <br> ";
}
else{
    echo "aberto! <br> ";
}
?>


