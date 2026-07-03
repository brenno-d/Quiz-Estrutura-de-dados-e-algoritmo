<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav>
        <h1>Quiz estrutura de dados e algoritmos</h1>

        <div class="links">
            <a href="ranking.php">Ranking</a>
            <a href="referencias.php">Referências</a>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center flex-grow-1 col-12 col-md-12 col-lg-12">
        <div class="card text-center justify-content-center p-5 col-12 col-md-7 col-lg-5">
            <h2>Insira seu nome para iniciar.</h2>
            <form action="quiz.php" method="POST">
                <input
                    type="text"
                    name="nome"
                    placeholder="Digite seu nome"
                    class="form-control mb-4"
                    required>
                <button type="submit" class="btn btn-primary w-100">
                    Iniciar Quiz
                </button>
            </form>
        </div>
    </div>

    <footer class="footer">
        Feito por Brenno
        <a href="https://github.com/brenno-d" target="_blank">
            <img class="git" src="assets/images/github_logo.png">
        </a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>