<?php

$musicas= ["Abro mão", "Odres novos", "Nunca Igual", "Convém que tu creças", "Gavetas","Lazaro"];
$qtd= count($musicas);

echo"Músicas:<br>";
foreach($musicas as $musica){
    echo"$musica<br>";
}
echo"Quantidade de músicas: ", $qtd;