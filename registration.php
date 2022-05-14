<?php 
include 'conn.php';

error_reporting(0);


if(isset($_POST['submit'])){
   $Nom = mysqli_real_escape_string($conn, $_POST['Nom']);
   $Matricule = mysqli_real_escape_string($conn, $_POST['Matricule']);
   $Fonction = mysqli_real_escape_string($conn, $_POST['Fonction']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);

   if( $password == $cpassword){
       $sql = "SELECT * FROM users WHERE Matricule='$Matricule'";
       $result = mysqli_query($conn, $sql);

       if(!$result -> num_rows >0){
       $sql = "INSERT INTO users (Nom,Matricule,Fonction,password) VALUES('$Nom','$Matricule','$Fonction','$password')";
       $result = mysqli_query($conn, $sql);

      if($result){
        echo "<script>alert('enregistrement de l'utilisateur terminé.')</script>";
        }else{
            echo "<script>alert('somethings wrong.')</script>";
        }
      }else{
        echo "<script>alert('Le Matricule existe déjà.')</script>";
       }
       }else{
        echo "<script>alert('le mot de passe ne correspond pas.')</script>";
       }
    }
    
?>