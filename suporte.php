<?php
include_once("conexao.php");

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO mensagens_suporte (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
if (mysqli_query($conexao, $sql)) {
    // Redirecionar para a página de sucesso ou outra página desejada
    header("Location: suporte.html");
} else {
    // Em caso de erro, redirecionar para uma página de erro ou exibir uma mensagem de erro
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
