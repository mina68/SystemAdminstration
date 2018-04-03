<?php

session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
	if($_POST['username'] == 'malak' && $_POST['password'] == 'malak')
	{
		$_SESSION['name'] = 'malak';
		echo ture;
	}
	else
		echo false;
}