<?php

include("conexao.php");
// Dados recebidos do formulário
$nome = $_POST['nome'];
$email = md5($_POST['email']);
$avaliacao = $_POST['avaliacao'];
echo $nome." ".$email." ".$telemovel." ".$avaliacao;
// Monta a consulta SQL para inserir os dados na base de dados
$sql = "INSERT INTO avaliacoes (nome, email, avaliacao) VALUES ('$nome', '$email', '$avaliacao')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>