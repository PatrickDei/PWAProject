<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Patrick Deisinger">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body>
        <!--navigation-->
        <nav>
            <img src="../images/logo.png" style="height: 50px; margin: 0 auto; display: block;">
            <ul class="nav justify-content-center p-2">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../index.php#mundo">Mundo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../index.php#deporte">Desporte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../login/login.html">Administracija</a>
                </li>
              </ul>
        </nav>

        <!--main section-->
        <div class="container">
            <p>You have been logged out!</p>
        </div>

        <!--footer-->
        <footer class="text-lg-start">
            <div class="p-3" style="color: white;">
                © Copyright EL DEBATE. Todos los derechos reservados
            </div>
        </footer>
    </body>
</html>
<?php
    session_start();

    $_SESSION['name'] = null;
    $_SESSION['role'] = null;
?>