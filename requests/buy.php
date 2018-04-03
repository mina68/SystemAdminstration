<?php

include "../init.php";

if($_POST['request']=='make_buy')
{
	$buy = new Buy();
	$buy->set_seller_name($_POST['seller_name']);
	$buy->set_notes($_POST['notes']);
	$buy->set_total_paid($_POST['total_paid']);
	$buy->set_paid($_POST['paid']);
	$buy->set_buy_date($_POST['buy_date']);

	echo $buy->make_buy();
}

if($_POST['request']=='update_buy_data')
{
	$buy = new Buy();
	$buy->set_buy_id($_POST['buy_id']);
	$buy->set_seller_name($_POST['seller_name']);
	$buy->set_notes($_POST['notes']);
	$buy->set_total_paid($_POST['total_paid']);
	$buy->set_paid($_POST['paid']);
	$buy->set_buy_date($_POST['buy_date']);

	echo $buy->update_buy_data();
}

if($_POST['request']=='cancel_buy')
{
	$buy = new Buy();
	$buy->set_buy_id($_POST['buy_id']);
	echo $buy->cancel_buy();
}

if($_POST['request']=='get_buy_data')
{
	$buy = new Buy();
	$buy->set_buy_id($_POST['buy_id']);
	$row = $buy->get_buy_data();
	echo json_encode($row);
}

if($_POST['request']=='get_buy_rims')
{
	$rim = new Rims();
	$rim->set_foreign_buy_id($_POST['buy_id']);
	$rows = $rim->get_buy_rims();
	echo json_encode($rows);
}

if($_POST['request']=='get_buy_tyres')
{
	$tyre = new Tyres();
	$tyre->set_foreign_buy_id($_POST['buy_id']);
	$rows = $tyre->get_buy_tyres();
	echo json_encode($rows);
}

if($_POST['request']=='get_buy_tubes')
{
	$tube = new Tubes();
	$tube->set_foreign_buy_id($_POST['buy_id']);
	$rows = $tube->get_buy_tubes();
	echo json_encode($rows);
}

if($_POST['request']=='get_buy_ribbons')
{
	$ribbon = new Ribbons();
	$ribbon->set_foreign_buy_id($_POST['buy_id']);
	$rows = $ribbon->get_buy_ribbons();
	echo json_encode($rows);
}

if($_POST['request']=='get_next_id')
{
	$buy = new Buy();
	echo $buy->get_next_id_to_insert();
}

