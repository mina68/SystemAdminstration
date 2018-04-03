<?php include "init.php"; ?>
<!-DOCTYPE html>
<html>
    <head>
    <title>بيع - اضافة</title> 
     <meta charset="utf-8">
        <!-- make IE mtw2f2 m3a bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/nav-foot.css">
    <link rel="stylesheet" href="css/business.css">
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
    
    <?php
    if(isset($_POST['sell_id']))
        echo '<input hidden class="edit_request" type="number" value=' . $_POST['sell_id'] . '>';
    ?>
    
    <body>
      
    <?php include "includes/nav-bar.php"; 
        include "includes/modals.php"; 
    ?>  
    
    <form class="big form" method="post">


        <section class="menu-bar">
            <div class="container">
                <ul class="list-unstyled">
                    <li class="show_notice_sale"> اتمام العملية </li>
                    <li class="show_final_total"> الماليات </li>
                    <li class="show_number_items"> التاكد من العناصر </li>
                    <li class="show_info_client"> اضافة العناصر </li>
                    <li class="show_first_step active-menu-bar"> معلومات اساسية </li>
                </ul>
            </div>
        </section>


    <section class="first-step">
        <div class="container">
            <div class="content-info-client">
                <h2> بيانات عن عملية البيع </h2>
                <form method="post">
                    <ul class="list-unstyled">
                        <li>
                            <input autocomplete="off" class="form-control user-info buyer_name" type="text" name="buyer_name" placeholder="ضع اسم المشترى">
                        </li>
                        <li>
                            <input class="form-control user-info sell_date" type="date" name="sell_date" placeholder="ضع تاريخ البيع">
                        </li>
                        <li>
                            <span class="warn-7"></span>
                        </li>
                    </ul>
                </form>
                <div class="result-client">
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="go-search">
                <input class="send next next_to_info_client" type="submit" value="التالى">
            </div>
        </div>
    </section>
        
        
    <!-- start section info-client --> 
        
        
        <section class="info-client">
            <section class="for-background">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-10">
                           <div class="sale-search">
                                <div class="overlay">
                                    <div class="type-search">
                                        <ul class="list-unstyled type">
                                            <li class="for-sell active">
                                                <span> أضافه جنط </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                            <li class="for-sell">
                                                <span> أضافه اطار </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                            <li class="for-sell">
                                                <span> أضافه شنبر </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                            <li class="for-sell">
                                                <span> أضافه شريط </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                        </ul>
                                        <div class="menu-type-search">
                                            <form method="post">
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
                                                        <input autocomplete="off" class="choose-from" type="number" name="holes_number" placeholder="ضع عدد الثقوب">
                                                    </li>
                                                    <li class="buy_id">
                                                        <label> رقم الشراء </label>
                                                        <input autocomplete="off" class="choose-from" type="text" name="buy_id" placeholder="ضع رقم العملية">
                                                    </li>
                                                    <li class="new_old">
                                                        <label> جديد/مستعمل </label>
                                                        <select class="choose-from" name="new_old">
                                                            <option value="تجاهل"> تجاهل </option>
                                                            <option value="مستعمل"> مستعمل </option>
                                                            <option value="جديد"> جديد </option>
                                                        </select>
                                                    </li>
                                                    <li class="status">
                                                        <label> الحاله </label>
                                                        <select class="choose-from" name="status">
                                                            <option value="تجاهل"> تجاهل </option>
                                                            <option value="1"> 1 </option>
                                                            <option value="2"> 2 </option>
                                                            <option value="3"> 3 </option>
                                                        </select>
                                                    </li>
                                                    <li class="rim_type">
                                                        <label> النوع </label>
                                                        <select class="choose-from" name="rim_type">
                                                            <option value="تجاهل"> تجاهل </option>
                                                            <option value="حديد"> حديد  </option>
                                                            <option value="سبور"> سبور </option>
                                                        </select>
                                                    </li>
                                                    <li class="tyre_type">
                                                        <label> النوع </label>
                                                        <select class="choose-from" name="tyre_type">
                                                            <option value="تجاهل"> تجاهل </option>
                                                            <option value="تيل"> تيل </option>
                                                            <option value="سلك"> سلك </option>
                                                        </select>
                                                    </li>
                                                    <li class="price">
                                                        <label> السعر </label>
                                                        <input class="choose-from price min_price" type="number" name="min_price" min="20" max="50000" value="20" step="10">
                                                        <input class="choose-from price make-space max_price" type="number" name="max_price" min="20" max="50000" value="50000" step="10">
                                                    </li>
                                                    <li class="min_date">
                                                        <label> التاريخ من </label>
                                                        <input class="choose-from" type="date" name="min_date" value="">
                                                    </li>
                                                    <li class="max_date">
                                                        <label> التاريخ الى </label>
                                                        <input class="choose-from" type="date" name="max_date" value="">
                                                    </li>
                                                </ul>
                                                <div class="go-search">
                                                    <button data-toggle="modal" data-target="#result-search" class="send">ابحث</button>
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
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="go-search">
                    <input class="send next next_to_number_items" type="submit" value="التالى">
                    <input class="send pre pre_to_first_step" type="submit" value="السابق">
                </div>
            </div>
        </section>


    <div class="modal fade error-modal-id" id="error-modal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <section class="error-modal">
                    <div class="icon-notice">
                        <i class="fa fa-times fa-5x"></i>
                    </div>
                    <p class="error"></p>
                </section>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">ضع السعر و العدد </h4>
            </div>
            <div class="modal-body">
                <section class="price-sale">
                    <form method="post">
                        <input autocomplete="off" class="enter_sell_price" type="number" name="" placeholder="ضع سعر القطعة">
                        <span class="warn-1"></span>
                        <input autocomplete="off" class="enter_count" type="number" name="" placeholder="ضع العدد">
                        <span class="warn-2"></span>
                        <input class="send confirm_sell_item" type="submit"  value="بيع">
                    </form>
                </section>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
    </div>

    <div class="modal fade" id="editModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">ضع السعر و العدد </h4>
            </div>
            <div class="modal-body">
                <section class="price-sale">
                    <form method="post">
                        <input autocomplete="off" class="edited_sell_price" type="number" name="" placeholder="ضع سعر القطعة">
                        <span class="warn-3"></span>
                        <input autocomplete="off" class="edited_count" type="number" name="" placeholder="ضع العدد">
                        <span class="warn-4"></span>
                        <input class="send confirm_edited_sell_item" type="submit"  value="بيع">
                    </form>
                </section>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
    </div>
        
        
    <!-- end section info-client --> 
        
        
        
                
    <!-- start section number-items -->
        
        
        <section class="number-items">
            <div class="container rims">
                <h2> لم يتم بيع جنوط  </h2>
                
            </div>

            <div class="container tyres">
                <h2> لم يتم بيع اطارات  </h2>
                
            </div>

            <div class="container tubes">
                <h2> لم يتم بيع شنابر  </h2>
                
            </div>

            <div class="container ribbons">
                <h2> لم يتم بيع شرائط  </h2>
                
            </div>
            <div class="container">
                <div class="go-search">
                    <input class="send next next_to_final_total" type="submit" value="التالى">
                    <input class="send pre pre_to_info_client" type="submit" value="السابق">
                </div>
            </div>
        </section>
        
        
    <!-- end section number-items--> 
        
        
     <!-- start section final-total--> 
        
        
        <section class="final-total">
            <section class="for-background">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p> من فضلك ضع المبلغ المدفوع والسعر الكلى  </p>
                        </div>
                        <div class="col-sm-7">
                            <div class="info-final-total">
                                <form method="post">
                                    <span class="warn-5"></span>
                                    <input autocomplete="off" class="total_paid" type="number" placeholder="ضع السعر الكلى"> 
                                    <input autocomplete="off" class="paid" type="number" placeholder="ضع المبلغ المدفوع"> 
                                    <div class="total">
                                        <span> الارباح الكليه : </span>
                                        <span class="sell_feed">0</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="go-search">
                    <input class="send next next_to_notice_sale" type="submit" value="التالى">
                    <input class="send pre pre_to_number_items" type="submit" value="السابق">
                </div>
            </div>
        </section>
        
        
     <!-- end section final-total--> 
        
        
        
        
    <!-- start section notice-sale -->
        
        <section class="notice-sale">
            <div class="container">
                <form method="post">
                    <h2 class="h1"> ضع الملاحظات على عملية البيع </h2>
                    <textarea class="form-control notes" placeholder=" ضع الملاحظات ...... "></textarea>
                </form>
            </div>

            <div class="save">
                <span class="warn-6"></span>

                <?php if(isset($_POST['sell_id'])) { ?>
                    <input class="send edit_undo" style="background: #239dcc;" type="submit" name="" value="العودة">
                    <input class="send edit_submit" type="submit" name="" value="تعديل">
                    <input class="send edit_cancel" style="background: #ff3939;" type="submit" name="" value="الغاء العملية">
                <?php } else { ?>
                    <input class="send save_sell" type="submit" name="" value="اتمام عملية البيع">
                <?php } ?>
            </div>
            <div class="container">
                <div class="go-search">
                    <input class="send pre pre_to_final_total" type="submit" value="السابق">
                </div>
            </div>
        </section>
        
    <!-- end section notice-sale -->
        
    <section class="result-search"> 
        <div class="modal fade" id="result-search" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title"></h2>
                </div>
                <div class="modal-body">
                    
                    <div class="result-items-search">

                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>
    </section>
    
             
    <!-- end section result-search -->
    </form>

    <form method="GET" id="redirect" action="sell_info.php">
        <input hidden class="sell_id" type="number" name="sell_id">
    </form>
        
    </form>    

    <?php include "includes/footer.php"; ?>
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/make_sell.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>
