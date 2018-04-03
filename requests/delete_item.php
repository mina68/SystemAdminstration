<?php

include "../init.php";

if($_POST['request'] == 'delete_rim')
{
	$rim = new Rims();
	$rim->set_rim_id($_POST['rim_id']);
	$rim->delete();
}
else if($_POST['request'] == 'delete_tyre')
{
	$tyre = new Tyres();
	$tyre->set_tyre_id($_POST['tyre_id']);
	$tyre->delete();
}
else if($_POST['request'] == 'delete_tube')
{
	$tube = new Tubes();
	$tube->set_tube_id($_POST['tube_id']);
	$tube->delete();
}
else if($_POST['request'] == 'delete_ribbon')
{
	$ribbon = new Ribbons();
	$ribbon->set_ribbon_id($_POST['ribbon_id']);
	$ribbon->delete();
}