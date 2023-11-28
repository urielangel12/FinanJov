<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login css/login.css">
    <!-- Agrega estas líneas en la sección <head> de tu HTML -->
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-database.js"></script>


</head>

<body>
    <div class="container">
        <div class="signin-signup">

            <form action="sesion.php" method="post" class="sign-in-form">
                <h2 class="title">Iniciar sesión</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" required  placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="contrasena" name="contrasena" required placeholder="Password">
                </div>
                <input type="submit" value="Iniciar Sesion" class="btn">
                <p class="social-text">O inicio sesión en la plataforma social</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"> </i>

                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twiter"> </i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"> </i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </div>
                <p class="account-text">¿No tienes una cuenta?
                    <a href="#" id="sign-up-btn2">Registrarse</a>
                </p>
            </form>
            <form  action="registro.php" method="post" class="sign-up-form">
                <h2 class="title">Registrarse</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" required placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" id="email" name="email" required placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="contrasena" name="contrasena" required placeholder="Password">
                </div>
                <input type="submit" value="Registrarse" class="btn">
                <p class="social-text">
                    O inicia sesión en la plataforma social</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"> </i>

                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twiter"> </i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"> </i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </div>
                <p class="account-text">¿Ya tienes una cuenta? <a href="#" id="sign-in-btn2">Inicar Sesion</a></p>
            </form>

        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>"¡Bienvenido a Finanjov! Donde cada cuenta es una puerta a oportunidades financieras ilimitadas.
                        Ingresa con confianza a tu cuenta login y descubre un mundo de préstamos, inversiones y
                        asesoramientos diseñados para tu éxito."</p>
                    <button class="btn" id="sign-in-btn"> Iniciar Sesion</button>
                </div>
                <img src="img/signin.svg" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>no eres miembro de Finanjov?</h3>
                    <p>
                        "En Finanjov, tu viaje financiero comienza con un simple paso: la creación de tu cuenta.
                        Regístrate ahora y abre las puertas a préstamos, inversiones y asesoramientos que te acercarán a
                        tus metas. Tu futuro financiero está a solo unos clics de distancia."</p>
                    <button class="btn" id="sign-up-btn"> Registrarse</button>
                </div>
                <img src="img/signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>

</body>

</html>