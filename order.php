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
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<h1>We have received your order. </h1>

<p> You ordered: <?php echo $rideInfo['name']; ?> </p>
<p> Duration: <?php echo $bookingDuration; ?> minutes</p>
<p> Price: $<?php echo $rideInfo['price']; ?></p>
<p> Total: $<?php echo ($rideInfo['price']/15)*$bookingDuration;?></p>

    <section class="section container" id="contact">
        <div class="row">

    <div class="col s12 l5 offset-l2">
        <form action="order.php" target="_self" method="get">

                <div class="input-field">
                    <input type="text" name="firstName" value="">
                    <label for="firstName">First Name</label>
                </div>

            <div class="input-field">
                <input type="text" name="middleName" value="">
                <label for="middleName">Middle Name</label>
            </div>
            <div class="input-field">
                <input type="text" name="lastName" value="">
                <label for="lastName">Last Name</label>
            </div>
            <div class="input-field">
                <input type="tel" name="phone" value="">
                <label for="phone">Your Phone Number</label>
            </div>
            <div class="input-field">
                <input type="email" name="email" value="">
                <label for="email">Your Email</label>
            </div>

            <div class="input-field">
                <input type="text" id="date" class="datepicker"
                <label for="date">Pick a date for reservation.</label>
            </div>

            <div class="input-field center">
                <button class="btn">Submit</button>
            </div>
        </form>
    </div>
        </div>
    </section>


<?php
include('footer.php');
?>