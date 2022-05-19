<?php include('header.php') ;

?>


<center>
    <br> <br> <br>
    <br> <br> <br>
    <br>cours upload <br> <br>
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
    
    <label>pdf Upload</label>
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
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
     $user_id = rand(1,100);
     
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'pdf';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    
    $sql = "INSERT into cours(id,anne,module,file) VALUES('$user_id','$anne','$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
    
}
 
 
?></center>