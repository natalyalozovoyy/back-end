<?php
$peso = $_POST["peso"];
$excesso = $peso - 50;
$multa = $excesso * 4;



if ($peso > 50) {
    echo "Multa: R$ $multa";
} else {
    echo "Não há multa.";
}

?>
