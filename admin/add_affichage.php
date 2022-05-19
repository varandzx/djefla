<?php include('header.php') ;

?>


<center>
    <br> <br> <br>
    <br> <br> <br>
    <br>affichage upload <br> <br>
    <br>
     <br>
    <br>
    <br>
    

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <style>
body {
    text-align: center;
}
form {
    display: inline-block;
}
    </style>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>module name</label>
    <!--<input type="text" name="title">-->
    
<select name="title" >
    <option value="asd2">asd2</option>
  <option value="se1">se1</option>
  <option value="poo">poo</option>
  <option value="reseu">Reseu</option>
  <option value="IA">IA</option>
  <option value="security">Security</option>
  <option value="reseua">dss</option>
  <option >se2</option>
  <option >Compile</option>
  
</select>

    <label >Anne</label>
    <select name="anne" >
    <option >2 EME</option>
  <option >3 EME</option>


    </select>
    
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
 
<?php 


if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
        $anne = $_POST["anne"];
     
    #file name with a random number so that similar dont get replaced
     $pname = $_FILES["file"]["name"];
     $user_id = rand(1,50);
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'pdf';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    
    $sql = "INSERT into affich(id,anne,module,image) VALUES('$user_id','$anne','$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
    
}
 
 
?></center>
    <!--<div class="main-content">
     <div class="wrapper1">
         <h1> Add affichage</h1>

        <*/?php if(isset($_SESSION['add']))
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
                 <td> module </td>
                 <td>
                     <input type="text" name="full_name" placeholder="enter module name">
                 </td>
             </tr>
             <tr>
                 <td> anne </td>
                 <td>
                     <input type="text" name="username" placeholder="enter anne">
                 </td>
             </tr>
             <tr>
                 <td> file </td>
                 <td>
                 <input id="pdf" type="file" name="image" value="" ><br><br>
                 </td>
                 <td>
                 
                  
                 </td>
             </tr>
             <tr>
                 <td colspan="2" >
                 
                     <input type="submit" name="submit" value="add affichage" class="btn-sec">
                 </td>
             </tr>
        </table>
        </div>
        </div></center>

  
</*?php
$msg = "";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    
    $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $image = $_POST['image'];

    if(!empty($username) && !empty($image) && !is_numeric($username) && !empty($full_name) )
    {

        //save to database
        
        $sql ="INSERT INTO affich SET 
           module='$full_name',
            anne='$username',
             image='$image'
           " ;
        $res = mysqli_query($conn , $sql) or die(mysqli_error());

        

        
    
    }else
    {
        echo '<script>alert("please entre some valid informations")</script>';
    }
    
    




}







?>