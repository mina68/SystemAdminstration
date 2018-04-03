<?php

include "../init.php";

if($_POST['request'] == 'add_notification')
{
	$notification = new Notification();
	$notification->set_remember_date($_POST['remember_date']);
	$notification->set_body($_POST['body']);
	$notification->add();
}

if($_POST['request'] == 'set_seen')
{
	$notification = new Notification();
	$notification->set_seen();
}

if($_POST['request'] == 'get_unseen_notifications')
{
	$notification = new Notification();
	$results = $notification->get_unseen_notifications();
	echo json_encode($results);
}

if($_POST['request'] == 'get_seen_notifications')
{
	$notification = new Notification();
	$results = $notification->get_seen_notifications();
	echo json_encode($results);
}