<?php
$conn = new mysqli(
    "mysql",
    "quiz",
    "quiz123",
    "quiz"
);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

echo "Conectado!";
?>