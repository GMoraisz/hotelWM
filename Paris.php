<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel WM - Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="./favicon.ico" rel="icon" type="image/x-icon"/>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container pt-1 pb-1">
            <a class="navbar-brand fw-bold" href="./home.php">Hotel WM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a href="./home.php" class="nav-link">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="w-100 pb-5 pt-lg-2 pb-lg-5 min-vh-100">
        <div class="container pt-5 pb-2 pt-lg-5 pb-lg-0">
            <div class="w-100 title mb-5 mb-md-5 mb-lg-5 pt-lg-4">
                <h1 class="fs-4 text-center text-lg-center mb-2 fw-bold">Pré-reserva</h1>
                <div class="line-orange m-auto"></div>
            </div>
            <div class="row">
                <div class="col-12 col-md col-lg-3 mb-3">
                    <div class="card border-0 pt-lg-4">
                        <img src="./assets/img/hoteis/hotel-2.jpeg" class="card-img-top rounded-0" alt="...">
                        <div class="card-body pe-0 ps-0">
                            <h5 class="card-title mb-1">Hotel Paris Germany</h5>
                            <p class="card-text text-muted mb-1">Ilhéus/BA</p>
                            <div class="stars mb-3">
                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="alert alert-success rounded-0 text-center" role="alert">
                                Disponível!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md col-lg-9">
                    <div class="card border-0">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    include 'validação/processReservation.php';

                                    header("Location: sucess.php");
                                    exit(); 
                                    
                                }
                                ?>
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome completo</label>
                                    <input type="text" class="form-control rounded-0" id="nome" name="nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control rounded-0" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="documento" class="form-label">CPF/Passaporte</label>
                                    <input type="text" class="form-control rounded-0" id="documento" name="documento" data-mask="000.000.000-00" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nascimento" class="form-label">Data de nascimento</label>
                                    <input type="date" class="form-control rounded-0" id="nascimento" name="nascimento" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control rounded-0" id="telefone" name="telefone" data-mask="(00) 0.0000-0000" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="pais" class="form-label">País</label>
                                    <input type="text" class="form-control rounded-0" id="pais" name="pais" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="estado" class="form-label">Estado</label>
                                    <input type="text" class="form-control rounded-0" id="estado" name="estado" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="cidade" class="form-label">Cidade</label>
                                    <input type="text" class="form-control rounded-0" id="cidade" name="cidade" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="rua" class="form-label">Rua</label>
                                    <input type="text" class="form-control rounded-0" id="rua" name="rua" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="bairro" class="form-label">Bairro</label>
                                    <input type="text" class="form-control rounded-0" id="bairro" name="bairro" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input type="text" class="form-control rounded-0" id="cep" name="cep" data-mask="00000-000" required>
                                </div>
                                <div class="w-100 d-flex justify-content-end d-lg-flex justify-content-lg-end pt-3">
                                    <button type="submit" class="btn btn-orange pe-4 ps-4 rounded-0">Próximo</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

       <!-- Footer -->
       <footer class="w-100 bg-light">
        <div class="container pt-5 pt-lg-5 pb-lg-3">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-4 mb-3 mb-md-0 mb-lg-0">
                    <h4 class="fs-4 fw-bold text-uppercase mb-2 mb-md-4 mb-lg-4">Hotel WM</h4>
                    <p class="text-muted">
                        Somos uma empresa que nasceu no ano de 2024, cuja a missão é entregar aos nossos clientes e parceiros 
                        os melhores lugares para ter um lazer e um descanso excelente e merecido.
                    </p>
                    <p>
                        <a href="#" class="text-decoration-none text-muted me-1 me-md-1 me-lg-2"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="text-decoration-none text-muted me-1 me-md-1 me-lg-2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="text-decoration-none text-muted me-1 me-md-1 me-lg-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="text-decoration-none text-muted me-1 me-md-1 me-lg-2"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </p>
                </div>
                <div class="col-12 col-md-3 col-lg-4 pe-lg-0 ps-lg-5 mb-3 mb-md-0 mb-lg-0">
                    <h4 class="fs-4 fw-bold mb-2 mb-md-4 mb-lg-4">Entre em contato conosco</h4>
                    <p class="mb-0"><a href="#" class="text-decoration-none text-muted">Melhor do Brasil (2024)</a></p>
                    <p class="mb-0"><a href="#" class="text-decoration-none text-muted">weslleypereira307@gmail.com</a></p>
                </div>
                <div class="col-12 col-md-3 col-lg-4 mb-3 mb-md-0 mb-lg-0">
                    <h4 class="fs-4 fw-bold mb-2 mb-md-4 mb-lg-4">Informações adicionais</h4>
                    <p class="mb-0"><a href="#" class="text-decoration-none text-muted">Termos e condições</a></p>
                    <p class="mb-0"><a href="#" class="text-decoration-none text-muted">Politica de privacidade</a></p>
                    <p class="mb-0"><a href="#" class="text-decoration-none text-muted">Central de ajuda</a></p>
                    <p class="mb-0"><a href="#" class="text-decoration-none text-muted">Condições de uso</a></p>
                </div>
            </div>
        </div>
        <div class="w-100 bg-color-orange d-flex justify-content-center align-items-center">
            <p class="mb-0 pt-1 pb-1">
                &copy; Todos os direitos reservados Hotel WM
            </p>
        </div>
    </footer>
    <!-- End Footer -->



<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>
<!-- JQuery Mask -->
<script src="./assets/js/jquery/jquery.min.js"></script>
<script src="./assets/js/jquery/jquery.mask.min.js"></script>
</body>
</html>