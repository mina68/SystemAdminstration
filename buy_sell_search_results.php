<?php
include "init.php";

if(!isset($_POST['search_type']))
    header('location:buy_sell_search.php');

if($_POST['search_type']=="شراء")
{
	$buy = new Buy();
	if(isset($_POST['min_price']))
		$buy->set_search_min_total_paid($_POST['min_price']);
	if(isset($_POST['max_price']))
		$buy->set_search_max_total_paid($_POST['max_price']);
	if(isset($_POST['min_date']))
		$buy->set_search_min_buy_date($_POST['min_date']);
	if(isset($_POST['max_date']))
		$buy->set_search_max_buy_date($_POST['max_date']);
	if(isset($_POST['seller_name']))
		$buy->set_search_seller_name($_POST['seller_name']);
	if(isset($_POST['buy_id']))
		$buy->set_buy_id($_POST['buy_id']);
	if($_POST['order_type']=="date")
		$buy->set_order_type('buy_date');
	if($_POST['order_type']=="total_paid")
		$buy->set_order_type('total_paid');
	if($_POST['order_type']=="name")
		$buy->set_order_type('seller_name');

	$rows = $buy->search_buy();
}

if($_POST['search_type']=="بيع")
{
	$sell = new Sell();
	if(isset($_POST['min_price']))
		$sell->set_search_min_total_paid($_POST['min_price']);
	if(isset($_POST['max_price']))
		$sell->set_search_max_total_paid($_POST['max_price']);
	if(isset($_POST['min_date']))
		$sell->set_search_min_sell_date($_POST['min_date']);
	if(isset($_POST['max_date']))
		$sell->set_search_max_sell_date($_POST['max_date']);
	if(isset($_POST['min_sell_feed']))
		$sell->set_search_min_sell_feed($_POST['min_sell_feed']);
	if(isset($_POST['max_sell_feed']))
		$sell->set_search_max_sell_feed($_POST['max_sell_feed']);
	if(isset($_POST['buyer_name']))
		$sell->set_search_buyer_name($_POST['buyer_name']);
	if($_POST['order_type']=="date")
		$sell->set_order_type('sell_date');
	if($_POST['order_type']=="price")
		$sell->set_order_type('total_paid');
	if($_POST['order_type']=="seller_name")
		$sell->set_order_type('seller_name');

	$rows = $sell->search_sell();
}
?>

<!-DOCTYPE html>
<html>
	<head>
    <title>
    	<?php if($_POST['search_type']=="شراء") echo "نتائج البحث عن عملية شراء";
    		  else if($_POST['search_type']=="بيع") echo "نتائج البحث عن عملية بيع"; ?>
    </title> 
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
                <h1>
                	<?php if($_POST['search_type']=="شراء") echo "نتائج البحث عن عملية شراء";
    		  			  else if($_POST['search_type']=="بيع") echo "نتائج البحث عن عملية بيع"; ?>
                </h1>
                <div class="content-quick-info-items">
                    <!-- start section table -->
                    <?php if(count($rows)==0)
                        echo "<div class='info-item-added'><img src='images/sorry.png'></div>";
                    else {
                    ?>
                    <div class="thead head-business">
                        <ul class="list-unstyled">
                            <li class="name-item">
                                <label>
                                	<?php if($_POST['search_type']=="شراء") echo "البائغ";
		  			  					  else if($_POST['search_type']=="بيع") echo "المشتري"; ?>
                                </label>
                                <i class="fa fa-user fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label> التاريخ  </label>
                                <i class="fa fa-clock-o fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label> المبلغ الكلى  </label>
                                <i class="fa fa-credit-card fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label>  المبلغ المدفوع  </label>
                                <i class="fa fa-money fa-2x"></i>
                            </li>
                            <li class="name-item">
                                <label>
                                	<?php if($_POST['search_type']=="شراء") echo "رقم العملية";
		  			  					  else if($_POST['search_type']=="بيع") echo "الارباح"; ?>
                                </label>
                                <i class="fa fa-list-ol"></i>
                            </li>
                            <li class="name-item">
                                <label> عرض </label>
                                <i class="fa fa-eye"></i>
                            </li>
                        </ul>
                    </div>

                    <table>
                        <tbody> 
                        <?php

                        	foreach ($rows as $row) {
                        		echo "<tr>";
                        			echo "<td class='name-item'>";
                        				if($_POST['search_type']=="شراء") echo $row['seller_name'];
    		  			  			   else if($_POST['search_type']=="بيع") echo $row['buyer_name'];
                        				echo "</td>";
                        			echo "<td class='name-item'>";
                        				if($_POST['search_type']=="شراء") echo $row['buy_date'];
    		  			  			   	else if($_POST['search_type']=="بيع") echo $row['sell_date'];
                        				echo "</td>";
                        			echo "<td class='name-item'>";
                        				echo $row['total_paid'];
                        				echo "</td>";
                        			echo "<td class='name-item'>";
                        				echo $row['paid'];
                        				echo "</td>";
                        			echo "<td class='name-item'>";
                        				if($_POST['search_type']=="شراء") echo $row['buy_id'];
    		  			  			   	else if($_POST['search_type']=="بيع") echo $row['sell_feed'];
                        				echo "</td>";
                        			echo "<td class='name-item'><a href='";
                        				if($_POST['search_type']=="شراء")
                        				{
                        					echo "buy_info.php?buy_id=";
                        					echo $row['buy_id'];
                        				} 
    		  			  			   	else if($_POST['search_type']=="بيع")
		  			  			   		{
		  			  			   			echo "sell_info.php?sell_id=";
		  			  			   			echo $row['sell_id'];
		  			  			   		}
                        				echo "'>عرض</a></td>";
                        		echo "</tr>";
                        	}

                        ?>
                        </tbody>
                    </table>
                    <?php } // end else?>
                    <!-- end section table -->
                </div>
            </div>
        </section>   
    <!-- end section quick-info-items-->   

    <?php include "includes/footer.php"; ?>

    </body>

    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/nav-foot.js"></script>

</html>
