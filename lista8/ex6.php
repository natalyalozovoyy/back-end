<?php

$qtd= 0;

for($num=1; $num<=50; $num++){
    if($num%3 ==0){
        echo"Multiplo de 3: $num<br>";

        $qnt= $qtd + 1;
    }
}
echo"<br>Total de multiplos de 3:" ,$qtd;