<?php include ('config/constant.php') ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="fff.css">
    <title>ADMIN PAGE</title>
    <style>
        #btn_log{
    font-size: 15px;
    text-decoration: none;
    color: red;
}
    </style>
</head>
<body>

    <header>
        
        <a href="admin.php"><img src="../images/logo.ico" ,  class="logo">
        <nav class="navigation">
            <a href="admin.php">Home</a>
            
            <a href="manage_cours.php">Cours</a>
            <a href="manage_affichage.php">Affichage</a>
            <a href="manage_admin.php">Dashboard</a>
            
            <a id="btn_log" href="../login.php">Logout</a>
        </nav>
        
    </header>