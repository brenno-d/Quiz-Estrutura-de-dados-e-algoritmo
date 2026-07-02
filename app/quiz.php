<?php
require_once 'conexao.php';
session_start();
$_SESSION = [

    "nome" => $_POST["nome"],

    "pontos" => 0,

    "questaoAtual" => 0,

    "inicio" => time(),

    "questoes" =>  $conn->query("SELECT cd_questao FROM tb_questoes ORDER BY RAND() LIMIT 10")->fetch_all(MYSQLI_ASSOC)
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    
</body>
</html>