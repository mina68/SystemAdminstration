<?php include "init.php"; ?>
<!-DOCTYPE html>
<html>
    <head>
    <title>شراء - اضافة</title> 
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
    
    
    <body>

    <?php include "includes/nav-bar.php"; 
        include "includes/modals.php"; 
    ?>
        
    
    <div class="big form" method="post">


    <!-- start section menu-bar --> 
        
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
        
    <!-- end section menu-bar -->

    <section class="first-step">
        <div class="container">
            <div class="number-buy">
                <h2></h2>
            </div>
            <div class="content-info-client">
                <h2> بيانات عن عملية الشراء </h2>
                <form method="post">
                    <ul class="list-unstyled">
                        <li>
                            <input autocomplete="off" class="form-control user-info seller_name" type="text" name="" placeholder="ضع اسم البائع">
                        </li>
                        <li>
                            <input class="form-control user-info buy_date" type="date" name="" placeholder="ضع تاريخ الشراء">
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
                        <div class="col-sm-8">
                                    
                        <!-- start section sale-search -->  

                           <div class="sale-search">
                                <div class="overlay">
                                    <div class="type-search">
                                        <ul class="list-unstyled type">
                                            <li class="active">
                                                <span> أضافه جنط </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                            <li>
                                                <span> أضافه اطار </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                            <li>
                                                <span> أضافه شنبر </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                            <li>
                                                <span> أضافه شريط </span>
                                                <i class="fa fa-1x fa-plus"></i>
                                            </li>
                                        </ul>
                                        <div class="menu-type-search">
                                            <form method="POST" id="adding_item">
                                                <ul class="list-unstyled items-search items-search-buy">
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
                                                    <li class="new_old">
                                                        <label> جديد/مستعمل </label>
                                                        <select class="choose-from" name="new_old">
                                                            <option value=""> ... </option>
                                                            <option value="مستعمل"> مستعمل </option>
                                                            <option value="جديد"> جديد </option>
                                                        </select>
                                                    </li>
                                                    <li class="status">
                                                        <label> الحاله </label>
                                                        <select class="choose-from" name="status">
                                                            <option value=""> ... </option>
                                                            <option value="1"> 1 </option>
                                                            <option value="2"> 2 </option>
                                                            <option value="3"> 3 </option>
                                                        </select>
                                                    </li>
                                                    <li class="rim_type">
                                                        <label> النوع </label>
                                                        <select class="choose-from" name="rim_type">
                                                            <option value=""> ... </option>
                                                            <option value="حديد"> حديد  </option>
                                                            <option value="سبور"> سبور </option>
                                                        </select>
                                                    </li>
                                                    <li class="tyre_type">
                                                        <label> النوع </label>
                                                        <select class="choose-from" name="tyre_type">
                                                            <option value=""> ... </option>
                                                            <option value="تيل"> تيل </option>
                                                            <option value="سلك"> سلك </option>
                                                        </select>
                                                    </li>
                                                    <li class="buy_price">
                                                        <label> سعر الشراء </label>
                                                        <input class="choose-from buy_price" type="number" name="price"  step="100">
                                                    </li>
                                                    <li class="evaluative_price">
                                                        <label> السعر التقديري </label>
                                                        <input class="choose-from evaluative_price" type="number" name="price" step="100">
                                                    </li>
                                                    <li class="total_count">
                                                        <label> العدد </label>
                                                        <input class="choose-from total_count" type="number" name="total_count" step="1">
                                                    </li>
                                                </ul>
                                                <div class="add_item">
                                                    <span class="warn-8"></span>
                                                    <input class="send" type="submit" name="" value="حفظ">
                                                </div>
                                                <div class="meun-search-1 meun-search-1-buy">
                                                    <ul class="list-unstyled menu-item">
                                                      
                                                    </ul>
                                                </div>
                                                <div class="meun-search-2 meun-search-2-buy">
                                                    <ul class="list-unstyled menu-item">
                                                    
                                                    </ul>
                                                </div>
                                                <div class="meun-search-3 meun-search-3-buy">
                                                    <ul class="list-unstyled menu-item">
                                                      
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                        <!-- end  section sale-search -->
                        </div>
                        <div class="col-sm-4">
                            <div class="add-notice">
                                <textarea placeholder=" ضع الملاحظات ...... "></textarea>
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
        
        
    <!-- end section info-client --> 




    <div class="modal fade" id="edit" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- start section menu-type-search --> 
                <div class="modal-menu-type-search">
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
                                <input class="choose-from " type="number" name="price" step="100">
                            </li>
                            <li class="modal_total_count">
                                <label> العدد </label>
                                <input class="choose-from " type="number" name="price" step="100">
                            </li>
                            <li class="modal_buy_price">
                                <label> سعر القطعة </label>
                                <input class="choose-from " type="number" name="price" step="100">
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
                    <div class="modal-meun-search-1">
                        <ul class="list-unstyled menu-item">
                        
                        </ul>
                    </div>
                    <div class="modal-meun-search-2">
                        <ul class="list-unstyled menu-item">
                            
                        </ul>
                    </div>
                    <div class="modal-meun-search-3">
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
        
        
        
                
    <!-- start section number-items -->
        
        
        <section class="number-items">
            <div class="container rims">
                <h2> لم يتم شراء جنوط  </h2>
                
            </div>

            <div class="container tyres">
                <h2> لم يتم شراء اطارات  </h2>

            </div>

            <div class="container tubes">
                <h2> لم يتم شراء شنابر  </h2>
                
            </div>

            <div class="container ribbons">
                <h2> لم يتم شراء شرائط  </h2>
                
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
                            <p class="p-buy"> من فضلك ضع المبلغ المدفوع والسعر الكلى  </p>
                        </div>
                        <div class="col-sm-7">
                            <div class="info-final-total">
                                <form method="post">
                                    <span class="warn-5"></span>
                                    <input autocomplete="off" class="total_paid" type="number" name="" placeholder="ضع السعر الكلى"> 
                                    <input autocomplete="off" class="paid" type="number" name="" placeholder="ضع المبلغ المدفوع"> 
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
                    <h2 class="h1"> ضع الملاحظات على عملية الشراء </h2>
                    <textarea class="form-control buy_notes" placeholder=" ضع الملاحظات ...... "></textarea>
                </form>
            </div>
            <div class="save">
                <span class="warn-6"></span>
                <input class="send save_buy" type="submit" name="" value="اتمام عملية الشراء">
            </div>
            <div class="container">
                <div class="go-search">
                    <input class="send pre pre_to_final_total" type="submit" value="السابق">
                </div>
            </div>
        </section>
        
    <!-- end section notice-sale -->
    
        
    </div>  

    <form method="GET" id="redirect" action="buy_info.php">
        <input hidden class="buy_id" type="number" name="buy_id">
    </form>  

    <?php include "includes/footer.php"; ?>
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/make_buy.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>
