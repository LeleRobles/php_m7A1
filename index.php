<?php
echo "Adeus Vingador: ";
$vingadores[] = "Capitão America";
$vingadores[] = "Homen de Ferro";
$vingadores[] = "Hulk";
$vingadores[] = "Gavião Arqueiro";
$vingadores[] = "Viuva Negra";

echo $vingadores [3] . "<br>";

$tabuleiro = array(
	1=> array("a","b","c"),
	2=> array("d","f","g"),
	3=> array("h","i","j"),
);

$matrix[0][0] = "ALOW";
$matrix[1][0] = "OLAW";
$matrix[0][1] = "WALO";
$matrix[1][1] = "LAOW";

//echo var_dump($tabuleiro) . "<br>";
//echo var_dump($matrix);

$carros[7]["motorista"] = "Lady Gaga";
$carros[7]["passageiro1"] = "Steve";
$carros[7]["passageiro2"] = "Fury";
$carros[7]["passageiro3"] = "Caroll";

$carros[1002]["motorista"] = "Alfred";
$carros[1002]["passageiro1"] = "Bruce";
$carros[1002]["passageiro2"] = "Damian";
$carros[1002]["passageiro3"] = "Grayson";

$carros[300]["motorista"] = "Zeus";
$carros[300]["passageiro1"] = "Jasão";
$carros[300]["passageiro2"] = "Herc";
$carros[300]["passageiro3"] = "Perseu";

echo $carros[7]["motorista"] . "<br>";
echo $carros[1002]["motorista"] . "<br>";
echo $carros[300]["motorista"] . "<br>";

echo $carros[300]["passageiro1"] . "<br>";
echo $carros[300]["passageiro2"] . "<br>";
echo $carros[300]["passageiro3"] . "<br>";

echo  count($carros[1002]) . "<br>";
?>