<?php

include('db.php');
include('header.php');

$bookingDuration=$_POST['duration'];
$bookingRide=$_POST['ride'];


$sql =$connection->prepare('SELECT * FROM product WHERE name="' . $bookingRide . '"');
$sql->execute();

$result =$sql->setFetchMode(PDO::FETCH_ASSOC);
$rideInfo =$sql->fetchAll();
$rideInfo = $rideInfo[0];

?>

<h1>We have received your order. </h1>

<p> You ordered: <?php echo $rideInfo['name']; ?> </p>
<p> Duration: <?php echo $bookingDuration; ?> minutes</p>
<p> Price: $<?php echo $rideInfo['price']; ?></p>
<p> Total: $<?php echo ($rideInfo['price']/15)*$bookingDuration;?></p>


<?php
include('footer.php');
?>