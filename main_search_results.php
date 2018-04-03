<?php
include "init.php";

if(!isset($_POST['search_type']))
	header('location:main_search.php');

if($_POST['search_type']=='متاح' && $_POST['element_type']=='جنط')
{
	$rim = new Rims();
	$rim->set_search_min_price($_POST['min_price']);
	$rim->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$rim->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$rim->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$rim->set_search_new_old($_POST['new_old']);
	if($_POST['rim_type']!="تجاهل")
		$rim->set_search_type($_POST['rim_type']);
	if(!empty($_POST['size']))
		$rim->set_search_size($_POST['size']);
	if(!empty($_POST['holes_number']))
		$rim->set_search_holes_number($_POST['holes_number']);
	if($_POST['status']!="تجاهل")
		$rim->set_Search_status($_POST['status']);
	if(!empty($_POST['buy_id']))
		$rim->set_foreign_buy_id($_POST['buy_id']);
	if($_POST['order_type']=="date")
		$rim->set_order_type('date_added');
	if($_POST['order_type']=="price")
		$rim->set_order_type('buy_price');
	if($_POST['order_type']=="status")
		$rim->set_order_type('status');
	if($_POST['order_type']=="size")
		$rim->set_order_type('size');

	$rows = $rim->get_available_rims_with_conditions();
}

else if($_POST['search_type']=='متاح' && $_POST['element_type']=='اطار')
{
	$tyre = new Tyres();
	$tyre->set_search_min_price($_POST['min_price']);
	$tyre->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$tyre->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$tyre->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$tyre->set_search_new_old($_POST['new_old']);
	if($_POST['tyre_type']!="تجاهل")
		$tyre->set_search_type($_POST['tyre_type']);
	if(!empty($_POST['size']))
		$tyre->set_search_size($_POST['size']);
	if(!empty($_POST['brand']))
		$tyre->set_search_brand($_POST['brand']);
	if($_POST['status']!="تجاهل")
		$tyre->set_Search_status($_POST['status']);
	if(!empty($_POST['buy_id']))
		$tyre->set_foreign_buy_id($_POST['buy_id']);
	if($_POST['order_type']=="date")
		$tyre->set_order_type('date_added');
	if($_POST['order_type']=="price")
		$tyre->set_order_type('buy_price');
	if($_POST['order_type']=="status")
		$tyre->set_order_type('status');
	if($_POST['order_type']=="size")
		$tyre->set_order_type('size');

	$rows = $tyre->get_available_tyres_with_conditions();
}

else if($_POST['search_type']=='متاح' && $_POST['element_type']=='شنبر')
{
	$tube = new Tubes();
	$tube->set_search_min_price($_POST['min_price']);
	$tube->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$tube->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$tube->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$tube->set_search_new_old($_POST['new_old']);
	if(!empty($_POST['size']))
		$tube->set_search_size($_POST['size']);
	if(!empty($_POST['brand']))
		$tube->set_search_brand($_POST['brand']);
	if($_POST['status']!="تجاهل")
		$tube->set_Search_status($_POST['status']);
	if(!empty($_POST['buy_id']))
		$tube->set_foreign_buy_id($_POST['buy_id']);
	if($_POST['order_type']=="date")
		$tube->set_order_type('date_added');
	if($_POST['order_type']=="price")
		$tube->set_order_type('buy_price');
	if($_POST['order_type']=="status")
		$tube->set_order_type('status');
	if($_POST['order_type']=="size")
		$tube->set_order_type('size');

	$rows = $tube->get_available_tubes_with_conditions();
}

else if($_POST['search_type']=='متاح' && $_POST['element_type']=='شريط')
{
	$ribbon = new Ribbons();
	$ribbon->set_search_min_price($_POST['min_price']);
	$ribbon->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$ribbon->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$ribbon->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$ribbon->set_search_new_old($_POST['new_old']);
	if(!empty($_POST['size']))
		$ribbon->set_search_size($_POST['size']);
	if($_POST['status']!="تجاهل")
		$ribbon->set_Search_status($_POST['status']);
	if(!empty($_POST['buy_id']))
		$ribbon->set_foreign_buy_id($_POST['buy_id']);
	if($_POST['order_type']=="date")
		$ribbon->set_order_type('date_added');
	if($_POST['order_type']=="price")
		$ribbon->set_order_type('buy_price');
	if($_POST['order_type']=="status")
		$ribbon->set_order_type('status');
	if($_POST['order_type']=="size")
		$ribbon->set_order_type('size');

	$rows = $ribbon->get_available_ribbons_with_conditions();
}

