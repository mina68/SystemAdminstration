<?php include "init.php"; ?>
<!-DOCTYPE html>
<html>
	<head>
    <title> clients </title> 
     <meta charset="utf-8">
        <!-- make IE mtw2f2 m3a bootstrap -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
        
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/nav-foot.css">
    <link rel="stylesheet" href="css/short-details.css">
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
     
    <?php include "includes/nav-bar.php"; 
        include "includes/modals.php"; 
    ?>   
    
    <!-- start section quick-info-items --> 
        
        <section class="quick-info-items">
            <div class="container">
                <h1> حسابات العملاء </h1>
                <div class="content-quick-info-items">
                    <div class="thead thead_2">
                        <ul class="list-unstyled">
                            <li class="name-item">
                                <label> العميل  </label>
                                <i class="fa fa-user fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label> ليه  </label>
                                <i class="fa fa-credit-card fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label>  عليه  </label>
                                <i class="fa fa-credit-card fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label> عرض البروفايل </label>
                                <i class="fa fa-eye"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- start section table -->
                    <table class="table table_2">
                        <tbody>
                
                        </tbody>
                    </table>
                    <!-- end section table -->
                </div>
            </div>
        </section>    

    <!-- end section quick-info-items--> 

    <?php include "includes/footer.php"; ?>
        
    </body>
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/clients.js"></script>
    <script src="js/nav-foot.js"></script>
    
</html>
