<?php

include "../init.php";

if($_POST['request'] == 'add_outgoings')
{
	$agenda = new Agenda();
	$agenda->set_date($_POST['date']);
	$agenda->set_outgoings($_POST['outgoings']);
	$agenda->set_comment($_POST['comment']);

	$agenda->add_outgoings();
}

if($_POST['request'] == 'get_day_events')
{
	$agenda = new Agenda();
	$agenda->set_date($_POST['date']);
	
	$row = $agenda->get_day_events();
	echo json_encode($row);
}

if($_POST['request'] == 'get_day_outgoings')
{
	$agenda = new Agenda();
	$agenda->set_date($_POST['date']);
	
	$rows = $agenda->get_day_outgoings();
	echo json_encode($rows);
}

if($_POST['request'] == 'get_day_sells')
{
	$agenda = new Agenda();
	$agenda->set_date($_POST['date']);
	
	$rows = $agenda->get_day_sells();
	echo json_encode($rows);
}

if($_POST['request'] == 'get_day_buys')
{
	$agenda = new Agenda();
	$agenda->set_date($_POST['date']);
	
	$rows = $agenda->get_day_buys();
	echo json_encode($rows);
}

if($_POST['request'] == 'get_period_events')
{
	$agenda = new Agenda();
	$agenda->set_min_date($_POST['min_date']);
	$agenda->set_max_date($_POST['max_date']);
	
	$row = $agenda->get_period_events();
	echo json_encode($row);
}

if($_POST['request'] == 'get_period_outgoings')
{
	$agenda = new Agenda();
	$agenda->set_min_date($_POST['min_date']);
	$agenda->set_max_date($_POST['max_date']);
	
	$rows = $agenda->get_period_outgoings();
	echo json_encode($rows);
}

if($_POST['request'] == 'get_period_sells')
{
	$agenda = new Agenda();
	$agenda->set_min_date($_POST['min_date']);
	$agenda->set_max_date($_POST['max_date']);
	
	$rows = $agenda->get_period_sells();
	echo json_encode($rows);
}

if($_POST['request'] == 'get_period_buys')
{
	$agenda = new Agenda();
	$agenda->set_min_date($_POST['min_date']);
	$agenda->set_max_date($_POST['max_date']);
	
	$rows = $agenda->get_period_buys();
	echo json_encode($rows);
}