<?php

include "../init.php";

if($_POST['request']=="get_tyre_number_sold")
{
	$tyre = new Tyres();
	$tyre->set_tyre_id($_POST['id']);
	$result = $tyre->get_tyre_number_sold();
	echo json_encode($result);
}
if($_POST['request']=="get_rim_number_sold")
{
	$rim = new Rims();
	$rim->set_rim_id($_POST['id']);
	$result = $rim->get_rim_number_sold();
	echo json_encode($result);
}
if($_POST['request']=="get_tube_number_sold")
{
	$tube = new Tubes();
	$tube->set_tube_id($_POST['id']);
	$result = $tube->get_tube_number_sold();
	echo json_encode($result);
}
if($_POST['request']=="get_ribbon_number_sold")
{
	$ribbon = new Ribbons();
	$ribbon->set_ribbon_id($_POST['id']);
	$result = $ribbon->get_ribbon_number_sold();
	echo json_encode($result);
}

if($_POST['request']=="get_tyre_data")
{
	$tyre = new Tyres();
	$tyre->set_tyre_id($_POST['id']);
	$result = $tyre->get_tyre_data();
	echo json_encode($result);
}
if($_POST['request']=="get_rim_data")
{
	$rim = new Rims();
	$rim->set_rim_id($_POST['id']);
	$result = $rim->get_rim_data();
	echo json_encode($result);
}
if($_POST['request']=="get_tube_data")
{
	$tube = new Tubes();
	$tube->set_tube_id($_POST['id']);
	$result = $tube->get_tube_data();
	echo json_encode($result);
}
if($_POST['request']=="get_ribbon_data")
{
	$ribbon = new Ribbons();
	$ribbon->set_ribbon_id($_POST['id']);
	$result = $ribbon->get_ribbon_data();
	echo json_encode($result);
}