<?php
include "init.php";

// ADD TUBE

// $tube = new Tubes();
// $tube->set_size('20');
// $tube->set_brand('نسر');
// $tube->set_new_old('جديد');
// $tube->set_evaluative_price(100);
// $tube->set_buy_price(70);
// $tube->set_notes('حلوة');
// $tube->set_total_count(4);
// $tube->set_Status(1);
// $tube->set_date_added('2013/3/3');
// $tube->set_foreign_buy_id(3);

// $tube->add();

//==================================================================================================

// SEARCH AVAILABLE TUBE

// $tube = new Tubes();
// $tube->set_search_min_price(10);
// $tube->set_search_max_price(2000);
// $tube->set_search_min_date('2011-2-2');
// $tube->set_search_max_date('2017-2-2');
// $tube->set_search_new_old('جديد');
// $tube->set_search_brand('نسر');
// $tube->set_search_size('20');
// $tube->set_Search_status(1);
// $tube->set_order_type('status');

// $rows = $tube->get_available_tubes_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['tube_id'];
// 	echo "<br>";
// }

//========================================================================================

//SEARCH SOLD TUBES

// $tube = new Tubes();
// $tube->set_search_min_price(100);
// $tube->set_search_max_price(2000);
// $tube->set_search_min_date('2011-2-2');
// $tube->set_search_max_date('2018-2-2');
// $tube->set_search_new_old('جديد');
// $tube->set_search_brand('نسر');
// $tube->set_search_size('20');
// $tube->set_Search_status(1);
// $tube->set_order_type('status');

// $rows = $tube->get_sold_tubes_with_conditions();
// foreach ($rows as $row) {
// 	echo $row['tube_id'];
// 	echo "<br>";
// }

//============================================================================================

//UPDATE TUBE

// $tube = new Tubes();
// $tube->set_size('24');
// $tube->set_brand('نسر');
// $tube->set_new_old('جديد');
// $tube->set_evaluative_price(100);
// $tube->set_buy_price(600);
// $tube->set_notes('عجلة حلوة');
// $tube->set_Status(1);
// $tube->set_date_added('2013/3/4');
// $tube->set_tube_id(1);
// $tube->set_total_count(5);

// $tube->update();

//================================================================================================

//DELETE TUBE

// $tube = new Tubes();
// $tube->set_tube_id(4);
// $tube->delete();

//==================================================================================================

//GET BUY TUBE

// $tube = new Tubes();
// $tube->set_foreign_buy_id(3);
// $rows = $tube->get_buy_tubes();
// foreach ($rows as $row) {
// 	echo $row['tube_id'];
// 	echo "</br>";
// }

//====================================================================================================

//GET SELL TUBE

// $tube = new Tubes();
// $tube->set_foreign_sell_id(2);
// $rows = $tube->get_sell_tubes();
// foreach ($rows as $row) {
// 	echo $row['sold_tube_id'];
// 	echo "</br>";
// }

//====================================================================================================

//SELL A TUBE

// $tube = new Tubes();
// $tube->set_foreign_sell_id(2);
// $tube->set_foreign_tube_id(1);
// $tube->set_count(3);
// $tube->set_sell_price(100);
// $tube->set_sell_date(date('Y-m-d',time()));
// $tube->sell();

//=====================================================================================================

//GET TUBE BACK

// $tube = new Tubes();
// $tube->set_sold_tube_id(1);
// $tube->get_tube_back(2);

//=====================================================================================================

//SEND TUBE BACK

// $tube = new Tubes();
// $tube->set_tube_id(1);
// $tube->send_tube_back(2);

//======================================================================================================

//DELETE BUY TUBES

// $tube = new Tubes();
// $tube->set_foreign_buy_id(3);
// $tube->delete_buy_tubes();

//====================================================================================================

//DELETE SELL TUBES

// $tube = new Tubes();
// $tube->set_foreign_sell_id(2);
// $tube->delete_sell_tubes();