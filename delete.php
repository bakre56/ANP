<?php

use function PHPSTORM_META\elementType;

include_once 'conn.php';

$id= $_GET['id'];
$Delsql = "DELETE FROM materiel WHERE id=$id";
$res = mysqli_query($conn,$Delsql); 

if($res){
    header("location:list.php");
}else{
    echo "<script>alert('somethings wrong.')</script>";
}

?>
