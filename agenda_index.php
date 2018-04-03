<?php include "init.php"; ?>
<!-DOCTYPE html>
<html>
    <head>
    <title> outlay </title> 
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
    
    
    <body>
        
    <?php include "includes/nav-bar.php"; 
        include "includes/modals.php"; 
    ?>
         

    <!-- start section content-all -->      
        
        <section class="content-all">
            <div class="container">
            
                <div class="overlay-content">
                    
                    <div class="choose-button">
                        <span> اضافة مصاريف </span>
                        <span class="active-button"> الاجندة </span>
                    </div>
                    
                    <!-- start section outlay -->  

                    <section class="outlay text-center">
                        <form method="post" id="outgoings">
                            <input autocomplete="off" class="form-control put-outlay outgoings" type="number"  placeholder="ادخل المصاريف">
                            <input class="form-control put-outlay outgoings_date" type="date" >
                            <div class="notice-outlay">
                                <textarea class="form-control comment" placeholder="ضع ملاحظاتك على المصاريف ......."></textarea>
                            </div>
                            <div class="submit">
                                <span class="warn"></span>
                                <input class="form-control send add_outgoings" type="submit" value="حفظ">
                            </div>
                        </form>
                    </section>

                <!-- end  section outlay -->


                <!-- start section search-earning -->  

                    <section class="search-earning text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="while">
                                    <form method="post" action="agenda.php" method="POST">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="date">
                                                    <label> اليوم </label>
                                                    <input type="date" name="date" class="date choose-date">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="submit">
                                            <input class="form-control send" type="submit" name="fixed_day" value="عرض">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="while">
                                    <form method="post" action="agenda.php" method="POST">
                                        <ul class="list-unstyled">
                                            <li class="from-to-date">
                                                <div class="date">
                                                    <label> التاريخ من  </label>
                                                    <input class="form-control  put-date data" type="date" name="min_date">
                                                    <label> التاريخ  الى  </label>
                                                    <input class="form-control  put-date data" type="date" name="max_date">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="submit">
                                            <input class="form-control send" type="submit" name="free_period" value="عرض">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </section>

                <!-- end  section search-earning -->
                </div>
                
                
            </div>
        </section>  
        
    <!-- end section content-all --> 

    <?php include "includes/footer.php"; ?>
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/agenda_index.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>