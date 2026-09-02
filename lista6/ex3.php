<?php

echo "Caixa eletrônico- Itaú <br>";
echo "1- Consultar saldo, 2-Fazer saque, 3-Fazer depósito, 4-Ver extrato, 5- Sair <br>";

$opcao= 3;

switch($opcao){
    case 1:
        echo"Seu saldo é de R$ 650,81";
        break;
    case 2:
        echo"Qual valor?";
        break;
    case 3:
        echo "Qual valor?";
        break;
    case 4:
        echo"Extrato: <br> 01/01- R$ 100,00 <br> 02/01- R$ 50,00 <br> 03/01- R$ 200,00";
        break;
    case 5:
        echo"Obrigado por utilizar o caixa eletrônico do Itaú";
        break;  
    default:
        echo"opção inválida";
        break;
        
}