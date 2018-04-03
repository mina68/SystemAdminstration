<?php
include "init.php";

// ADD RIM

// $rim = new Rims();
// $rim->set_size('25');
// $rim->set_new_old('جديد');
// $rim->set_type('حديد');
// $rim->set_evaluative_price(8000);
// $rim->set_buy_price(200);
// $rim->set_notes('جنط حلو');
// $rim->set_total_count(6);
// $rim->set_Status(1);
// $rim->set_date_added('2013/3/6');
// $rim->set_foreign_buy_id(2);
// $rim->set_holes_number(6);

// $rim->add();

//==================================================================================================

// SEARCH AVAILABLE RIMS

// $rim = new Rims();
// $rim->set_search_min_price(100);
// $rim->set_search_max_price(2000);
// $rim->set_search_min_date('2011-2-2');
// $rim->set_search_max_date('2017-2-2');
// $rim->set_search_new_old('جديد');
// $rim->set_search_type('سبور');
// $rim->set_search_brand('مرسيدس');
// $rim->set_search_size('24');
// $rim->set_Search_status(1);
// $rim->set_order_type('date_added');

// $rows = $rim->get_available_rims_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['rim_id'];
// 	echo "<br>";
// }

//========================================================================================

//SEARCH SOLD RIMS

// $rim = new Rims();
// $rim->set_search_min_price(100);
// $rim->set_search_max_price(2000);
// $rim->set_search_min_date('2011-2-2');
// $rim->set_search_max_date('2018/3/3');
// $rim->set_search_new_old('جديد');
// $rim->set_search_type('سبور');
// $rim->set_search_brand('مرسيدس');
// $rim->set_search_size('24');
// $rim->set_Search_status(1);
// $rim->set_order_type('status');

// $rows = $rim->get_sold_rims_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['rim_id'];
// 	echo "<br>";
// }

//============================================================================================

//UPDATE RIM

// $rim = new Rims();
// $rim->set_size('25');
// $rim->set_brand('مرسيدس');
// $rim->set_new_old('جديد');
// $rim->set_type('سبور');
// $rim->set_evaluative_price(1800);
// $rim->set_buy_price(1400);
// $rim->set_notes('جنط حلوة');
// $rim->set_Status(1);
// $rim->set_date_added('2013/3/4');
// $rim->set_rim_id(1);
// $rim->set_total_count(8);
// $rim->set_holes_number(8);
// $rim->set_dimentions(5);

// $rim->update();

//================================================================================================

//DELETE RIM

// $rim = new Rims();
// $rim->set_rim_id(4);
// $rim->delete();

//==================================================================================================

//GET BUY RIMS

// $rim = new Rims();
// $rim->set_foreign_buy_id(2);
// $rows = $rim->get_buy_rims();
// foreach ($rows as $row) {
// 	echo $row['rim_id'];
// 	echo "</br>";
// }

//====================================================================================================

//GET SELL RIMS

// $rim = new Rims();
// $rim->set_foreign_sell_id(2);
// $rows = $rim->get_sell_rims();
// foreach ($rows as $row) {
// 	echo $row['sold_rim_id'];
// 	echo "</br>";
// }

//====================================================================================================

//SELL A RIM

// $rim = new Rims();
// $rim->set_foreign_sell_id(2);
// $rim->set_foreign_rim_id(2);
// $rim->set_count(2);
// $rim->set_sell_price(2000);
// $rim->set_sell_date(date('Y-m-d',time()));
// $rim->sell();

//=====================================================================================================

//GET RIM BACK

// $rim = new Rims();
// $rim->set_sold_rim_id(1);
// $rim->get_rim_back(2);

//=====================================================================================================

//SEND RIM BACK

// $rim = new Rims();
// $rim->set_rim_id(1);
// $rim->send_rim_back(2);

//======================================================================================================

//DELETE BUY RIMS

// $rim = new Rims();
// $rim->set_foreign_buy_id(2);
// $rim->delete_buy_rims();

//====================================================================================================

//DELETE SELL RIMS

// $rim = new Rims();
// $rim->set_foreign_sell_id(2);
// $rim->delete_sell_rims();