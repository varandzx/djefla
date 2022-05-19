<?php   
 include '../db.php';
 
 $query = "select * from tbl_admin";  
 $run = mysqli_query($conn, $query);;  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>manage cours</title>  
      <link rel="stylesheet" type="text/css" href="style.css">  
      <script src="jquery-3.2.1.min.js"></script>

 </head>  
 <body>  
 <header>
 <a href="admin.php"><img src="../images/logo.ico" ,  class="logo">
        <nav class="navigation">
            <a href="admin.php">Home</a>
            
            <a href="manage_cours.php">Cours</a>
            <a href="manage_affichage.php">Affichage</a>
            <a href="manage_admin.php">Dashboard</a>
        </nav>
 </header> 
 <br><br><br><br><br><br><br><br><br><br><br><br>
 
 <table id="tbl" border="1" cellspacing="0" cellpadding="0">
     <br>  
 <a href="add_admin.php" class="btn-prime">ADD Admin</a> <br>
 <center><input type="text" id="search"><p>search</p></center> 
      <tr class="heading">  
             
           <th>ID</th>  
           <th>module</th>  
           <th>anne</th>  
             
           <th>Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          
                               <td>".$result['id']."</td>  
                               <td>".$result['full_name']."</td>  
                                
                              
                               
                               <td>".$result['username']."</td>  
                               <td><a href='deletead.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
       
 </table> 
 <script>
    $(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbl tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    $("#tbl tr:first").show();
  });
});
</script> 
 </body>  
 </html>  