<?php
echo "This is Order Page";
include('db.php');
include('header.php');
var_dump($_POST);
$bookingDuration=$_POST['duration'];
$bookingRide=$_POST['ride'];
echo $bookingDuration . " " . $bookingRide;

include('footer.php');