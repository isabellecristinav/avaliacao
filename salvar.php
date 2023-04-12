<?php
$nome = $_POST["nome"];
$profissao = $_POST["profissao"];

$arquivo = fopen("nomes.txt" , "a");
echo "$nome $profissao";

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $profissao . "\n");
fclose($arquivo);

header("location:exercicio04.php");
?>