<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$IMC = $num1 / ($num2 * $num2);
echo "seu IMC é: ", $IMC;
if ($IMC < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($IMC < 24.9) {
    echo "Classificação: Peso normal";
} elseif ($IMC < 29.9) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}