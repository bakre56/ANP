<?php 
include_once 'conn.php';
$Readsql = "SELECT * FROM materiel";
$res = mysqli_query($conn,$Readsql);


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
        <h2>liste des Matériels</h2>
        <a href="add.php">
            <button class="btn btn-primary" type="">
                Ajouter un Produit
            </button>
        </a>
    </div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>id</th>
                <th>Emplacement</th>
                <th>Nom Complet</th>
                <th>Criticité</th>
                <th>la Marque</th>
                <th>N° de série</th>
                <th>Acquisition</th>
                <th>Fournisseur</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($r = mysqli_fetch_assoc($res)) { ?>
             <tr>
                <th scope="row"><?php echo $r['id'];?></th>
                    <td> <?php echo $r['Emplacement']; ?></td>
                    <td> <?php echo $r['Full_Name']; ?></td>
                    <td> <?php echo $r['Criticité']; ?></td>
                    <td> <?php echo $r['Marque']; ?></td>
                    <td> <?php echo $r['N°_de_série']; ?></td>
                    <td> <?php echo $r['Acquisition']; ?></td>
                    <td> <?php echo $r['Fournisseur']; ?></td>
                    <td> <?php echo $r['Statut']; ?></td>

                    <td>
                        
                        <a href="update.php?id=<?php echo $r['id'];  ?>" class="m-2">
                        <i class="fa fa-edit fa-2x"></i>
                        </a>
                        <a href="delete.php?id=<?php echo $r['id']; ?>">
                        <i class="fa fa-trash fa-2x red-icon"
                        data-bs-toggle="modal"
                        data-bs-target="#exempleModal <?php echo $r['id']; ?>">
                        </i>
                        </a>
                      
            </td>
        </tr>
            <?php }?>
        </tbody>
    </table>
</div>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html> 