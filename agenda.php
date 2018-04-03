<?php include "init.php"; 

if(empty($_POST['date']))
    if(empty($_POST['min_date']) && empty($_POST['max_date']))
        header('location:agenda_index.php');

?>

<!-DOCTYPE html>
<html>
	<head>
    <title> Agnda </title> 
     <meta charset="utf-8">
        <!-- make IE mtw2f2 m3a bootstrap -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
        
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/nav-foot.css">
    <link rel="stylesheet" href="css/outlay.css">
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
    
    
    <body class="background">

    <?php include "includes/nav-bar.php"; 
        include "includes/modals.php"; 
    ?>
    <?php


    if(isset($_POST['fixed_day']))
    {
        echo '<input hidden type="text" class="day_date" value="' . $_POST['date'] . '">';
    }
    if(isset($_POST['free_period']))
    {
        echo '<input hidden type="text" class="min_date" value="' . $_POST['min_date'] . '">';
        echo '<input hidden type="text" class="max_date" value="' . $_POST['max_date'] . '">';
    }

    ?>

    <section class="main-search">
        <div class="container">
        </div>
    </section>
        
                
    <!-- start section overlay --> 
        
    <div class="container">
        <div class="overlay">
            <h2> يمكنك اختيار من البيع  و  الشراء فى  الاجندة  </h2>
            <!-- start section agnda -->
            <section class="agnda">
                <div class="money-agnda">
                    <ul class="list-unstyled">
                        <li> الارباح المتوقعة : <span class="expected_feed"></span></li>
                        <li> الارباح الفعلية : <span class="feed"></span></li>
                        <li> المصاريف : <span class="outgoings"></span></li>
                    </ul>
                </div>
                <div class="choose-one">
                    <p class="p-1"> 
                        <em> البيع </em> 
                        <span class="after-1">  </span>
                    </p>
                    <p class="p-2"> 
                        <em> الشراء </em> 
                        <span class="after-2">  </span>
                    </p>
                </div>
                <div class="info-search">
                    <div class="time-search mix">
                        <i class="fa fa-clock-o"></i>
                        <?php if(isset($_POST['date']))
                                echo '<span> التاريخ : '.$_POST['date'].' </span>';
                            else
                                echo '<span> التاريخ : '.$_POST['min_date'].' - '.$_POST['max_date'].' </span>';
                         ?>
                    </div>
                    <div class="extra-money mix">
                        <i class="fa fa-money"></i>
                        <span> عرض المصاريف </span>
                        <article class="notice-extra">لا يوجد مصاريف</article>
                    </div>
                </div>        
                <!-- start section number-items -->
                    <div class="number-items buy">
                        <div class="content-number-items">
                            <div class='info-item-added'><img src='images/sorry.png'></div>
                        </div>
                    </div>

                    <div class="number-items sell">
                        <div class="content-number-items">
                            <div class='info-item-added'><img src='images/sorry.png'></div>
                        </div>
                    </div>
                <!-- end section number-items--> 
            </section>
            <!-- end section agnda -->
        </div>
    </div>
        
    <!-- end section overlay -->

    <?php include "includes/footer.php"; ?>

    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/agenda.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>