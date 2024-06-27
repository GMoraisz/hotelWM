<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel WM - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="./favicon.ico" rel="icon" type="image/x-icon"/>
</head>
<body>
    <main class="w-100 min-vh-100 d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center">
            <div class="card card-login-container p-lg-5 border-0">
                <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Incluir o arquivo de processamento aqui
                        include 'validação/processRegistration.php';
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="w-100 pb-2 pb-4">
                            <h3 class="fs-2 mb-0 fw-bold mb-1">Hotel WM</h3>
                            <span class="text-muted color-orange">Cadastre-se agora no melhor site de hotéis do Brasil</span>
                        </div>
                        <div class="mb-4">
                            <label for="usuario" class="mb-2">Usuário</label>
                            <input type="text" class="form-control rounded-0" id="login" name="login" required>
                        </div>
                        <div class="mb-4">
                            <label for="senha" class="mb-2">Senha</label>
                            <input type="password" class="form-control rounded-0" id="senha" name="senha" required>
                        </div>
                        <div class="mb-4 form-check">
                            <input class="form-check-input" type="checkbox" value="lembrar" id="lembrar" name="lembrar">
                            <label class="form-check-label" for="lembrar">Lembre-me</label>
                        </div>
                        <div class="w-100 pt-0 pb-2">
                            <button type="submit" class="btn btn-login pe-5 ps-5 rounded-0 w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>
