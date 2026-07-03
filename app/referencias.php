<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Referências</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --verde: #CDF810;
            --bg: #0c1016;
            --branco: #fff;
        }


        html,
        body {
            margin: 0;
            font-family: 'Ubuntu', sans-serif;
            background: var(--bg);
            color: var(--branco);
            overflow-x: hidden;
        }

        .header {
            border-bottom: 1px solid #5d6b12;
            padding: 14px 20px;
        }

        .btn-voltar {
            color: var(--verde);
            text-decoration: none;
            font-weight: 700;
            font-size: 2.2rem;
            line-height: 1;
            display: inline-block;
        }

        .btn-voltar:hover {
            color: #e2ff60;
        }

        .conteudo {
            padding: 26px 0 34px;
            min-height: calc(100vh - 92px);
        }

        .texto-ref {
            color: var(--verde);
            font-size: 2rem;
            line-height: 1.35;
            max-width: 980px;
            margin: 0 auto 30px;
            white-space: pre-line;
        }

        .cards-ref img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 2px;
            display: block;
        }

        .footer {
            background: var(--verde);
            color: #111;
            text-align: center;
            padding: 8px 10px 10px;
            font-size: 2rem;
            font-weight: 500;
        }

        .git {
            width: 30px;
            height: 30px;
        }

        .footer {
            display: block;
            font-size: 2rem;
            margin-top: 2px;
        }

        @media (max-width: 768px) {
            .btn-voltar {
                font-size: 1.8rem;
            }

            .texto-ref {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }

            .cards-ref img {
                height: 220px;
            }

            .footer {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <a href="index.php" class="btn-voltar">
            < Voltar</a>
    </header>

    <div class="conteudo">
        <div class="container-fluid">
            <p class="texto-ref">
                Minhas referências para desenvolver as perguntas foram,
                principalmente, o curso de estruturas de dados e
                algoritmos do Augusto Galego e o livro “Entendendo
                algoritmos — Aditya Y. Bhargava”.
            </p>

            <div class="row justify-content-center g-4 cards-ref">
                <div class="col-12 col-md-5 col-lg-4">
                    <img src="assets/images/livroAlgoritmos.png">
                </div>
                <div class="col-12 col-md-7 col-lg-6">
                    <img src="assets/images/DSAGalego.png">
                </div>
            </div>
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