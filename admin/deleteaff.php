<?php   
 include '../db.php';
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `affich` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:manage_affichage.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>