<?php include "init.php"; ?>

<!-DOCTYPE html>
<html>
	<head>
    <title> عرض عملية شراء </title> 
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
    <?php if(isset($_GET['buy_id'])) 
    	echo '<input type="number" class="id" hidden value="'.$_GET["buy_id"].'">';
    else
        header('location:main_search.php');
    ?>
        
        <div class="content-main">
            <div class="container">
                <h1> جميع تفاصيل عملية الشراء </h1>
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
                                        <h2 class="seller_name"></h2>
                                        <span> أسم البائع </span>
                                    </li>
                                    <li>
                                        <h2 class="buy_date"></h2>
                                        <span> التاريخ </span>
                                    </li>
                                    <li>
                                        <h2 class="buy_id"></h2>
                                        <span> رقم العملية </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="info-item-sale">
                                <div class="notice">
                                    <h3>ملاحظات على عملية الشراء </h3>
                                    <div class="content-notice">
                                        <p class="buy_notes">
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-notice edit_buy_button">
                            <div class="icon-notice">
                                <i class="fa fa-pencil edit_buy" title="تعديل"></i>
                            </div>
                        </div>
                        <!-- start section info-business --> 
                        
                <!-- start section info-items -->

                        
                    <!-- start section info-number-items -->    
                        
                    <section class="info-number-items rims">
                        <h2> الجنوط التى تم شرائها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>
                    <section class="info-number-items tyres">
                        <h2> الاطارات التى تم شرائها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                    <section class="info-number-items tubes">
                        <h2> الشنابر التى تم شرائها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                    <section class="info-number-items ribbons">
                        <h2> الشرائط التى تم شرائها  </h2>
                        <div class='info-item-added'><img src='images/sorry.png'></div>
                    </section>

                <!-- end section info-number-items --> 
                        
                </div>
                </div>
            </div>
        </div>


    <div class="modal fade" id="edit" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- start section menu-type-search --> 
                <div class="menu-type-search">
                    <form method="post" id="modal_edit_form">
                        <ul class="list-unstyled items-search modal_inputs">
                            <li class="modal_size">
                                <label> المقاس </label>
                                <input autocomplete="off" class="choose-from" type="text" name="size" placeholder="ضع المقاس">
                            </li>
                            <li class="modal_brand">
                                <label> الماركه </label>
                                <input autocomplete="off" class="choose-from" type="text" name="brand" placeholder="ضع الماركه">
                            </li>
                            <li class="modal_holes_number">
                                <label> عدد الثقوب </label>
                                <input autocomplete="off" class="choose-from" type="text" name="holes_number" placeholder="ضع عدد الثقوب">
                            </li>
                            <li class="modal_new_old">
                                <label> جديد/مستعمل </label>
                                <select class="choose-from" name="new_old">
                                    <option value=""> ... </option>
                                    <option value="مستعمل"> مستعمل </option>
                                    <option value="جديد"> جديد </option>
                                </select>
                            </li>
                            <li class="modal_status">
                                <label> الحاله </label>
                                <select class="choose-from" name="status">
                                    <option value=""> ... </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>
                            </li>
                            <li class="modal_rim_type">
                                <label> النوع </label>
                                <select class="choose-from" name="rim_type">
                                    <option value=""> ... </option>
                                    <option value="حديد"> حديد  </option>
                                    <option value="سبور"> سبور </option>
                                </select>
                            </li>
                            <li class="modal_tyre_type">
                                <label> النوع </label>
                                <select class="choose-from" name="tyre_type">
                                    <option value=""> ... </option>
                                    <option value="تيل"> تيل </option>
                                    <option value="سلك"> سلك </option>
                                </select>
                            </li>
                            <li class="modal_evaluative_price">
                                <label> السعر التقديري </label>
                                <input class="choose-from evaluative_price" type="number" name="price" step="100">
                            </li>
                            <div class="container">
                                <form method="post">
                                    <textarea class="form-control modal_notes" placeholder=" ضع الملاحظات ...... "></textarea>
                                </form>
                            </div>
                        </ul>

                        <div class="go-search">
                            <span class="warn"></span>
                            <input class="send modal_save_edit" type="submit" name="" value="تعديل">
                        </div>
                    </form>
                    <div class="meun-search-1">
                        <ul class="list-unstyled menu-item">
                        
                        </ul>
                    </div>
                    <div class="meun-search-2">
                        <ul class="list-unstyled menu-item">
                            
                        </ul>
                    </div>
                    <div class="meun-search-3">
                        <ul class="list-unstyled menu-item">
                            
                        </ul>
                    </div>
                </div>
                <!-- start section menu-type-search -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
    </div>

    <form class="edit_form" action="edit_buy.php" method="POST">
        <input hidden class="edit_buy_id" type="number" name="buy_id">
    </form>
        
        
    <!-- end section content-main --> 
        
    <?php include "includes/footer.php"; ?>
        
    </body>

    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/buy_info.js"></script>
    <script src="js/nav-foot.js"></script>

</html>