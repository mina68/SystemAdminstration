<?php
session_start();
if(isset($_SESSION['name']))
    if($_SESSION['name'] == 'malak')
        header('location:main_search.php');
?>

<!-DOCTYPE html>
<html>
	<head>
    <title> Login </title> 
     <meta charset="utf-8">
        <!-- make IE mtw2f2 m3a bootstrap -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
        
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/cairo.css">
        
    
         <!-- if de bttnfz bs 3la IE -->
	  <!--[if lt IE 9]-->
         <!--  da by5le IE y2ra elments bt3 html5 ex header , nav , section, ...... -->
      <script src="js/html5shiv.min.js"></script>
         <!--  da by5le IE y2ra media queiry w y7l ae m4akl fe mediaqueiry fe IE  tt7l -->
      <script src="js/respond.min.js"></script>
    <!--[endif]-->
	</head>
    
    
    <body>
        
    
    <!-- start section login -->  
        
        <section class="login text-center">
            <h1> تسجيل الدخول </h1>
            <form method="post">
                <input autocomplete="off" class="form-control user-login username" type="text" name="" placeholder="ادخل الاسم">
                <span class="warn warn-1"> الرجاء ملئ هذا الحقل </span>
                <input autocomplete="off" class="form-control user-login password" type="password" name="" placeholder="ادخل الرقم السرى">
                <span class="warn warn-2"> الرجاء ملئ هذا الحقل </span>
                <div class="submit">
                    <span class="warn warn-3"> تاكد من صحة البيانات </span>
                    <input class="form-control submit-button" type="submit" name="" value="تسجيل الدخول">
                </div>
            </form>
        </section>
        
    <!-- end  section login -->

    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/index.js"></script>

    
</html>