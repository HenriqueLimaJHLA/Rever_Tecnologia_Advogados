<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Rever Tecnologia | Advogados</title>
    <link rel="stylesheet" href="./frontend/src/css/index.css">
    <link rel="shortcut icon" href="./frontend/assets/rever-logo.webp" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container-form">
        <h2>Login</h2>
        <p>Bem-vindo de volta! Insira suas credenciais para acessar sua conta.</p>
        <form class="login-form" id="form_login">
            <img src="./frontend/assets/rever-logo.webp" class="logo-rever-tecnologia" alt="Rever Tecnologia">
            <input type="email" class="form-control" id="email_login" placeholder="Insira o seu email" required autocomplete="off">
            <input type="password" class="form-control" id="password_login" placeholder="Insira a sua senha" required autocomplete="off">
            <input type="hidden" name="csrf_token" value="<?= uniqid() ?>">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <div class="form-group">
                <a class="forget-password" id="forget_password">Esqueci minha senha</a>
            </div>
        </form>
    </div>

    <div class="container-footer">
        <p>@2025 Todos os direitos reservados - Rever Tecnologia | Advogados</p>
    </div>

</body>
<script src="./frontend/src/js/index.js"></script>
<!-- Bibliotecas de Importação -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>