<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="/public/assets/css/login.css">
    <link rel="stylesheet" href="/public/assets/css/alerts.css">

    <title>Inicio de sesión</title>
</head>

<body>
    <div id="alert" class="alert">
        <span id="alert-message"></span>
        <button id="close-alert" class="alert-button">X</button>
    </div>
    <form action="/login" method="POST" class="container__form" id="form">

        <h1 class="form__title">Inicio de sesión</h1>
        <div class="container__inputs">
            <!-- Input para correo electrónico -->
            <label for="email" class="form__label">Correo electrónico</label>
            <div class="input__form">
                <input type="email" name="email" id="email" placeholder="Correo electrónico" class="input__full"
                    autocomplete="off">
                <span class="material-symbols-outlined icon">account_circle</span>
            </div>

            <!-- Input para contraseña -->
            <label for="password" class="form__label">Contraseña</label>
            <div class="input__form">
                <input type="password" name="password" id="password" placeholder="Contraseña" class="input__full">
                <span class="material-symbols-outlined icon">lock</span>
            </div>

            <!-- Botón de submit -->
            <div class="input__form">
                <button type="submit" name="submit" id="submit" class="input__full input__full--submit"> Ingresar</button>
                <span class="material-symbols-outlined icon icon--submit">login</span>
            </div>

            <!-- Enlace de contraseña olvidada -->
            <a href="https://youtube.com" target="_blank" class="input__link">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
</body>
<script src="/public/assets/js/validateLogin.js"></script>
<script src="/public/assets/js/alerts.js"></script>

</html>