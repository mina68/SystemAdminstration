<?php include "init.php"; ?>

<!-DOCTYPE html>
<html>
	<head>
    <title> Client Profile </title> 
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

    	if(isset($_GET['name']))
    		echo "<input class='dealer_name' type='text' hidden value='".$_GET['name']."'>";
        else
            header('location:main_search.php');

   	?>      
       
    <!-- start section profile -->  
        
        <section class="profile">
            <div class="info-client">
                <div class="container">
                    <ul class="list-unstyled">
                        <li> <?php echo $_GET['name']; ?> </li>
                        <li> 
                            <img src="images/6.png" alt="client-profile">
                        </li>
                        <li> 
                            <span class="sell_word"> بيع </span>
                            <span class="buy_word"> شراء </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
    <!-- end  section profile -->

        

    <!-- start section info-profile -->     
        
        <section class="info-profile">
            <div class="container">
            <!-- start section overlay -->        
                <div class="overlay">
                <h2> يمكنك اختيار من البيع  و  الشراء للعميل  </h2>
                <!-- start section agnda -->
                <section class="agnda">
                    <div class="money-agnda">
                        <ul class="list-unstyled">
                            
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
            <!-- end section overlay -->
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
        
    <!-- end section info-profile -->  

    <?php include "includes/footer.php"; ?> 
        
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/profile.js"></script>
    <script src="js/nav-foot.js"></script>

    
</html>