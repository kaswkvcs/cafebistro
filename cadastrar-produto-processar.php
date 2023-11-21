<?php
require "conexao.php";

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$imagem = "../img/" . $_POST['imagem'];

$sql = "INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('$tipo', '$nome', '$descricao', '$imagem', '$preco')";

if ($conn->query($sql) === TRUE) {
    header("Location: cadastrar-produto-sucesso.php");

} else {
    echo "Erro: " . $conn->error;
}


$conn->close();
?>