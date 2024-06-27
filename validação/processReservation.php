<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservahoteis";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os dados do formulário e sanitiza
$nome = $_POST['nome'];
$email = $_POST['email'];
$documento = $_POST['documento'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];


// Query SQL para inserir os dados na tabela clientes
$sql = "INSERT INTO clientes (nome, email, telefone, cpf_passaporte, data_nascimento, pais, estado, cidade, rua, bairro, cep)
        VALUES ('$nome', '$email', '$telefone', '$documento', '$nascimento', '$pais', '$estado', '$cidade', '$rua', '$bairro', '$cep')";

if ($conn->query($sql) === TRUE) {
    // Redireciona para a página de sucesso após inserção bem-sucedida
    header("Location: sucess.php");
    exit();
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
