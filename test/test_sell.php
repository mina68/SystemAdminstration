<?php
include "init.php";

// ADD SELL

// $sell = new Sell();
// $sell->set_buyer_name('شمعون');
// $sell->set_notes('كريم');
// $sell->set_total_paid(4000);
// $sell->set_paid(3500);
// $sell->set_sell_date('2013/3/3');
// $sell->set_sell_feed(400);

// echo $sell->make_sell();

//==================================================================================================

// CANCEL SELL

// $sell = new Sell();
// $sell->set_sell_id(11);
// $sell->cancel_sell();

//==================================================================================================

// SEARCH SELL

// $sell = new Sell();
// $sell->set_search_min_total_paid(10);
// $sell->set_search_max_total_paid(4000);
// $sell->set_search_min_sell_date('2011-2-2');
// $sell->set_search_max_sell_date('2018-2-2');
// $sell->set_search_min_sell_feed();
// $sell->set_search_max_sell_feed();
// $sell->set_search_buyer_name('saeed');
// $sell->set_search_sell_date('2018/1/1');

// $rows = $sell->search_sell();
// foreach ($rows as $row) {
// 	echo $row['sell_id'];
// 	echo "<br>";
// }

//========================================================================================

//EDIT SELL

// $sell = new Sell();
// $sell->set_buyer_name('شمعون');
// $sell->set_notes('كريم');
// $sell->set_total_paid(4000);
// $sell->set_paid(3900);
// $sell->set_sell_id(11);
// $sell->set_sell_feed(1000);

// echo $sell->edit_sell();

//================================================================================================

//GET SELL DATA

// $sell = new Sell();
// $sell->set_sell_id(4);
// $row = $sell->get_sell_data();

// foreach ($row as $key => $value) {
// 	echo $key . " => " . $value;
// 	echo "</br>";
// }