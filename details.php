<?php
    $id = $_GET['id'];

    $dbc = mysqli_connect('localhost', 'root', '', 'el_debate') or die('Connection failed' . myslqi_error());

                  if($dbc){
              
                      $sql="SELECT title, shortTitle, description, category, time, imagePath FROM posts WHERE id = ?";
              
                      $stmt=mysqli_stmt_init($dbc);
              
                      if (mysqli_stmt_prepare($stmt, $sql)){
                          mysqli_stmt_bind_param($stmt, 's', $id);

                          mysqli_stmt_execute($stmt);
              
                          mysqli_stmt_store_result($stmt);
                      }
              
                      mysqli_stmt_bind_result($stmt, $title, $short, $desc, $category, $time, $imagePath);
                      mysqli_stmt_fetch($stmt);
                      $calcTime = (date('d') - substr($time, 0, 2)) + (date('m') - substr($time, 3, 2)) * 30; 
                  }
              
                  mysqli_close($dbc);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Patrick Deisinger">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <!--navigation-->
        <nav>
            <img src="images/logo.png" style="height: 50px; margin: 0 auto; display: block;">
            <?php
              session_start();
              if($_SESSION['name'])
                echo 'You are logged in as '. $_SESSION['name'];

            ?>
            
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
                <?php

                  if($_SESSION['role']=='admin')
                    echo '<li class="nav-item">
                    <a class="nav-link" href="create/create.html">Create</a>
                  </li>';
                ?>
              </ul>
        </nav>

        <!--main section-->
        <div class="container details">
            <div class="shortTitle"><?php echo $short ?></div>
            <h1 class="tight"><?php echo $title ?></h1>
            <p><?php echo $calcTime ?> days ago</p>
            <img src="<?php echo $imagePath ?>" style="width: 80%; height: 500px;">
            <p class="tight tight-text"><?php echo $desc ?></p>
        </div>

        <!--footer-->
        <footer class="text-lg-start">
            <div class="p-3" style="color: white;">
                © Copyright EL DEBATE. Todos los derechos reservados
            </div>
        </footer>
    </body>
</html>