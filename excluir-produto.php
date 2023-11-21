<?php

require "conexao.php";

$id = $_GET['id'];
$sql = "delete FROM produtos WHERE id=$id;";
if($conn->query($sql) == true){
    header("Location: excluir-produto-sucesso.php");
    exit();
}else{
    header("Location: cadastrar-usuario.php?erro=2");
    exit();
}

?>