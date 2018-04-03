<nav class="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="bars">
                            <i class="fa fa-bars fa-2x menu-button"></i>
                            <div class="nubmer-notificitions notification-button">
                                <!-- THE NUMBER OF UNSEEN NOTIFICATIONS IS HERE -->
                                <i class="fa fa-globe fa-2x"></i>
                            </div>
                            <ul class="list-unstyled menu-branch-links drop-down-menu">
                                <a  href="agenda_index.php"> <li> مصاريف حديدة </li> </a> 
                                <a  href="clients.php"> <li> حسابات العملاء </li> </a>
                                <a  href="buy_sell_search.php"> <li> بحث عن عملية </li> </a>
                            </ul>
                            <ul class="list-unstyled menu-branch-links notificitions">
                                <div class="cont-notificitions">

                                </div>
                                
                                <li class="add-more" data-toggle="modal" data-target="#write-notificitions"> 
                                    <strong> اضافة جديدة </strong>
                                    <i class="fa fa-plus"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled links">   
                            <li class="nav-main_search"> <a href="main_search.php">  البحث الرئيسى  </a> </li>
                            <li class="nav-agenda"> <a href="agenda_index.php"> الاجندة </a> </li>
                            <li class="nav-sell"> <a href="make_sell.php"> بيع </a> </li> 
                            <li class="nav-buy"> <a href="make_buy.php"> شراء </a> </li> 
                            <li> <a href="logout.php"> خروج </a> </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="search">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-search fa-2x search-nav"></i>
                                    <i class="fa fa-times fa-2x down"></i>
                                </li>
                                <li class="today_date"></li>
                            </ul>
                            <div class="input-search">
                                <form method="GET" action="profile.php">
                                    <input type="submit" name="" value="عرض">
                                    <input class="name" type="text" name="name" autocomplete="off" placeholder="اكتب اسم العميل">
                                </form>
                            </div>
                            <div class="result-client-nav client-search">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>