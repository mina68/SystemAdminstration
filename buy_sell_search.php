<?php include "init.php"; ?>
<!-DOCTYPE html>
<html>
	<head>
    <title>بحث عن عملية شراء - بيع</title> 
     <meta charset="utf-8">
        <!-- make IE mtw2f2 m3a bootstrap -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
        
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/nav-foot.css">
    <link rel="stylesheet" href="css/home.css">
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
    
    <!-- start section main-search -->  

    <section class="main-search">
        <div class="container">
        </div>
    </section>
        
        <div class="container">
            <!-- start section overlay -->
            <div class="overlay overlay_2">
                <h2> بحث عن عملية شراء - بيع  </h2>
                <div class="choose-one">
                    <p class="p-1"> 
                        <em>بيع</em> 
                        <span class="after-1">  </span>
                    </p>
                    <p class="p-2 active"> 
                        <em>شراء</em> 
                        <span class="after-2">  </span>
                    </p>
                </div>
                <!-- start section type-search -->
                <div class="type-search">
                    <div class="menu-type-search">
                        <form method="POST" action="buy_sell_search_results.php">
                            <ul class="list-unstyled items-search">
                                <li class="buyer_name">
                                    <label> اسم المشترى </label>
                                    <input autocomplete="off" class="choose-from" type="text" name="buyer_name" placeholder="ضع اسم المشترى">
                                </li>
                                <li class="seller_name">
                                    <label> اسم البائع </label>
                                    <input autocomplete="off" class="choose-from" type="text" name="seller_name" placeholder="ضع اسم البائع">
                                </li>
                                <li>
                                    <label> السعر </label>
                                    <input autocomplete="off" class="choose-from price" type="number" name="min_price" value="20" step="1">
                                    <input autocomplete="off" class="choose-from price make-space" type="number" name="max_price" value="50000" step="1">
                                </li>
                                <li class="min_date">
                                    <label> التاريخ من </label>
                                    <input class="choose-from" type="date" name="min_date" value="">
                                </li>
                                <li class="max_date">
                                    <label> التاريخ الى </label>
                                    <input class="choose-from" type="date" name="max_date" value="">
                                </li>
                                <li class="buy_id">
                                    <label> رقم العملية </label>
                                    <input autocomplete="off" class="choose-from" type="number" name="buy_id" placeholder="ضع رقم العملية ">
                                </li>
                                <li class="sell_feed">
                                    <label>  الارباح </label>
                                    <input autocomplete="off" class="choose-from price" type="number" name="min_sell_feed" value="20" step="1">
                                    <input autocomplete="off" class="choose-from price make-space" type="number" name="max_sell_feed" value="50000" step="1">
                                </li>
                                <li class="order_type">
                                    <label> ترتيب حسب </label>
                                    <select class="choose-from" name="order_type">
                                        <option value="date">التاريخ</option>
                                        <option value="total_paid">المبلغ الكلي</option>
                                        <option value="name">الاسم</option>
                                    </select>
                                </li>
                            </ul>
                            <input class="search_type" type="text" name="search_type" hidden>
                            <div class="go-search">
                                <input class="send" type="submit" name="" value="ابحث">
                            </div>
                        </form>
                        <div class="meun-search-1">
                            <ul class="list-unstyled menu-item">
            
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end section type-search -->
            </div>
            <!-- end section overlay -->
        </div>
        
    <!-- end  section main-search -->

    <?php include "includes/footer.php"; ?>
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/buy_sell_search.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>