<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="container-form">
            <!---<form class="sing-in"> --->
                <h2>Iniciar Sesión</h2>
                <div class="social-networks">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use su correo y contraseña</span>
                <form action="../Controllers/loginController.php" method="post">
                    <div class="container-input">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" placeholder="Email" id="inNombre" name="inNombre" required>
                    </div>
                    <div class="container-input">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" placeholder="Password" id="inPassword" name="inPassword" required>
                    </div>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <button class="button" type="submit">INICIAR SESIÓN</button>
                </form>
            <!-----</form> --->
        </div>

        <div class="container-form">
            <form class="sing-up">
                <h2>Registrarse</h2>
                <div class="social-networks">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use su correo electrónico para Registrarse</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password">
                </div>
                <button class="button">REGISTRARSE</button>
            </form>
        </div>

        <div class="container-welcome">
            <div class="welcome-sing-up welcome">
                <h3>¡Bienvenido!</h3>
                <p>Ingrese sus datos personales para usar las funciones del sitio</p>
                <button class="button" id="btn-sing-up">Registrarse</button>
            </div>
            <div class="welcome-sing-in welcome">
                <h3>¡Hola!</h3>
                <p>Regístrese con sus datos personales para todas las funciones del sitio</p>
                <button class="button" id="btn-sing-in">Iniciar sesión</button>
            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>