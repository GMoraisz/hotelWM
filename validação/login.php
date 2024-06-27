<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Parâmetros de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservahoteis";

    // Obtém os dados do formulário
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Cria a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para buscar o usuário pelo login
    $sql = "SELECT id, login, senha FROM usuario WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado, verifica a senha
        $row = $result->fetch_assoc();
        $senha_hash = $row['senha'];

        if (password_verify($senha, $senha_hash)) {
            // Senha correta, inicia a sessão e redireciona para a página principal
            $_SESSION['usuario'] = $row['login'];
            header("Location: home.php");
            exit();
        } else {
            // Senha incorreta
            echo "<div class='alert alert-danger' role='alert'>Senha incorreta. Por favor, tente novamente.</div>";
        }
    } else {
        // Usuário não encontrado
        echo "<div class='alert alert-danger' role='alert'>Usuário não encontrado. Por favor, verifique o usuário e senha.</div>";
    }

    $conn->close();
}
?>
