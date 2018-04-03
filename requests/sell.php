<?php

include "../init.php";

if($_POST['request']=='make_sell')
{
	$sell = new Sell();
	$sell->set_buyer_name($_POST['buyer_name']);
	$sell->set_notes($_POST['notes']);
	$sell->set_total_paid($_POST['total_paid']);
	$sell->set_paid($_POST['paid']);
	$sell->set_sell_date($_POST['sell_date']);
	$sell->set_sell_feed($_POST['sell_feed']);

	echo $sell->make_sell();
}

if($_POST['request']=='make_sell_with_id')
{
	$sell = new Sell();
	$sell->set_sell_id($_POST['sell_id']);
	$sell->set_buyer_name($_POST['buyer_name']);
	$sell->set_notes($_POST['notes']);
	$sell->set_total_paid($_POST['total_paid']);
	$sell->set_paid($_POST['paid']);
	$sell->set_sell_date($_POST['sell_date']);
	$sell->set_sell_feed($_POST['sell_feed']);

	echo $sell->make_sell_with_id();
}

if($_POST['request']=='cancel_sell')
{
	$sell = new Sell();
	$sell->set_sell_id($_POST['sell_id']);
	$sell->cancel_sell();
}

if($_POST['request']=='get_sell_data')
{
	$sell = new Sell();
	$sell->set_sell_id($_POST['sell_id']);
	$row = $sell->get_sell_data();
	echo json_encode($row);
}

if($_POST['request']=='get_sell_rims')
{
	$rim = new Rims();
	$rim->set_foreign_sell_id($_POST['sell_id']);
	$rows = $rim->get_sell_rims();
	echo json_encode($rows);
}

if($_POST['request']=='get_sell_tyres')
{
	$tyre = new Tyres();
	$tyre->set_foreign_sell_id($_POST['sell_id']);
	$rows = $tyre->get_sell_tyres();
	echo json_encode($rows);
}

if($_POST['request']=='get_sell_tubes')
{
	$tube = new Tubes();
	$tube->set_foreign_sell_id($_POST['sell_id']);
	$rows = $tube->get_sell_tubes();
	echo json_encode($rows);
}

if($_POST['request']=='get_sell_ribbons')
{
	$ribbon = new Ribbons();
	$ribbon->set_foreign_sell_id($_POST['sell_id']);
	$rows = $ribbon->get_sell_ribbons();
	echo json_encode($rows);
}

if($_POST['request']=='delete_sell_rims')
{
	$rim = new Rims();
	$rim->set_foreign_sell_id($_POST['sell_id']);
	$rim->delete_sell_rims();
}

if($_POST['request']=='delete_sell_tyres')
{
	$tyre = new Tyres();
	$tyre->set_foreign_sell_id($_POST['sell_id']);
	$tyre->delete_sell_tyres();
}

if($_POST['request']=='delete_sell_tubes')
{
	$tube = new Tubes();
	$tube->set_foreign_sell_id($_POST['sell_id']);
	$tube->delete_sell_tubes();
}

if($_POST['request']=='delete_sell_rims')
{
	$ribbon = new Ribbons();
	$ribbon->set_foreign_sell_id($_POST['sell_id']);
	$ribbon->delete_sell_ribbons();
}