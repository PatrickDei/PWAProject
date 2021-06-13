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
            <?php
              session_start();
              if(isset($_SESSION['name']))
                echo 'You are logged in as '. $_SESSION['name'];

            ?>
            
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
                    <a class="nav-link" href="../create/create.html">Create</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../login/login.html">Login</a>
                  </li>
              </ul>
        </nav>

        <!--main section-->
        
<?php
            $dbc = mysqli_connect('localhost', 'root', '', 'el_debate') or die('Connection failed' . myslqi_error());

            if($dbc){
                $query = "SELECT * FROM posts";
                $result = mysqli_query($dbc, $query);
                while($row = mysqli_fetch_array($result)) {
                
                echo '<div class="container"><form enctype="multipart/form-data" action="update.php" method="POST">
                <div class="form-item">
                <label for="title">Naslov vjesti:</label>
                <div class="form-field">
                <input type="text" name="title" class="form-field-textual"
                value="'.$row['title'].'">
                </div>
                </div>
                <div class="form-item">
                <label for="about">Kratki sadržaj vijesti (do 50
                znakova):</label>
                <div class="form-field">
                <textarea name="short" id="" cols="30" rows="10" class="formfield-textual">'.$row['shortTitle'].'</textarea>
                </div>
                </div>
                <div class="form-item">
                <label for="content">Sadržaj vijesti:</label>
                <div class="form-field">
                <textarea name="description" id="" cols="30" rows="10" class="formfield-textual">'.$row['description'].'</textarea>
                </div>
                </div>
                <div class="form-item">
                <label for="picture">Slika:</label>
                <div class="form-field">
                14
                <input type="file" class="input-text" id="picture"
                value="'.$row['imagePath'].'" name="picture"/> <br><img src="' .
                $row['imagePath'] . '" width=100px>
                // pokraj gumba za odabir slike pojavljuje se umanjeni prikaz postojeće slike
                </div>
                </div>
                <div class="form-item">
                <label for="category">Kategorija vijesti:</label>
                <div class="form-field">
                <select name="category" id="" class="form-field-textual"
                value="'.$row['category'].'">
                <option value="deporte">Deporte</option>
                <option value="mundo">Mundo</option>
                </select>
                </div>
                </div>
                <div class="form-item">
                <label>Spremiti u arhivu:
                <div class="form-field">';
                
                echo '<input type="checkbox" name="prikaz" id="prikaz"
                checked/> Arhiviraj?';
                
                echo '</div>
                </label>
                </div>
                </div>
                <div class="form-item">
                <input type="hidden" name="id" class="form-field-textual"
                value="'.$row['id'].'">
                <button type="reset" value="Poništi">Poništi</button>
                <button type="submit" name="update" value="Prihvati">
                Izmjeni</button>
                <button type="submit" name="delete" value="Izbriši">
                Izbriši</button>
                </div>
                </form></div>';
                }
            }
            mysqli_close($dbc);

            ?>
            

<!--footer-->
<footer class="text-lg-start">
    <div class="p-3" style="color: white;">
        © Copyright Patrick Deisinger
    </div>
</footer>
</body>
</html>