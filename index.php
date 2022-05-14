<?php 
include 'conn.php';
include 'registration.php';

session_start();

if(isset($_POST['login'])){
   $Nom = $_POST['Nom'];
   $password = md5($_POST['password']);

   $sql = "SELECT * FROM users WHERE Nom='$Nom' AND password='$password' ";
   $result =mysqli_query($conn,$sql);
   if($result -> num_rows >0){
    $rows = mysqli_fetch_assoc($result);
    $_SESSION['Matricule']=$rows['Matricule'];
    $_SESSION['Nom']=$rows['Nom'];
     header("location:list.php");
   }else{
    echo "<script>alert('Name or password wrong.')</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
    <title>ANP</title>
</head>
<body>

<header>
<img src="images/logo.svg" alt="logo" width="80px" height="40px">
<h3>Gestion de Parc Informatique</h3>

</header>

<section>
        <div class="container">
           <div class="forms">
               <div class="form login">
                   <span class="title">Login</span>
                   <form action="" method="POST">
                       <div class="input-field">
                       <input type="text" placeholder="entrer votre nom" name="Nom" required>
                       <i class="uil uil-user"></i>
                       </div>
                       <div class="input-field">
                       <input type="password" placeholder="entrer votre mot de passe" name="password" required>
                       <i class="uil uil-lock"></i>
                       </div>
                       <div class="input-field button">
                         <input type="submit" name="login" value="Login Now" >
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">si vous n'êtes pas membre!</span>
                        <a href="#" class="text signup-link">Signup Now</a>
                    </div>
               </div>

              <!--form d'enregistrement-->

              <div class="container">
                  <div class="forms">
                      <div class="form signup">
                   <span class="title">enregistrement</span>
                   <form action="" method="POST">
                       <div class="input-field">
                       <input type="text" placeholder="entrer votre nom" name="Nom" required>
                       <i class="uil uil-user"></i>
                       </div>
                       <div class="input-field">
                       <input type="text" placeholder="entrer votre matricule" name="Matricule" required>
                       <i class="uil uil-tag-alt"></i>
                       </div>
                       <div class="input-field">
                       <input type="text" placeholder="entrer votre fonction" name="Fonction" required>
                       <i class="uil uil-briefcase-alt"></i>
                       </div>
                       <div class="input-field">
                       <input type="password" placeholder="Créer un mot de passe" name="password" required>
                       <i class="uil uil-lock"></i>
                       </div>
                       <div class="input-field">
                       <input type="password" placeholder="confirmer votre mot de passe" name="cpassword" required>
                       <i class="uil uil-lock"></i>
                       </div>
                       <div class="input-field button">
                         <input type="submit" name="submit" value="Signup Now" >
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">si vous êtes membre!</span>
                        <a href="#" class="text login-link">Login Now</a>
                    </div>
                </div>
             </div>
        </div>
    </section>

    <script src="script.js"></script>

</body>
</html>