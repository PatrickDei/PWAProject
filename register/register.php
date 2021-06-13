<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = 'user';
    $password = password_hash($password, CRYPT_BLOWFISH);

    $uspjesnaValidacija = false;

    $dbc = mysqli_connect('localhost', 'root', '', 'el_debate') or die('Connection failed' . myslqi_error());

    if($dbc){

        $sql="INSERT INTO users (name, username, password, role) values (?, ?, ?, ?)";

        $stmt=mysqli_stmt_init($dbc);

        if (mysqli_stmt_prepare($stmt, $sql)){

            mysqli_stmt_bind_param($stmt, 'ssss', $name, $username, $password, $role);

            mysqli_stmt_execute($stmt);
        }       
    }

    mysqli_close($dbc);
?>

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
                  <a class="nav-link" href="../mundo.php">Mundo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../deporte.php">Desporte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../administration/administration.php">Administracija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create/create.html">Create</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../login/login.html">Login</a>
                  </li>
              </ul>
        </nav>

        <!--main section-->
        <div class="container" id="mundo">
            <p>Your account has been registered!</p>
        </div>

        <!--footer-->
        <footer class="text-lg-start">
            <div class="p-3" style="color: white;">
                © Copyright Patrick Deisinger
            </div>
        </footer>
    </body>
</html>