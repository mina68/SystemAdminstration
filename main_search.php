<?php include "init.php"; ?>
<!DOCTYPE html>
<html>
	<head>
    <title>البحث الرئيسي</title> 
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
            <div class="overlay overlay_2">
                <h2> يمكنك البحث عن  المباع  و  المتاح  </h2>
                <div class="choose-one">
                    <p class="p-1"> 
                        <em>مباع</em> 
                        <span class="after-1"></span>
                    </p>
                    <p class="p-2"> 
                        <em>متاح</em> 
                        <span class="after-2"></span>
                    </p>
                </div>
                <div class="type-search">
                    <ul class="list-unstyled type">
                        <li class="select_element active">جنط</li>
                        <li class="select_element">اطار</li>
                        <li class="select_element">شنبر</li>
                        <li class="select_element">شريط</li>
                    </ul>
                    <div class="menu-type-search">
                        <form method="POST" action="main_search_results.php">
                            <ul class="list-unstyled items-search">
                                <li class="size">
                                    <label> المقاس </label>
                                    <input autocomplete="off" class="choose-from" type="text" name="size" placeholder="ضع المقاس">
                                </li>
                                <li class="brand">
                                    <label> الماركه </label>
                                    <input autocomplete="off" class="choose-from" type="text" name="brand" placeholder="ضع الماركه">
                                </li>
                                <li class="holes_number">
                                    <label> عدد الثقوب </label>
                                    <input autocomplete="off" class="choose-from" type="text" name="holes_number" placeholder="ضع عدد الثقوب">
                                </li>
                                <li class="buy_id">
                                    <label> رقم الشراء </label>
                                    <input autocomplete="off" class="choose-from" type="text" name="buy_id" placeholder="ضع رقم العملية">
                                </li>
                                <li class="new_old">
                                    <label> جديد/مستعمل </label>
                                    <select class="choose-from" name="new_old">
                                        <option value="تجاهل">تجاهل</option>
                                        <option value="مستعمل">مستعمل</option>
                                        <option value="جديد">جديد</option>
                                    </select>
                                </li>
                                <li class="status">
                                    <label> الحاله </label>
                                    <select class="choose-from" name="status">
                                        <option value="تجاهل">تجاهل</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </li>
                                <li class="rim_type">
                                    <label> النوع </label>
                                    <select class="choose-from" name="rim_type">
                                        <option value="تجاهل">تجاهل</option>
                                        <option value="حديد">حديد</option>
                                        <option value="سبور">سبور</option>
                                    </select>
                                </li>
                                <li class="tyre_type">
                                    <label> النوع </label>
                                    <select class="choose-from" name="tyre_type">
                                        <option value="تجاهل">تجاهل</option>
                                        <option value="تيل">تيل</option>
                                        <option value="سلك">سلك</option>
                                    </select>
                                </li>
                                <li class="price">
                                    <label> السعر من - الى </label>
                                    <input autocomplete="off" class="choose-from price" type="number" name="min_price" min="20" max="50000" value="20" step="1">
                                    <input autocomplete="off" class="choose-from price make-space" type="number" name="max_price" min="20" max="50000" value="50000" step="1">
                                </li>
                                <li class="min_date">
                                    <label> التاريخ من </label>
                                    <input class="choose-from" type="date" name="min_date" value="">
                                </li>
                                <li class="max_date">
                                    <label> التاريخ الى </label>
                                    <input class="choose-from" type="date" name="max_date" value="">
                                </li>
                                <li class="order_type">
                                    <label> ترتيب حسب </label>
                                    <select class="choose-from" name="order_type">
                                        <option value="date">التاريخ</option>
                                        <option value="price">السعر</option>
                                        <option value="status">الحالة</option>
                                        <option value="size">المقاس</option>
                                    </select>
                                </li>
                            </ul>
                            <input class="search_type" type="text" name="search_type" hidden>
                            <input class="element_type" type="text" name="element_type" hidden>
                            <div class="go-search">
                                <input class="send" type="submit" name="search" value="ابحث">
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
                </div>
            </div>
        </div>
        
    <!-- end  section main-search -->

    <?php include "includes/footer.php"; ?>
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/main_search.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>