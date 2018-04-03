<?php
include "init.php";

// ADD TYRE

// $tyre = new Tyres();
// $tyre->set_size('24/1200');
// $tyre->set_brand('ميشلان');
// $tyre->set_new_old('جديد');
// $tyre->set_type('سلك');
// $tyre->set_evaluative_price(1800);
// $tyre->set_buy_price(1400);
// $tyre->set_notes('عجلة حلوة');
// $tyre->set_total_count(4);
// $tyre->set_Status(1);
// $tyre->set_date_added('2013/3/3');
// $tyre->set_foreign_buy_id(2);

// $tyre->add();

//==================================================================================================

// SEARCH AVAILABLE TYRE

// $tyre = new Tyres();
// $tyre->set_search_min_price(100);
// $tyre->set_search_max_price(2000);
// $tyre->set_search_min_date('2011-2-2');
// $tyre->set_search_max_date('2017-2-2');
// $tyre->set_search_new_old('جديد');
// $tyre->set_search_type('سلك');
// $tyre->set_search_brand('ميشلان');
// $tyre->set_search_size('24/1200');
// $tyre->set_Search_status(1);
// $tyre->set_order_type('status');

// $rows = $tyre->get_available_tyres_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['tyre_id'];
// 	echo "<br>";
// }

//========================================================================================

//SEARCH SOLD TYRE

// $tyre = new Tyres();
// $tyre->set_search_min_price(100);
// $tyre->set_search_max_price(2000);
// $tyre->set_search_min_date('2011-2-2');
// $tyre->set_search_max_date('2017-2-2');
// $tyre->set_search_new_old('جديد');
// $tyre->set_search_type('سلك');
// $tyre->set_search_brand('ميشلان');
// $tyre->set_search_size('24/1200');
// $tyre->set_Search_status(1);
// $tyre->set_order_type('status');

// $rows = $tyre->get_sold_tyres_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['tyre_id'];
// 	echo "<br>";
// }

//============================================================================================

//UPDATE TYRE

// $tyre = new Tyres();
// $tyre->set_size('24/1300');
// $tyre->set_brand('ميشلان');
// $tyre->set_new_old('جديد');
// $tyre->set_type('سلك');
// $tyre->set_evaluative_price(1800);
// $tyre->set_buy_price(1400);
// $tyre->set_notes('عجلة حلوة');
// $tyre->set_Status(1);
// $tyre->set_date_added('2013/3/4');
// $tyre->set_tyre_id(5);
// $tyre->set_total_count(5);

// $tyre->update();

//================================================================================================

//DELETE TYRE

// $tyre = new Tyres();
// $tyre->set_tyre_id(4);
// $tyre->delete();

//==================================================================================================

//GET BUY TYRE

// $tyre = new Tyres();
// $tyre->set_foreign_buy_id(2);
// $rows = $tyre->get_buy_tyres();
// foreach ($rows as $row) {
// 	echo $row['tyre_id'];
// 	echo "</br>";
// }

//====================================================================================================

//GET SELL TYRE

// $tyre = new Tyres();
// $tyre->set_foreign_sell_id(2);
// $rows = $tyre->get_sell_tyres();
// foreach ($rows as $row) {
// 	echo $row['sold_tyre_id'];
// 	echo "</br>";
// }

//====================================================================================================

//SELL A TYRE

// $tyre = new Tyres();
// $tyre->set_foreign_sell_id(4);
// $tyre->set_foreign_tyre_id(16);
// $tyre->set_count(3);
// $tyre->set_sell_price(2000);
// $tyre->set_sell_date(date('Y-m-d',time()));
// $tyre->sell();

//=====================================================================================================

//GET TYRE BACK

// $tyre = new Tyres();
// $tyre->set_sold_tyre_id(9);
// $tyre->get_tyre_back(1);

//=====================================================================================================

//SEND TYRE BACK

// $tyre = new Tyres();
// $tyre->set_tyre_id(16);
// $tyre->send_tyre_back(2);

//======================================================================================================

//DELETE BUY TYRES

// $tyre = new Tyres();
// $tyre->set_foreign_buy_id();
// $tyre->delete_buy_tyres();

//====================================================================================================

//DELETE SELL TYRES

// $tyre = new Tyres();
// $tyre->set_foreign_sell_id(2);
// $tyre->delete_sell_tyres();