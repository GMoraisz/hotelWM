<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Parâmetros de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservahoteis";

    // Cria a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
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

    // Prepara os dados para inserção (proteção contra SQL injection)
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $documento = mysqli_real_escape_string($conn, $documento);
    $nascimento = mysqli_real_escape_string($conn, $nascimento);
    $telefone = mysqli_real_escape_string($conn, $telefone);
    $pais = mysqli_real_escape_string($conn, $pais);
    $estado = mysqli_real_escape_string($conn, $estado);
    $cidade = mysqli_real_escape_string($conn, $cidade);
    $rua = mysqli_real_escape_string($conn, $rua);
    $bairro = mysqli_real_escape_string($conn, $bairro);
    $cep = mysqli_real_escape_string($conn, $cep);

    // SQL para inserir os dados na tabela reservas
    $sql = "INSERT INTO reservas (nome, email, documento, nascimento, telefone, pais, estado, cidade, rua, bairro, cep)
            VALUES ('$nome', '$email', '$documento', '$nascimento', '$telefone', '$pais', '$estado', '$cidade', '$rua', '$bairro', '$cep')";

    if ($conn->query($sql) === TRUE) {
        // Redireciona para uma página de confirmação após o registro bem-sucedido
        header("Location: success.php");
        exit();
    } else {
        echo "Erro ao registrar reserva: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
