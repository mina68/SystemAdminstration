<?php
include "init.php";

// ADD RIBBON

// $ribbon = new Ribbons();
// $ribbon->set_size('رواكد');
// $ribbon->set_new_old('جديد');
// $ribbon->set_evaluative_price(100);
// $ribbon->set_buy_price(70);
// $ribbon->set_notes('حلوة');
// $ribbon->set_total_count(4);
// $ribbon->set_Status(1);
// $ribbon->set_date_added('2013/3/3');
// $ribbon->set_foreign_buy_id(3);

// $ribbon->add();

//==================================================================================================

// SEARCH AVAILABLE RIBBONS

// $ribbon = new Ribbons();
// $ribbon->set_search_min_price(10);
// $ribbon->set_search_max_price(2000);
// $ribbon->set_search_min_date('2011-2-2');
// $ribbon->set_search_max_date('2017-2-2');
// $ribbon->set_search_new_old('جديد');
// $ribbon->set_search_size('رواكد');
// $ribbon->set_Search_status(1);
// $ribbon->set_order_type('status');

// $rows = $ribbon->get_available_ribbons_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['ribbon_id'];
// 	echo "<br>";
// }

//========================================================================================

//SEARCH SOLD RIBBONS

// $ribbon = new Ribbons();
// $ribbon->set_search_min_price(100);
// $ribbon->set_search_max_price(2000);
// $ribbon->set_search_min_date('2011-2-2');
// $ribbon->set_search_max_date('2018-2-2');
// $ribbon->set_search_new_old('جديد');
// $ribbon->set_search_size('رواكد');
// $ribbon->set_Search_status(1);
// $ribbon->set_order_type('status');

// $rows = $ribbon->get_sold_ribbons_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['ribbon_id'];
// 	echo "<br>";
// }

//============================================================================================

//UPDATE RIBBON

// $ribbon = new Ribbons();
// $ribbon->set_size('24');
// $ribbon->set_new_old('جديد');
// $ribbon->set_evaluative_price(100);
// $ribbon->set_buy_price(600);
// $ribbon->set_notes('عجلة حلوة');
// $ribbon->set_Status(1);
// $ribbon->set_date_added('2013/3/4');
// $ribbon->set_ribbon_id(1);
// $ribbon->set_total_count(7);

// $ribbon->update();

//================================================================================================

//DELETE RIBBON

// $ribbon = new Ribbons();
// $ribbon->set_ribbon_id(4);
// $ribbon->delete();

//==================================================================================================

//GET BUY RIBBON

// $ribbon = new Ribbons();
// $ribbon->set_foreign_buy_id(3);
// $rows = $ribbon->get_buy_ribbons();
// foreach ($rows as $row) {
// 	echo $row['ribbon_id'];
// 	echo "</br>";
// }

//====================================================================================================

//GET SELL RIBBON

// $ribbon = new Ribbons();
// $ribbon->set_foreign_sell_id(2);
// $rows = $ribbon->get_sell_ribbons();
// foreach ($rows as $row) {
// 	echo $row['sold_ribbon_id'];
// 	echo "</br>";
// }

//====================================================================================================

//SELL A RIBBON

// $ribbon = new Ribbons();
// $ribbon->set_foreign_sell_id(2);
// $ribbon->set_foreign_ribbon_id(1);
// $ribbon->set_count(3);
// $ribbon->set_sell_price(100);
// $ribbon->set_sell_date(date('Y-m-d',time()));
// $ribbon->sell();

//=====================================================================================================

//GET RIBBON BACK

// $ribbon = new Ribbons();
// $ribbon->set_sold_ribbon_id(1);
// $ribbon->get_ribbon_back(2);

//=====================================================================================================

//SEND RIBBON BACK

// $ribbon = new Ribbons();
// $ribbon->set_ribbon_id(1);
// $ribbon->send_ribbon_back(3);

//======================================================================================================

//DELETE BUY RIBBONS

// $ribbon = new Ribbons();
// $ribbon->set_foreign_buy_id(3);
// $ribbon->delete_buy_ribbons();

//====================================================================================================

//DELETE SELL RIBBONS

// $ribbon = new Ribbons();
// $ribbon->set_foreign_sell_id(2);
// $ribbon->delete_sell_ribbons();