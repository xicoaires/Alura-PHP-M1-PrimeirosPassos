<?php

$altura = 1.77;
$peso = 82;
$imc = $peso/($altura**2);

if ($imc >= 40){
    echo "Seu IMC é $imc. Você está com obesidade Grau III ou Mórbida.";
} elseif ($imc >= 35){
    echo "Seu IMC é $imc. Você está com obesidade Grau II.";
} elseif ($imc >=30){
    echo "Seu IMC é $imc. Você está com obesidade Grau I ou Mórbida.";
} elseif($imc >=25){
    echo "Seu IMC é $imc. Você está com sobrepeso.";
}elseif ($imc >= 18.5){
    echo "Seu IMC é $imc. Você está com o peso normal.";
} else {
    echo "Seu IMC é $imc. Você está abaixo do peso.";
}