<?php 
 
 include_once 'conn.php';
 error_reporting(0);
   
 $id=$_GET['id'];
 $selsql = "SELECT * FROM materiel WHERE id=$id ";
 $res = mysqli_query($conn,$selsql);
 $r = mysqli_fetch_assoc($res);

  if(isset($_POST['submit'])){
   $Emplacement = $_POST['Emplacement'];
   $Full_Name =  $_POST['Full_Name'];
   $Criticité =$_POST['Criticité'];
   $Marque = $_POST['Marque'];
   $N°_de_série = $_POST['N°_de_série'];
   $Acquisition = $_POST['Acquisition'];
   $Fournisseur = $_POST['Fournisseur'];
   $Statut = $_POST['Statut'];
   
   $Updatesql = "UPDATE materiel SET Emplacement ='$Emplacement',Full_Name='$Full_Name' ,Criticité=' $Criticité' , Marque='$Marque' , N°_de_série='$N°_de_série' , Acquisition='$Acquisition' , Fournisseur='$Fournisseur' , Statut ='$Statut' WHERE id=$id  "  ;
   $res = mysqli_query($conn, $Updatesql);
   if($res){
    echo "<script>alert('DATA UPDATED.')</script>";
     header("location:list.php");
   }else{echo "<script>alert('DATA NOT UPDATED.')</script>";}
    
  }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>user page</title>
</head>
<body>
  <?php 
  include 'navbar.php';
  ?>
  
   <div class="container">
        <div class="row pt-4">
            <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
                <h2>Materiel</h2>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Emplacement</label>
                    <div class="col-sm-10">
                        <input type="text" name="Emplacement" placeholder="" class="form-control" id="input1" value="<?php echo $r['Emplacement'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Nom Complet</label>
                    <div class="col-sm-10">
                        <input type="text" name="Full_Name" placeholder="" class="form-control" id="input1" value="<?php echo $r['Full_Name'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Criticité</label>
                    <div class="col-sm-10">
                        <input type="text" name="Criticité" placeholder="" class="form-control" id="input1" value="<?php echo $r['Criticité'] ?>">
                    </div>
                </div>  

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">la Marque </label>
                    <div class="col-sm-10">
                        <input type="text" name="Marque" placeholder="" class="form-control" id="input1" value="<?php echo $r['Marque'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">N° de série</label>
                    <div class="col-sm-10">
                        <input type="text" name="N°_de_série" placeholder="" class="form-control" id="input1" value="<?php echo $r['N°_de_série'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Acquisition</label>
                    <div class="col-sm-10">
                        <input type="date" name="Acquisition" placeholder="" class="form-control" id="input1" value="<?php echo $r['Acquisition'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Fournisseur</label>
                    <div class="col-sm-10">
                        <input type="text" name="Fournisseur" placeholder="" class="form-control" id="input1" value="<?php echo $r['Fournisseur'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">statut</label>
                    <div class="col-sm-10">
                        <input type="text" name="Statut" placeholder="" class="form-control" id="input1" value="<?php echo $r['Statut'] ?>">
                    </div>
                </div>

                <div class="pt-4">
                    
                    <input type="submit" name="submit" value="submit" class="bnt bnt-primary m-3">
                    
                </div>

            </form>
        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>