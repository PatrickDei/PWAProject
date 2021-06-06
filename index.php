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
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#mundo">Mundo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#deporte">Desporte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login/login.html">Administracija</a>
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
        <div class="index-container">
        <div class="container" id="mundo">
        <div class="title">
          Mundo
        </div>
            <div class="row">
                <?php
                  $dbc = mysqli_connect('localhost', 'root', '', 'el_debate') or die('Connection failed' . myslqi_error());

                  if($dbc){
              
                      $sql="SELECT id, title, shortTitle, description, category, time, imagePath FROM posts";
              
                      $stmt=mysqli_stmt_init($dbc);
              
                      if (mysqli_stmt_prepare($stmt, $sql)){
              
                          mysqli_stmt_execute($stmt);
              
                          mysqli_stmt_store_result($stmt);
                      }
              
                      mysqli_stmt_bind_result($stmt, $id, $title, $short, $desc, $category, $time, $imagePath);
              
                      while(mysqli_stmt_fetch($stmt)){
                          if($category == 'mundo'){
                            $calcTime = (date('d') - substr($time, 0, 2)) + (date('m') - substr($time, 3, 2)) * 30;

                              echo '<div class="col-3">
                              <div class="card" id="link">
                              <a href="details.php?id='. $id. '">
                                <img class="card-img-top" src="'. $imagePath. '">
                                <div class="card-body">
                                  <h5 class="card-title">'. $short. '</h5>
                                  <p class="card-text">'. $title. '</p>
                                  <p class="card-text">'. $calcTime. ' days ago
                                </div></a>
                              </div></div>';
                          }
                      }     
                  }
              
                  mysqli_close($dbc);
                ?>
            </div>
        </div>


<hr>
        <div class="container" id="deporte">
        <div class="title">
          Deporte
        </div>
          <div class="row">
          <?php
                  $dbc = mysqli_connect('localhost', 'root', '', 'el_debate') or die('Connection failed' . myslqi_error());

                  if($dbc){
              
                      $sql="SELECT id, title, shortTitle, description, category, time, imagePath FROM posts";
              
                      $stmt=mysqli_stmt_init($dbc);
              
                      if (mysqli_stmt_prepare($stmt, $sql)){
              
                          mysqli_stmt_execute($stmt);
              
                          mysqli_stmt_store_result($stmt);
                      }
              
                      mysqli_stmt_bind_result($stmt, $id, $title, $short, $desc, $category, $time, $imagePath);
              
                      while(mysqli_stmt_fetch($stmt)){
                          if($category == 'deporte'){
                            $calcTime = (date('d') - substr($time, 0, 2)) + (date('m') - substr($time, 3, 2)) * 30;

                            echo '<div class="col-3"><div class="card">
                            <a href="details.php?id='. $id. '">
                            <img class="card-img-top" src="'. $imagePath. '">
                               <div class="card-body">
                                 <h5 class="card-title">'. $short. '</h5>
                                 <p class="card-text">'. $title. '</p>
                                 <p class="card-text">'. $calcTime. ' days ago
                               </div></a>
                             </div></div>';
                          }
                      }     
                  }
              
                  mysqli_close($dbc);
                ?>
          </div>
      </div>
                </div>

        <!--footer-->
        <footer class="text-lg-start">
            <div class="p-3" style="color: white;">
                © Copyright EL DEBATE. Todos los derechos reservados
            </div>
        </footer>
    </body>
</html>