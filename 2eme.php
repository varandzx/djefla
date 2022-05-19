<?php include('db.php') ;
$r = mysqli_query($conn, "select * from affich");


    

   

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>info HOME PAGE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='affi.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>
    <header>
        <a href="#" class="logo">  <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />  informatique</a>
        <!--<a href="logout.php" class="login"> Logout </a>
        <a href="#" class="login">Affichage</a>-->
        <nav class="nav">

            <a href="index.php " class="home"> Home</a>
            <a href="1er.php " class="2eme">Cours</a>
            <a href="2eme.php">Affichage</a>
            

        </nav>
    </header>
    <section class="main"> 
        <div>
            <h2 class="h2">Here u can see any news <br> <span>Affichage </span> </h2>
            
            
            
        </div>
        
        
    </section>
    <section>
    <div class="main-content">

<div class="weapper">

<br>
<br>
<h1> AFFICHAGE </h1>
<center><p>search</p><input type="text" id="search"></center>

<form >
<table id="tbl" class="tbl-full">
    <tr>
       <th>ID</th>
       <th>MODEL</th>
       <th>ANNE</th>
       <th>DATE</th>
       <th>preview</th>

   </tr>


   
   
   <?php 
   while ($row = mysqli_fetch_array($r)) {
       echo"<tr>";
       echo"<td>" . $row['id'] . "</td>";
       echo"<td>" . $row['module'] . "</td>";
       echo"<td>" . $row['anne'] . "</td>";
       echo"<td>" . $row['date'] . "</td>";
        
       






        echo "<td><a  href='admin/pdf/" . $row['image'] . "' target='_blank'>
        <img id='image' width='20' height='20' border='0' align='center' src='admin/pdf/" . $row['image'] . "' />
      </a>                  </td>";

       
       /*echo"<td><img width='220' height='250' border='0' align='center' src='admin/pdf/" . $row['image'] . "'></td>";*/

      /*echo '<td> <input type="button" name="download" value="download"> </td>';*/
       
           
       echo "</tr>";
       if($_GET){
           if(isset($_GET['delete'])){
               delete();
           }//elseif(isset($_GET['select'])){
               //select();
           //}
       }
       
           
          
          
        
           }
       


       
       
   

?>

</table>
</form>
</div>
</div>
    
    </section>
    <script>
        function show() {
 
            /* Access image by id and change
            the display property to block*/
            document.getElementById('image')
                    .style.display = "block";
 
            document.getElementById('btnID')
                    .style.display = "none";
        }
    </script>
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
    
    
    <footer class="footer">
        <p>@Copyright <span>Mohamed Bouker </span> </p>
        <div class="social">
            <a href="" ><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>

    </footer>
    
</body>
</html>