<?php
$nome = $_POST["nome"];
$profissao = $_POST["profissao"];

$arquivo = fopen("nomes.txt" , "a");
echo "$nome $profissao";

fwrite($arquivo, "Nome:" . $nome ."\t");
fwrite($arquivo, "Profissão:" . $profissao . "\n");
fclose($arquivo);

header("location:exercicio04.php");
?>