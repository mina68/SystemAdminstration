<?php
session_start();

include "classes/Database.php";
include "classes/Tyres.php";
include "classes/Tubes.php";
include "classes/Rims.php";
include "classes/Ribbons.php";
include "classes/Buy.php";
include "classes/Sell.php";
include "classes/Dealer.php";
include "classes/Agenda.php";
include "classes/Notification.php";

if(!isset($_SESSION['name']))
	header('location:index.php');