else if($_POST['search_type']=='مباع' && $_POST['element_type']=='جنط')
{
	$rim = new Rims();
	$rim->set_search_min_price($_POST['min_price']);
	$rim->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$rim->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$rim->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$rim->set_search_new_old($_POST['new_old']);
	if($_POST['rim_type']!="تجاهل")
		$rim->set_search_type($_POST['rim_type']);
	if(!empty($_POST['size']))
		$rim->set_search_size($_POST['size']);
	if(!empty($_POST['holes_number']))
		$rim->set_search_holes_number($_POST['holes_number']);
	if($_POST['status']!="تجاهل")
		$rim->set_Search_status($_POST['status']);
	if($_POST['order_type']=="date")
		$rim->set_order_type('sell_date');
	if($_POST['order_type']=="price")
		$rim->set_order_type('sell_price');
	if($_POST['order_type']=="status")
		$rim->set_order_type('status');
	if($_POST['order_type']=="size")
		$rim->set_order_type('size');

	$rows = $rim->get_sold_rims_with_conditions();
}

else if($_POST['search_type']=='مباع' && $_POST['element_type']=='اطار')
{
	$tyre = new Tyres();
	$tyre->set_search_min_price($_POST['min_price']);
	$tyre->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$tyre->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$tyre->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$tyre->set_search_new_old($_POST['new_old']);
	if($_POST['tyre_type']!="تجاهل")
		$tyre->set_search_type($_POST['tyre_type']);
	if(!empty($_POST['size']))
		$tyre->set_search_size($_POST['size']);
	if(!empty($_POST['brand']))
		$tyre->set_search_brand($_POST['brand']);
	if($_POST['status']!="تجاهل")
		$tyre->set_Search_status($_POST['status']);
	if($_POST['order_type']=="date")
		$tyre->set_order_type('sell_date');
	if($_POST['order_type']=="price")
		$tyre->set_order_type('sell_price');
	if($_POST['order_type']=="status")
		$tyre->set_order_type('status');
	if($_POST['order_type']=="size")
		$tyre->set_order_type('size');

	$rows = $tyre->get_sold_tyres_with_conditions();
}

else if($_POST['search_type']=='مباع' && $_POST['element_type']=='شنبر')
{
	$tube = new Tubes();
	$tube->set_search_min_price($_POST['min_price']);
	$tube->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$tube->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$tube->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$tube->set_search_new_old($_POST['new_old']);
	if(!empty($_POST['size']))
		$tube->set_search_size($_POST['size']);
	if(!empty($_POST['brand']))
		$tube->set_search_brand($_POST['brand']);
	if($_POST['status']!="تجاهل")
		$tube->set_Search_status($_POST['status']);
	if($_POST['order_type']=="date")
		$tube->set_order_type('sell_date');
	if($_POST['order_type']=="price")
		$tube->set_order_type('sell_price');
	if($_POST['order_type']=="status")
		$tube->set_order_type('status');
	if($_POST['order_type']=="size")
		$tube->set_order_type('size');

	$rows = $tube->get_sold_tubes_with_conditions();
}

else if($_POST['search_type']=='مباع' && $_POST['element_type']=='شريط')
{
	$ribbon = new Ribbons();
	$ribbon->set_search_min_price($_POST['min_price']);
	$ribbon->set_search_max_price($_POST['max_price']);
	if(!empty($_POST['min_date']))
		$ribbon->set_search_min_date($_POST['min_date']);
	if(!empty($_POST['max_date']))
		$ribbon->set_search_max_date($_POST['max_date']);
	if($_POST['new_old']!="تجاهل")
		$ribbon->set_search_new_old($_POST['new_old']);
	if(!empty($_POST['size']))
		$ribbon->set_search_size($_POST['size']);
	if($_POST['status']!="تجاهل")
		$ribbon->set_Search_status($_POST['status']);
	if($_POST['order_type']=="date")
		$ribbon->set_order_type('sell_date');
	if($_POST['order_type']=="price")
		$ribbon->set_order_type('sell_price');
	if($_POST['order_type']=="status")
		$ribbon->set_order_type('status');
	if($_POST['order_type']=="size")
		$ribbon->set_order_type('size');

	$rows = $ribbon->get_sold_ribbons_with_conditions();
}

?>

