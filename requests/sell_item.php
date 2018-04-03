<?php

include "../init.php";

if($_POST['request']=='sell_rim')
{
	$rim = new Rims();
	$rim->set_foreign_sell_id($_POST['foreign_sell_id']);
	$rim->set_foreign_rim_id($_POST['foreign_rim_id']);
	$rim->set_count($_POST['count']);
	$rim->set_sell_price($_POST['sell_price']);
	$rim->set_sell_date($_POST['date']);
	$rim->sell();
}
if($_POST['request']=='sell_tyre')
{
	$tyre = new Tyres();
	$tyre->set_foreign_sell_id($_POST['foreign_sell_id']);
	$tyre->set_foreign_tyre_id($_POST['foreign_tyre_id']);
	$tyre->set_count($_POST['count']);
	$tyre->set_sell_price($_POST['sell_price']);
	$tyre->set_sell_date($_POST['date']);
	$tyre->sell();
}
if($_POST['request']=='sell_tube')
{
	$tube = new Tubes();
	$tube->set_foreign_sell_id($_POST['foreign_sell_id']);
	$tube->set_foreign_tube_id($_POST['foreign_tube_id']);
	$tube->set_count($_POST['count']);
	$tube->set_sell_price($_POST['sell_price']);
	$tube->set_sell_date($_POST['date']);
	$tube->sell();
}
if($_POST['request']=='sell_ribbon')
{
	$ribbon = new Ribbons();
	$ribbon->set_foreign_sell_id($_POST['foreign_sell_id']);
	$ribbon->set_foreign_ribbon_id($_POST['foreign_ribbon_id']);
	$ribbon->set_count($_POST['count']);
	$ribbon->set_sell_price($_POST['sell_price']);
	$ribbon->set_sell_date($_POST['date']);
	$ribbon->sell();
}