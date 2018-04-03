<?php
include "init.php";

// ADD BUY

// $buy = new Buy();
// $buy->set_seller_name('شمعون');
// $buy->set_notes('كريم');
// $buy->set_total_paid(4000);
// $buy->set_paid(3500);
// $buy->set_buy_date('2013/3/3');

// echo $buy->make_buy();

//==================================================================================================

// CANCEL BUY

// $buy = new Buy();
// $buy->set_buy_id(3);
// $buy->cancel_buy();

//==================================================================================================

// SEARCH BUY

// $buy = new Buy();
// $buy->set_search_min_total_paid(10);
// $buy->set_search_max_total_paid(4000);
// $buy->set_search_min_buy_date('2011-2-2');
// $buy->set_search_max_buy_date('2018-2-2');
// $buy->set_search_seller_name('كريم');
// $buy->set_search_buy_date('2013/3/3');

// $rows = $buy->search_buy();
// foreach ($rows as $row) {
// 	echo $row['buy_id'];
// 	echo "<br>";
// }

//========================================================================================

//EDIT BUY

// $buy = new Buy();
// $buy->set_seller_name('شمعون');
// $buy->set_notes('كريم');
// $buy->set_total_paid(4000);
// $buy->set_paid(3500);
// $buy->set_buy_date('2013/3/3');
// $buy->set_buy_id(4);

// echo $buy->edit_buy();

//================================================================================================

//GET BUY DATA

// $buy = new Buy();
// $buy->set_buy_id(4);
// $row = $buy->get_buy_data();

// foreach ($row as $key => $value) {
// 	echo $key . " => " . $value;
// 	echo "</br>";
// }