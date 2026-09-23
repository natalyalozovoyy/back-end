<?php

$nome = $_POST["nome"];
$horas = $_POST["horas"];

$horasano = $horas * 365;
$anos= $horasano / 24 / 365;

echo "Olá, $nome!<br><br>";
echo "Você passa aproximadamente $horasano horas por ano<br>";
echo "Isso respresenta aproximadamente $anos anos de sua vida<br>";
?>