<?php
session_start();
require_once 'conexao.php';

$nome   = $_SESSION["nome"];
$pontos = (int)($_SESSION["pontos"]);
$tempo  = (int)($_SESSION["tempo_total"]);

$stmt = $conn->prepare("INSERT INTO tb_usuarios (nm_usuario, pontos_usuario, ds_tempo) VALUES (?, ?, ?)");
$stmt->bind_param("sii", $nome, $pontos, $tempo);
$stmt->execute();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/conclusaoRank.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Conclusão</title>
</head>
<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center col-12 col-md-12 col-lg-12">
            <h2 class="texto">FIM!</h2>
            <h2 class="texto">Seu resultado:</h2>
            <h5 class="status"><?= $pontos ?>/10</h5>
            <h5 class="status"><?= gmdate("i:s", $tempo) ?></h5>
            <a href="ranking.php" class="btn btn-primary">Ver o ranking</a>
            <a href="index.php" class="btn btn-primary">Retornar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>