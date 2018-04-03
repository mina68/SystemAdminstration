<?php

include "../init.php";

if($_POST['request']=="item_search")
{
	if($_POST['search_type']=='متاح' && $_POST['element_type']=='جنط')
	{
		$rim = new Rims();
		$rim->set_search_min_price($_POST['min_price']);
		$rim->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$rim->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$rim->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$rim->set_search_new_old($_POST['new_old']);
		if($_POST['rim_type']!="تجاهل")
			$rim->set_search_type($_POST['rim_type']);
		if(!empty($_POST['size']))
			$rim->set_search_size($_POST['size']);
		if(!empty($_POST['holes_number']))
			$rim->set_search_holes_number($_POST['holes_number']);
		if($_POST['status']!="تجاهل")
			$rim->set_Search_status($_POST['status']);
		if(!empty($_POST['buy_id']))
			$rim->set_foreign_buy_id($_POST['buy_id']);
		if($_POST['order_type']=="date")
			$rim->set_order_type('date_added');
		if($_POST['order_type']=="price")
			$rim->set_order_type('buy_price');
		if($_POST['order_type']=="status")
			$rim->set_order_type('status');
		if($_POST['order_type']=="size")
			$rim->set_order_type('size');

		$rows = $rim->get_available_rims_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='متاح' && $_POST['element_type']=='اطار')
	{
		$tyre = new Tyres();
		$tyre->set_search_min_price($_POST['min_price']);
		$tyre->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$tyre->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$tyre->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$tyre->set_search_new_old($_POST['new_old']);
		if($_POST['tyre_type']!="تجاهل")
			$tyre->set_search_type($_POST['tyre_type']);
		if(!empty($_POST['size']))
			$tyre->set_search_size($_POST['size']);
		if(!empty($_POST['brand']))
			$tyre->set_search_brand($_POST['brand']);
		if($_POST['status']!="تجاهل")
			$tyre->set_Search_status($_POST['status']);
		if(!empty($_POST['buy_id']))
			$tyre->set_foreign_buy_id($_POST['buy_id']);
		if($_POST['order_type']=="date")
			$tyre->set_order_type('date_added');
		if($_POST['order_type']=="price")
			$tyre->set_order_type('buy_price');
		if($_POST['order_type']=="status")
			$tyre->set_order_type('status');
		if($_POST['order_type']=="size")
			$tyre->set_order_type('size');

		$rows = $tyre->get_available_tyres_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='متاح' && $_POST['element_type']=='شنبر')
	{
		$tube = new Tubes();
		$tube->set_search_min_price($_POST['min_price']);
		$tube->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$tube->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$tube->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$tube->set_search_new_old($_POST['new_old']);
		if(!empty($_POST['size']))
			$tube->set_search_size($_POST['size']);
		if(!empty($_POST['brand']))
			$tube->set_search_brand($_POST['brand']);
		if($_POST['status']!="تجاهل")
			$tube->set_Search_status($_POST['status']);
		if(!empty($_POST['buy_id']))
			$tube->set_foreign_buy_id($_POST['buy_id']);
		if($_POST['order_type']=="date")
			$tube->set_order_type('date_added');
		if($_POST['order_type']=="price")
			$tube->set_order_type('buy_price');
		if($_POST['order_type']=="status")
			$tube->set_order_type('status');
		if($_POST['order_type']=="size")
			$tube->set_order_type('size');

		$rows = $tube->get_available_tubes_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='متاح' && $_POST['element_type']=='شريط')
	{
		$ribbon = new Ribbons();
		$ribbon->set_search_min_price($_POST['min_price']);
		$ribbon->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$ribbon->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$ribbon->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$ribbon->set_search_new_old($_POST['new_old']);
		if(!empty($_POST['size']))
			$ribbon->set_search_size($_POST['size']);
		if($_POST['status']!="تجاهل")
			$ribbon->set_Search_status($_POST['status']);
		if(!empty($_POST['buy_id']))
			$ribbon->set_foreign_buy_id($_POST['buy_id']);
		if($_POST['order_type']=="date")
			$ribbon->set_order_type('date_added');
		if($_POST['order_type']=="price")
			$ribbon->set_order_type('buy_price');
		if($_POST['order_type']=="status")
			$ribbon->set_order_type('status');
		if($_POST['order_type']=="size")
			$ribbon->set_order_type('size');

		$rows = $ribbon->get_available_ribbons_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='مباع' && $_POST['element_type']=='جنط')
	{
		$rim = new Rims();
		$rim->set_search_min_price($_POST['min_price']);
		$rim->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$rim->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$rim->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$rim->set_search_new_old($_POST['new_old']);
		if($_POST['rim_type']!="تجاهل")
			$rim->set_search_type($_POST['rim_type']);
		if(!empty($_POST['size']))
			$rim->set_search_size($_POST['size']);
		if(!empty($_POST['holes_number']))
			$rim->set_search_holes_number($_POST['holes_number']);
		if($_POST['status']!="تجاهل")
			$rim->set_Search_status($_POST['status']);
		if($_POST['order_type']=="date")
			$rim->set_order_type('sell_date');
		if($_POST['order_type']=="price")
			$rim->set_order_type('sell_price');
		if($_POST['order_type']=="status")
			$rim->set_order_type('status');
		if($_POST['order_type']=="size")
			$rim->set_order_type('size');

		$rows = $rim->get_sold_rims_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='مباع' && $_POST['element_type']=='اطار')
	{
		$tyre = new Tyres();
		$tyre->set_search_min_price($_POST['min_price']);
		$tyre->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$tyre->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$tyre->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$tyre->set_search_new_old($_POST['new_old']);
		if($_POST['tyre_type']!="تجاهل")
			$tyre->set_search_type($_POST['tyre_type']);
		if(!empty($_POST['size']))
			$tyre->set_search_size($_POST['size']);
		if(!empty($_POST['brand']))
			$tyre->set_search_brand($_POST['brand']);
		if($_POST['status']!="تجاهل")
			$tyre->set_Search_status($_POST['status']);
		if($_POST['order_type']=="date")
			$tyre->set_order_type('sell_date');
		if($_POST['order_type']=="price")
			$tyre->set_order_type('sell_price');
		if($_POST['order_type']=="status")
			$tyre->set_order_type('status');
		if($_POST['order_type']=="size")
			$tyre->set_order_type('size');

		$rows = $tyre->get_sold_tyres_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='مباع' && $_POST['element_type']=='شنبر')
	{
		$tube = new Tubes();
		$tube->set_search_min_price($_POST['min_price']);
		$tube->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$tube->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$tube->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$tube->set_search_new_old($_POST['new_old']);
		if(!empty($_POST['size']))
			$tube->set_search_size($_POST['size']);
		if(!empty($_POST['brand']))
			$tube->set_search_brand($_POST['brand']);
		if($_POST['status']!="تجاهل")
			$tube->set_Search_status($_POST['status']);
		if($_POST['order_type']=="date")
			$tube->set_order_type('sell_date');
		if($_POST['order_type']=="price")
			$tube->set_order_type('sell_price');
		if($_POST['order_type']=="status")
			$tube->set_order_type('status');
		if($_POST['order_type']=="size")
			$tube->set_order_type('size');

		$rows = $tube->get_sold_tubes_with_conditions();
		echo json_encode($rows);
	}

	else if($_POST['search_type']=='مباع' && $_POST['element_type']=='شريط')
	{
		$ribbon = new Ribbons();
		$ribbon->set_search_min_price($_POST['min_price']);
		$ribbon->set_search_max_price($_POST['max_price']);
		if(!empty($_POST['min_date']))
			$ribbon->set_search_min_date($_POST['min_date']);
		if(!empty($_POST['max_date']))
			$ribbon->set_search_max_date($_POST['max_date']);
		if($_POST['new_old']!="تجاهل")
			$ribbon->set_search_new_old($_POST['new_old']);
		if(!empty($_POST['size']))
			$ribbon->set_search_size($_POST['size']);
		if($_POST['status']!="تجاهل")
			$ribbon->set_Search_status($_POST['status']);
		if($_POST['order_type']=="date")
			$ribbon->set_order_type('sell_date');
		if($_POST['order_type']=="price")
			$ribbon->set_order_type('sell_price');
		if($_POST['order_type']=="status")
			$ribbon->set_order_type('status');
		if($_POST['order_type']=="size")
			$ribbon->set_order_type('size');

		$rows = $ribbon->get_sold_ribbons_with_conditions();
		echo json_encode($rows);
	}
}

