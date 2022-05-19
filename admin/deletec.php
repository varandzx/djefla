<?php   
 include '../db.php';
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `cours` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:manage_cours.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>