<?php
session_start();
require_once 'conexao.php';

function formatarTempo($segundos) {
    $segundos = (int)$segundos;
    $h = floor($segundos / 3600);
    $m = floor(($segundos % 3600) / 60);
    $s = $segundos % 60;
    return str_pad($h, 2, '0', STR_PAD_LEFT) . ':' .
           str_pad($m, 2, '0', STR_PAD_LEFT) . ':' .
           str_pad($s, 2, '0', STR_PAD_LEFT);
}

// top 10, pontuação depois tempo
$ranking = [];
$sql = "
    SELECT nm_usuario, pontos_usuario, ds_tempo
    FROM tb_usuarios    
    ORDER BY pontos_usuario DESC, ds_tempo ASC
    LIMIT 10
";
$res = $conn->query($sql);
if ($res) {
    $ranking = $res->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ranking</title>
    <link rel="stylesheet" href="styles/conclusaoRank.css">
</head>
<body>
    <div class="container">
        <img class="bandeira" style="transform: scaleX(-1);"src="assets/images/bandeira.png">

        <div class="center">
            <h1>Ranking</h1>

            <div class="table-div">
                <table>
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Nome</th>
                            <th>Pontuação</th>
                            <th>Tempo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <?php
                                $linha = $ranking[$i] ?? null;
                                $posicao = $i + 1;
                                $nome = $linha ? htmlspecialchars($linha['nm_usuario']) : '';
                                $pontos = $linha ? ((int)$linha['pontos_usuario'] . '/10') : '';
                                $tempo = $linha ? formatarTempo((int)$linha['ds_tempo']) : '';
                            ?>
                            <tr>
                                <td><?= $posicao ?></td>
                                <td><?= $nome ?></td>
                                <td><?= $pontos ?></td>
                                <td><?= $tempo ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <a class="btn-retornar" href="index.php">Retornar</a>
        </div>

        <img class="bandeira"  src="assets/images/bandeira.png">
    </div>

    <footer class="footer">
        Feito por Brenno
        <a href="https://github.com/brenno-d" target="_blank">
            <img class="git" src="assets/images/github_logo.png">
        </a>
    </footer>
</body>
</html>