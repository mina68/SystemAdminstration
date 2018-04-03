<?php

include "../init.php";

if($_POST['request']=='add_rim')
{
	$rim = new Rims();
	$rim->set_size($_POST['size']);
	$rim->set_new_old($_POST['new_old']);
	$rim->set_type($_POST['type']);
	$rim->set_evaluative_price($_POST['evaluative_price']);
	$rim->set_buy_price($_POST['buy_price']);
	$rim->set_notes($_POST['notes']);
	$rim->set_total_count($_POST['total_count']);
	$rim->set_Status($_POST['status']);
	$rim->set_date_added($_POST['date_added']);
	$rim->set_foreign_buy_id($_POST['foreign_buy_id']);
	$rim->set_holes_number($_POST['holes_number']);

	$rim->add();
}

if($_POST['request']=='add_tyre')
{
	$tyre = new Tyres();
	$tyre->set_size($_POST['size']);
	$tyre->set_new_old($_POST['new_old']);
	$tyre->set_type($_POST['type']);
	$tyre->set_evaluative_price($_POST['evaluative_price']);
	$tyre->set_buy_price($_POST['buy_price']);
	$tyre->set_notes($_POST['notes']);
	$tyre->set_total_count($_POST['total_count']);
	$tyre->set_Status($_POST['status']);
	$tyre->set_date_added($_POST['date_added']);
	$tyre->set_foreign_buy_id($_POST['foreign_buy_id']);
	$tyre->set_brand($_POST['brand']);

	$tyre->add();
}

if($_POST['request']=='add_tube')
{
	$tube = new Tubes();
	$tube->set_size($_POST['size']);
	$tube->set_new_old($_POST['new_old']);
	$tube->set_evaluative_price($_POST['evaluative_price']);
	$tube->set_buy_price($_POST['buy_price']);
	$tube->set_notes($_POST['notes']);
	$tube->set_total_count($_POST['total_count']);
	$tube->set_Status($_POST['status']);
	$tube->set_date_added($_POST['date_added']);
	$tube->set_foreign_buy_id($_POST['foreign_buy_id']);
	$tube->set_brand($_POST['brand']);

	$tube->add();
}

if($_POST['request']=='add_ribbon')
{
	$ribbon = new Ribbons();
	$ribbon->set_size($_POST['size']);
	$ribbon->set_new_old($_POST['new_old']);
	$ribbon->set_evaluative_price($_POST['evaluative_price']);
	$ribbon->set_buy_price($_POST['buy_price']);
	$ribbon->set_notes($_POST['notes']);
	$ribbon->set_total_count($_POST['total_count']);
	$ribbon->set_Status($_POST['status']);
	$ribbon->set_date_added($_POST['date_added']);
	$ribbon->set_foreign_buy_id($_POST['foreign_buy_id']);

	$ribbon->add();
}