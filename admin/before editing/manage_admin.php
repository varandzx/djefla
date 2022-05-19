<?php include('header.php') ;
$r = mysqli_query($conn, "select * from tbl_admin");
?>

<div class="main-content">

     <div class="weapper">
     
     <br>
     <br>
     <h1> MANAGE ADMIN </h1>
     <a href="add_admin.php" class="btn-prime">ADD ADMIN</a>
     <br>
     <center><p>search</p><input type="text" id="search"></center>

     <form method="post">
     <table id="tbl" class="tbl-full">
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User-name</th>
            <th>ACTION</th>
            


        </tr>
        <?php 
        while ($row = mysqli_fetch_array($r)) {
            echo"<tr>";
            echo"<td>" . $row['id'] . "</td>";
            echo"<td>" . $row['full_name'] . "</td>";
            echo"<td>" . $row['username'] . "</td>";
            echo "<td><a href='deletead.php?id=".$row['id']."' id='btn'>Delete</a></td>";
            echo"</tr>";

        }

?>

           
        
      
         

          
    



        

</table>

</form>
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
</div>
</div>



            

