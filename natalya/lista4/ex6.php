<?php

$idade= 50;
$deficiencia= false;
$gestante= false;
$menord_idade= false;

if($idade >=60 || $deficiencia ==true || $gestante == true || $menord_idade == true){
    echo "Atendimento prioritario";
}
else
{
    echo "Atendimento normal";
}