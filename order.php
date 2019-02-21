<?php

include('db.php');

include('header.php');


$bookingDuration = $_POST['duration'];
$bookingRide = $_POST['ride'];

$sql = $connection->prepare('SELECT * FROM product WHERE name="' . $bookingRide . '"');
$sql->execute();

$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
$rideInfo = $sql->fetchAll();
$rideInfo = $rideInfo[0];

?>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <h1>We have received your order. </h1>

    <p> You ordered: <?php echo $rideInfo['name']; ?> </p>
    <p> Duration: <?php echo $bookingDuration; ?> minutes</p>
    <p> Price: $<?php echo $rideInfo['price']; ?></p>
    <p> Total: $<?php echo ($rideInfo['price'] / 15) * $bookingDuration; ?></p>

<?php
if (isset($_POST['firstName'])) {
    // 2nd post
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleName = $_POST['middleName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    try {
        $sql = "INSERT INTO customer (first_name, last_name, middle_name, phone, email)
          VALUES(?, ?, ?, ?, ?)";

        $statement = $connection->prepare($sql);
        $statement->execute([$firstName, $lastName, $middleName, $phone, $email ]);
        $customerId= $connection->lastInsertId();
    }
    catch(Exception $exception){
        echo $exception->getMessage();
    }
    try {
        $dateTime = sprintf('%s %s', $date, $time);

        $dateTimeObject = DateTime::createFromFormat('M d, Y h:i A',  $dateTime);
        $timeStamp = $dateTimeObject->getTimestamp();

        $sql = "INSERT INTO booking (booking_time,duration, start_time, product_id, customer_id)
          VALUES(now(),$bookingDuration, $timeStamp," . $rideInfo['product_id'] . ",$customerId )";
        $connection->exec($sql);
        echo "$firstName $lastName's order has been confirmed. We'll call you at $phone one hour before $time on $date.";
    }
    catch(Exception $exception){
        echo $exception->getMessage();
    }


} else {
?>
    <section class="section container">
        <div class="row">

            <div class="col s12 l5 offset-l2">
                <form action="order.php" target="_self" method="post">
                    <input type="hidden" name="duration" value="<?php echo $bookingDuration; ?>">
                    <input type="hidden" name="ride" value="<?php echo $bookingRide; ?>">
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
                        <input type="text" id="date" class="datepicker" name="date">
                        <label for="date">Pick a date for reservation.</label>
                    </div>

                    <div class ="input-field">
                        <input type="text" class="timepicker" name="time">
                        <label for="time">Pick a time for reservation.</label>
                    </div>

                    <div class="input-field center">
                        <button class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
}

?>



<?php
include('footer.php');
?>