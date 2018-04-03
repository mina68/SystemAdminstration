<?php

include "../init.php";

if($_POST['request']=="get_all_dealers")
{
	$dealer = new Dealer();
	$buyers = $dealer->get_all_buyers();
	$sellers = $dealer->get_all_sellers();
	$dealers = array();

	foreach ($buyers as $value) {
		foreach ($value as $key => $value_2) {
			$dealers[] = $value_2;
		}
	}
	foreach ($sellers as $value) {
		foreach ($value as $key => $value_2) {
			if(!in_array($value_2, $dealers))
				$dealers[] = $value_2;
		}
	}

	echo json_encode($dealers);
}

if($_POST['request']=="get_sellers_names")
{
	$dealer = new Dealer();
	$rows = $dealer->get_all_sellers();
	$sellers = array();
	foreach ($rows as $value) {
		foreach ($value as $key => $value_2) {
			$sellers[] = $value_2;
		}
	}

	echo json_encode($sellers);
}

if($_POST['request']=="get_buyers_names")
{
	$dealer = new Dealer();
	$rows = $dealer->get_all_buyers();
	$buyers = array();
	foreach ($rows as $value) {
		foreach ($value as $key => $value_2) {
			$buyers[] = $value_2;
		}
	}
	echo json_encode($buyers);
}

if($_POST['request']=="get_dealer_lifetime")
{
	$dealer = new Dealer();
	$dealer->set_dealer_name($_POST['name']);
	$row = $dealer->get_dealers_lifetime_total_paid_count();
	
	echo json_encode($row);
}

if($_POST['request']=="get_dealer_sells")
{
	$dealer = new Dealer();
	$dealer->set_dealer_name($_POST['name']);
	$rows = $dealer->get_dealer_sells();
	
	echo json_encode($rows);
}

if($_POST['request']=="get_dealer_buys")
{
	$dealer = new Dealer();
	$dealer->set_dealer_name($_POST['name']);
	$rows = $dealer->get_dealer_buys();
	
	echo json_encode($rows);
}

if($_POST['request']=="get_all_dealers_lifetime")
{
	$dealer = new Dealer();
	$rows = $dealer->get_dealers_lifetime_total_paid_count();
	
	echo json_encode($rows);
}
