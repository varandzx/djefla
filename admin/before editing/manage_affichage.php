<?php include('header.php') ;
$r = mysqli_query($conn, "select * from affich");

    $id = $_POST['id'];

   

?>
<div class="main-content">

     <div class="weapper">
     
     <br>
     <br>
     <h1> AFFICHAGE </h1>
     <a href="add_affichage.php" class="btn-prime">ADD AFFICHAGE</a>
     <center><p>search</p><input type="text" id="search"></center>

     <table id="tbl" class="tbl-full">
         <tr>
            <th>ID</th>
            <th>MODEL</th>
            <th>ANNE</th>
            <th>DATE</th>
            <th>ACTION</th>

        </tr>


        
        
       
        
        <?php 
        while ($row = mysqli_fetch_array($r)) {
            echo"<tr>";
            echo"<td>" . $row['id'] . "</td>";
            echo"<td>" . $row['module'] . "</td>";
            echo"<td>" . $row['anne'] . "</td>";
            echo"<td>" . $row['date'] . "</td>";
            echo '<td><input type="button" name="delete" value="delete"></td>';
                
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
</table>
</div>
</div>