<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="/public/assets/css/login.css">
    <title>login</title>
</head>

<body>
    <div class="container__form">
        <h1 class="form__title">Inicio de sesión</h1>

        <div class="container__inputs">
            <label for="email" class="form__label">Correo electrónico</label>
            <div class="input__form">
                <input type="email" name="email" id="email" placeholder="Correo electrónico" class="input__full" autocomplete="off">
                <span class="material-symbols-outlined icon">account_circle</span>
            </div>

            <label for="email" class="form__label">Contraseña</label>
            <div class="input__form">
                <input type="password" name="email" id="email" placeholder="Contraseña" class="input__full">
                <span class="material-symbols-outlined icon">lock</span>
            </div>

            <div class="input__form">
                <input type="submit" name="submit" id="submit" value="Ingresar" class="input__full input__full--submit">
                <span class="material-symbols-outlined icon icon--submit">login</span>
            </div>
            <a href="https://youtube.com" target="_blank" class="input__link">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</body>

</html>