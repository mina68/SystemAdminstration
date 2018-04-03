<?php

include "../init.php";

if($_POST['request'] == 'edit_rim')
{
	$rim = new Rims();
	$rim->set_rim_id($_POST['rim_id']);
	$rim->set_size($_POST['size']);
	$rim->set_new_old($_POST['new_old']);
	$rim->set_type($_POST['type']);
	$rim->set_evaluative_price($_POST['evaluative_price']);
	$rim->set_notes($_POST['notes']);
	$rim->set_Status($_POST['status']);
	$rim->set_holes_number($_POST['holes_number']);
	if(isset($_POST['buy_price']))
		$rim->set_buy_price($_POST['buy_price']);
	if(isset($_POST['total_count']))
		$rim->set_total_count($_POST['total_count']);
	if(isset($_POST['date_added']))
		$rim->set_date_added($_POST['date_added']);

	$rim->update();
}

if($_POST['request'] == 'edit_tyre')
{
	$tyre = new Tyres();
	$tyre->set_tyre_id($_POST['tyre_id']);
	$tyre->set_size($_POST['size']);
	$tyre->set_new_old($_POST['new_old']);
	$tyre->set_type($_POST['type']);
	$tyre->set_evaluative_price($_POST['evaluative_price']);
	$tyre->set_notes($_POST['notes']);
	$tyre->set_Status($_POST['status']);
	$tyre->set_brand($_POST['brand']);
	if(isset($_POST['buy_price']))
		$tyre->set_buy_price($_POST['buy_price']);
	if(isset($_POST['total_count']))
		$tyre->set_total_count($_POST['total_count']);
	if(isset($_POST['date_added']))
		$tyre->set_date_added($_POST['date_added']);

	$tyre->update();
}

if($_POST['request'] == 'edit_tube')
{
	$tube = new Tubes();
	$tube->set_tube_id($_POST['tube_id']);
	$tube->set_size($_POST['size']);
	$tube->set_new_old($_POST['new_old']);
	$tube->set_evaluative_price($_POST['evaluative_price']);
	$tube->set_notes($_POST['notes']);
	$tube->set_Status($_POST['status']);
	$tube->set_brand($_POST['brand']);
	if(isset($_POST['buy_price']))
		$tube->set_buy_price($_POST['buy_price']);
	if(isset($_POST['total_count']))
		$tube->set_total_count($_POST['total_count']);
	if(isset($_POST['date_added']))
		$tube->set_date_added($_POST['date_added']);

	$tube->update();
}

if($_POST['request'] == 'edit_ribbon')
{
	$ribbon = new Ribbons();
	$ribbon->set_ribbon_id($_POST['ribbon_id']);
	$ribbon->set_size($_POST['size']);
	$ribbon->set_new_old($_POST['new_old']);
	$ribbon->set_evaluative_price($_POST['evaluative_price']);
	$ribbon->set_notes($_POST['notes']);
	$ribbon->set_Status($_POST['status']);
	if(isset($_POST['buy_price']))
		$ribbon->set_buy_price($_POST['buy_price']);
	if(isset($_POST['total_count']))
		$ribbon->set_total_count($_POST['total_count']);
	if(isset($_POST['date_added']))
		$ribbon->set_date_added($_POST['date_added']);

	$ribbon->update();
}