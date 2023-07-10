<?php

include("conexao.php");

// Dados recebidos do formulário
$nome = $_POST['nome'];
$email = md5($_POST['email']);
$telemovel = md5($_POST['telemovel']);
$mensagem = $_POST['mensagem'];
echo $nome." ".$email." ".$telemovel." ".$mensagem;
// Monta a consulta SQL para inserir os dados na base de dados
$sql = "INSERT INTO contactos (nome, email, telemovel, mensagem) VALUES ('$nome', '$email', '$telemovel', '$mensagem')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>