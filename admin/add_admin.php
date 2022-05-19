<?php include('header.php') ;


?>


<div class="main-content">
     <div class="wrapper1">
         <h1> Add Admin</h1>

        <?php if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <br>
        <br>

         <form action="" method="POST">

         <table class="tbl-30">
             <tr>
                 <td> full name </td>
                 <td>
                     <input type="text" name="full_name" placeholder="enter your name">
                 </td>
             </tr>
             <tr>
                 <td> username </td>
                 <td>
                     <input type="text" name="username" placeholder="enter your user">
                 </td>
             </tr>
             <tr>
                 <td> password </td>
                 <td>
                     <input type="password" name="password" placeholder="enter your password">
                 </td>
             </tr>
             <tr>
                 <td colspan="2" >
                 
                     <input type="submit" name="submit" value="add admin" class="btn-sec">
                 </td>
             </tr>
        </table>
        </div>
</div>

  
<?php 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    
    $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($full_name) )
    {

        //save to database
        
        $sql ="INSERT INTO tbl_admin SET 
           full_name='$full_name',
            username='$username',
             password='$password'
           " ;
        $res = mysqli_query($conn , $sql) or die(mysqli_error());

        

        
    
    }else
    {
        echo '<script>alert("please entre some valid informations")</script>';
    }
    





/*if(isset($_POST['submit']))
{

      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];

$sql ="INSERT INTO tbl_admin SET 
full_name='$full_name',
username='$username',
password='$password'


" ;




$res = mysqli_query($conn , $sql) or die(mysqli_error());



if($res==TRUE )
{
    $_SESSION['add'] ="Admin add Successfully";  
    
    
}
else{
    $_SESSION['add'] ="Failed to add admin  ";

   
}

*/



}


?>