if($_POST['request']=="buy_search")
{
	$buy = new Buy();
	if(isset($_POST['min_price']))
		$buy->set_search_min_total_paid($_POST['min_price']);
	if(isset($_POST['max_price']))
		$buy->set_search_max_total_paid($_POST['max_price']);
	if(isset($_POST['min_date']))
		$buy->set_search_min_buy_date($_POST['min_date']);
	if(isset($_POST['max_date']))
		$buy->set_search_max_buy_date($_POST['max_date']);
	if(isset($_POST['seller_name']))
		$buy->set_search_seller_name($_POST['seller_name']);
	if($_POST['order_type']=="date")
		$buy->set_order_type('buy_date');
	if($_POST['order_type']=="price")
		$buy->set_order_type('total_paid');
	if($_POST['order_type']=="seller_name")
		$buy->set_order_type('seller_name');

	$rows = $buy->search_buy();
	echo json_encode($rows);
}

if($_POST['request']=="sell_search")
{
	$sell = new Sell();
	if(isset($_POST['min_price']))
		$sell->set_search_min_total_paid($_POST['min_price']);
	if(isset($_POST['max_price']))
		$sell->set_search_max_total_paid($_POST['max_price']);
	if(isset($_POST['min_date']))
		$sell->set_search_min_sell_date($_POST['min_date']);
	if(isset($_POST['max_date']))
		$sell->set_search_max_sell_date($_POST['max_date']);
	if(isset($_POST['min_sell_feed']))
		$sell->set_search_min_sell_feed();
	if(isset($_POST['max_sell_feed']))
		$sell->set_search_max_sell_feed();
	if(isset($_POST['buyer_name']))
		$sell->set_search_buyer_name('saeed');
	if($_POST['order_type']=="date")
		$sell->set_order_type('buy_date');
	if($_POST['order_type']=="price")
		$sell->set_order_type('total_paid');
	if($_POST['order_type']=="seller_name")
		$sell->set_order_type('seller_name');

	$rows = $sell->search_sell();
		echo json_encode($rows);
}