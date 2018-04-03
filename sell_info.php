<?php include "init.php"; ?>

<!-DOCTYPE html>
<html>
    <head>
    <title> عرض عملية بيع </title> 
     <meta charset="utf-8">
        <!-- make IE mtw2f2 m3a bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/nav-foot.css">
    <link rel="stylesheet" href="css/quick-details.css">
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
        
        
    <!-- start section content-main -->
        <?php 
        if(isset($_GET['sell_id']))  
            echo '<input type="number" class="id" hidden value="'.$_GET["sell_id"].'">';
        else
            header('location:main_search.php');
        ?>
        
        <div class="content-main">
            <div class="container">
                <h1> جميع تفاصيل عملية البيع </h1>
                <div class="row">
                    <div class="col-sm-3">
                        <!-- start section dashbord --> 
                        <div class="dashbord">
                            <div class="content-dashbord">
                                <ul class="list-unstyled">
                                    <li class="active-menu">
                                        <i class="fa fa-info"></i>
                                        <p> تفاصيل عامة  </p>
                                    </li> 
                                    <li>
                                        <i class="fa fa-jsfiddle"></i>
                                        <p>جنط</p>  
                                    </li> 
                                    <li>
                                        <i class="fa fa-forumbee"></i>
                                        <p>اطار</p> 
                                    </li>
                                    <li> 
                                        <i class="fa fa-joomla"></i>
                                        <p>شنبر</p> 
                                    </li>
                                    <li>
                                        <i class="fa fa-ravelry"></i>
                                        <p>شريط</p> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- start section dashbord --> 
    
                    </div>
                    <div class="col-sm-9">
                        <!-- start section info-business --> 
                        <div class="info-business">
                            <div class="info-money">
                                <ul class="list-unstyled">
                                    <li>
                                        <h2 class="total_paid"></h2>
                                        <span> السعر الكلى </span>
                                    </li>
                                    <li>
                                        <h2 class="paid"></h2>
                                        <span> المبلغ المدفوع </span>
                                    </li>
                                    <li>
                                        <h2 class="buyer_name"></h2>
                                        <span> أسم المشتري </span>
                                    </li>
                                    <li>
                                        <h2 class="sell_date"></h2>
                                        <span> التاريخ </span>
                                    </li>
                                    <li>
                                        <h2 class="sell_feed"></h2>
                                        <span> الارباح </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="info-item-sale">
                                <div class="notice">
                                    <h3>ملاحظات على عملية البيع </h3>
                                    <div class="content-notice">
                                        <p class="sell_notes">
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-notice edit_sell_button">
                            <div class="icon-notice">
                                <i class="fa fa-pencil edit_sell" title="تعديل"></i>
                            </div>
                        </div>
                        
                        <!-- start section info-business --> 
                        
                <!-- start section info-items -->

                        
                    <!-- start section info-number-items -->    
                        
                    <section class="info-number-items rims">
                        <h2> الجنوط التى تم بيعها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                    <section class="info-number-items tyres">
                        <h2> الاطارات التى تم بيعها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                    <section class="info-number-items tubes">
                        <h2> الشنابر التى تم بيعها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                    <section class="info-number-items ribbons">
                        <h2> الشرائط التى تم بيعها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                <!-- end section info-number-items --> 
                        
                </div>
                </div>
            </div>
        </div>

    <form class="edit_form" action="make_sell.php" method="POST">
        <input hidden class="edit_sell_id" type="number" name="sell_id">
    </form>
        
        
    <!-- end section content-main --> 
        
    <?php include "includes/footer.php"; ?>
        
    </body>

    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/sell_info.js"></script>
    <script src="js/nav-foot.js"></script>

</html>

