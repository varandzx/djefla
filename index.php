<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>info HOME PAGE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css1.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo">  <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />  informatique</a>
        <a href="logout.php" class="login"> Logout </a>
        
        <nav class="nav">
        
            <a href="index.php " class="home"> Home</a>
            <a href="1er.php " class="2eme">Cours</a>
            <a href="2eme.php">Affichage</a>
            
            <a href="#about" class="about">About</a>
            <a href="#contact" class="contact"> Contact</a>

        </nav>
    </header>
    <section class="main"> 
        <div>
            <h2 class="h2">Welcome To Info College Website <br> <span>Lessons And Projects Platform</span> </h2>
            <h3>All Lessons And Projects Is Here In Our Site</h3>
            <a href="#about" class="main-btn"> About aur College</a>
            <div class="sa">
                <a href="#facebook"><span><i class="fa-brands fa-facebook"></i></span> informatique djelfa</a>
                
            </div>
        </div>
        
    </section>
    <section class="about1" id="about">
        <h2 class="title">حول الكلية </h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="info">
                    <h3>عن الكلية </h3>
                    <p>في كلية الرياضيات و الاعلام الألي في اول سنة يدرس الطالب جذع مشترك رياضيات واعلام الي ومن ثم في السنة التي تليها يوجد تخصصين وهما تخصص الرياضيات و تخصص الاعلام الالي وفي السنوات التي تليها يدرس الطالب نفس التخصص  </p>
                </div>

            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="info">
                    <h3>تخصصات الكلية</h3>
                    <p> : يوجد في الكلية عدة تخصصات وهي  <br>تخصص الاعلام الالي•<br>تخصص معالجة الصور• <br>تخصص الشبكات•<br> تخصص الواب والهاتف النقال•</p>
                </div>

            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-pager"></i>
                </div>
                <div class="info">
                    <h3>عن المنصة</h3>
                    <p> هي منصة من انشاء طلبة الكلية وهدفها مساعدة الطلبة في الوصول الى الدروس و المشاريع و الامتحانات الخاصة بالكلية</p>
                </div>

            </div>

        </div>

    </section>
    <section class="contact1" id="contact">
         <h2 class="title">للتواصل </h2>
         <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone </h3>
                    <p> 027950078  </p>
                </div>

            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-at"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>informatique@djelfa.edu</p>
                </div>

            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="info">
                    <h3>Facebook</h3>
                    <p>Page : L3_info djelfa </p>
                </div>

            </div>
         </div>      

         

    </section>
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