<!-DOCTYPE html>
<html>
	<head>
    <title> نتائج البحث الرئيسي </title> 
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
        
        <div class="content-main">
            <div class="container">

                <!-- start section info-number-items -->   

                    <section class="info-number-items home-result">
                        <?php
		            	if($_POST['element_type']=='جنط')
		                	echo '<h2> نتائج البحث عن جنوط  </h2>';
		                else if($_POST['element_type']=='اطار')
		                	echo '<h2> نتائج البحث عن اطارات  </h2>';
		                else if($_POST['element_type']=='شنبر')
		                	echo '<h2> نتائج البحث عن شنابر  </h2>'; 
		                else if($_POST['element_type']=='شريط')
		                	echo '<h2> نتائج البحث عن شرائط  </h2>';  
		                ?> 

		                <?php if(count($rows)==0)
		                	echo "<div class='info-item-added'><img src='images/sorry.png'></div>";
		                ?>

		                <?php foreach ($rows as $row) { ?>

                        <div class="info-item-added">
                            <ul class="list-unstyled">

                                <li>
                                    <p class="size"><?php echo $row['size']; ?></p>
                                    <label> المقاس  </label>
                                </li>

                                <li>
                                    <p class="new_old"><?php echo $row['new_old']; ?></p>
                                    <label> جديد/ستعمل  </label>
                                </li>

                                <li>
                                    <p class="status"><?php echo $row['status']; ?></p>
                                    <label> الحاله  </label>
                                </li>

                                <?php if($_POST['search_type']=='متاح') { ?>
	                                <li>
	                                    <p><?php echo $row['date_added']; ?></p>
	                                    <label> تاريخ الشراء  </label>
	                                </li>
	                            <?php } ?>

	                            <?php if($_POST['search_type']=='مباع') { ?>
	                                <li>
	                                    <p><?php echo $row['sell_date']; ?></p>
	                                    <label> تاريخ البيع  </label>
	                                </li>
	                            <?php } ?>

	                            <?php if($_POST['search_type']=='مباع') { ?>
	                                <li>
	                                    <p><?php echo $row['count']; ?></p>
	                                    <label> العدد المباع  </label>
	                                </li>
	                            <?php } ?>

	                            <?php if($_POST['search_type']=='متاح') { ?>
	                                <li>
	                                    <p><?php echo $row['available']; ?></p>
	                                    <label> العدد المتاح  </label>
	                                </li>
	                            <?php } ?>

	                            <hr>

                                <?php if($_POST['element_type']=='جنط' || $_POST['element_type']=='اطار') { ?>
	                                <li>
	                                    <p class="type"><?php echo $row['type']; ?></p>
	                                    <label> النوع  </label>
	                                </li>
	                            <?php } ?>

	                            <?php if($_POST['element_type']=='اطار' || $_POST['element_type']=='شنبر') { ?>
	                                <li>
	                                    <p class="brand"><?php echo $row['brand']; ?></p>
	                                    <label> الماركة  </label>
	                                </li>
	                            <?php } ?>

	                            <?php if($_POST['element_type']=='جنط') { ?>
	                                <li>
	                                    <p class="holes_number"><?php echo $row['holes_number']; ?></p>
	                                    <label> عدد الثقوب  </label>
	                                </li>
	                            <?php } ?>

                                <li>
                                    <p><?php echo $row['buy_price']; ?></p>
                                    <label> سعر الشراء  </label>
                                </li>
                                
                                <?php if($_POST['search_type']=='متاح') { ?>
	                                <li>
	                                    <p class="evaluative_price"><?php echo $row['evaluative_price']; ?></p>
	                                    <label> السعر التقديري  </label>
	                                </li>
	                            <?php } ?>

	                            <?php if($_POST['search_type']=='مباع') { ?>
	                                <li>
	                                    <p><?php echo $row['sell_price']; ?></p>
	                                    <label> سعر البيع  </label>
	                                </li>
	                            <?php } ?>

                                <?php if($_POST['search_type']=='متاح') { ?>
	                                <li>
	                                    <p><?php echo $row['foreign_buy_id']; ?></p>
	                                    <label> رقم العملية  </label>
	                                </li>
	                            <?php } ?>
	                            <input hidden class="item_id" name="" value="<?php
	                            	if($_POST['element_type']=='جنط')
	                            		echo $row['rim_id'];
	                            	else if($_POST['element_type']=='اطار')
	                            		echo $row['tyre_id'];
	                            	else if($_POST['element_type']=='شنبر')
	                            		echo $row['tube_id'];
	                            	else if($_POST['element_type']=='شريط')
	                            		echo $row['ribbon_id'];
	                            ?>">

                            </ul>
                            <div class="home-notice">
                                <div class="icon-notice">
                                	<?php if($_POST['search_type']=='متاح') { ?>
                                    	<a href="buy_info.php?buy_id=<?php echo $row['foreign_buy_id'] ?>"><i class="fa fa-eye" title="عرض تفاصيل الشراء"></i></a>
                                    	<i class="fa fa-pencil edit_item" title="تعديل"></i>
                                    <?php } ?>
                                    <?php if($_POST['search_type']=='مباع') { ?>
                                    	<a href="sell_info.php?sell_id=<?php echo $row['foreign_sell_id'] ?>"><i class="fa fa-eye" title="عرض تفاصيل البيع"></i></a>
                                    <?php } ?>
                                    <i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i>
                                </div>
                                <div class="about-notice">
                                    <p>
                                        <?php echo $row['notes']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </section>

                <!-- start section info-number-items -->   

            </div>
        </div>
        
        
    <!-- end section content-main --> 


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
        
    <?php include "includes/footer.php"; ?>
        
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/main_search_results.js"></script>
    <script src="js/nav-foot.js"></script>
    
    
</html>