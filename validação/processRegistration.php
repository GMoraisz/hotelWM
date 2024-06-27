<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Parâmetros de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservahoteis";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Verifica se o nome de usuário já existe
    $sql = "SELECT id FROM usuario WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='alert alert-danger' role='alert'>Nome de usuário já existe. Escolha outro.</div>";
    } else {
        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

        // SQL para inserir os dados na tabela usuario
        $sql_insert = "INSERT INTO usuario (login, senha) VALUES ('$login', '$senhaHash')";

        if ($conn->query($sql_insert) === TRUE) {
            // Redireciona para a tela de login após o registro bem-sucedido
            header("Location: login1.php");
            exit();
        } else {
            echo "Erro: " . $sql_insert . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
