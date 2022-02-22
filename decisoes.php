<?php

$idade = 21;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos. Pode entrar com acompanhante!";
} else {
    echo "Você tem $idade anos. Não pode entrar!";
}
