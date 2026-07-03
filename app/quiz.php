<?php
session_start();
require_once 'conexao.php';
// Configura as variáveis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {

    unset($_SESSION['quiz_iniciado'], $_SESSION['nome'], $_SESSION['pontos'], $_SESSION['questaoAtual'], $_SESSION['inicio'], $_SESSION['questoes']);

    $_SESSION['quiz_iniciado'] = true;
    $_SESSION['nome'] = trim($_POST['nome']) !== '' ? trim($_POST['nome']) : 'Jogador';
    $_SESSION['pontos'] = 0;
    $_SESSION['questaoAtual'] = 0;
    $_SESSION['inicio'] = time();
    $_SESSION['questoes'] = $conn->query("SELECT cd_questao FROM tb_questoes ORDER BY RAND() LIMIT 10")->fetch_all(MYSQLI_ASSOC);

    header("Location: quiz.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["resposta"])) {
    $idx = $_SESSION["questaoAtual"];

    if ($idx >= 0 && $idx < 10) {
        $cdQuestao = $_SESSION["questoes"][$idx]["cd_questao"];
        $respostaUsuario = $_POST["resposta"];

        $sqlCorreta = "
            SELECT cd_alternativa
            FROM tb_alternativas_questao
            WHERE id_questao = {$cdQuestao}
              AND ic_correta = 1
            LIMIT 1
        ";
        $retCorreta = $conn->query($sqlCorreta);

        $cdCorreta = (int)$retCorreta->fetch_assoc()["cd_alternativa"];
        if ($respostaUsuario == $cdCorreta) {
            $_SESSION["pontos"]++;
        }

        $_SESSION["questaoAtual"] = $idx + 1;
    }

    header("Location: quiz.php");
    exit;
}

if ($_SESSION["questaoAtual"] >= 10) {
    $_SESSION["tempo_total"] = time() - (int)$_SESSION["inicio"]; 
    header("Location: conclusao.php");
    exit;
}

// Questão atual para renderizar
$idx = $_SESSION["questaoAtual"];
$cdQuestaoAtual = $_SESSION["questoes"][$idx]["cd_questao"];

$sqlQuestao = "
    SELECT cd_questao, ds_questao
    FROM tb_questoes
    WHERE cd_questao = {$cdQuestaoAtual}
    LIMIT 1
";
$retQuestao = $conn->query($sqlQuestao);
$questao = $retQuestao->fetch_assoc();

$sqlAlternativas = "
    SELECT cd_alternativa, ds_alternativa
    FROM tb_alternativas_questao
    WHERE id_questao = {$cdQuestaoAtual}
    ORDER BY cd_alternativa
";
$retAlternativas = $conn->query($sqlAlternativas);
$alternativas = $retAlternativas->fetch_all(MYSQLI_ASSOC);

$tempoDecorrido = time() - (int)$_SESSION["inicio"];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quiz</title>

    <link rel="stylesheet" href="styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="topo">
        <div>Pergunta <?= $idx + 1 ?>/10</div>
        <div id="timer">00:00</div>
    </div>

    <div class="container-fluid">
        <div class="enunciado">
            <?= $questao["ds_questao"]  ?>
        </div>

        <div class="alternativas">
            <form method="POST" action="quiz.php">
                <?php foreach ($alternativas as $i => $alt): ?>
                    <button
                        class="btn-alt"
                        type="submit"
                        name="resposta"
                        value="<?= (int)$alt["cd_alternativa"] ?>">
                        <?= ($i + 1) ?>. <?= $alt["ds_alternativa"] ?>
                    </button>
                <?php endforeach; ?>
            </form>
        </div>

        <div class="rodape">
            Jogador: <?= $_SESSION["nome"] ?> |
            Pontos: <?= $_SESSION["pontos"] ?> |
            Questão atual: <?= $idx + 1 ?>/10
        </div>
    </div>

    <script>
        let segundos = <?= (int)$tempoDecorrido ?>;
        const timer = document.getElementById('timer');

        function formatarTempo(total) {
            const m = Math.floor(total / 60);
            const s = total % 60;

            return String(m).padStart(2, '0') + ":" +
                String(s).padStart(2, '0');
        }

        function tick() {
            timer.textContent = formatarTempo(segundos);
            segundos++;
            setTimeout(tick, 1000);
        }

        tick();
    </script>
</body>

</html>