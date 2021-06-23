<?php
require_once 'pessoa.php';
//recuperar os dados do formulario
$datanasc = $_POST["dtnasc"]; //10/10/2000
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$end = $_POST["endereco"];



$pessoa = new Pessoa($nome, $cpf, $datanasc, $end);
$pessoa->imprimir();
$idade = $pessoa->calcularIdade($datanasc);
echo "do Return:",$idade;

?>
