
<!doctype html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Title Page</title>
    <style>
        header {
            background: url(image/cloud.jpg);
            background-size: cover;
            background-position: center;
            min-height: 700px;
        }

        @media screen and (max-width: 670px) {
            header {
                min-height: 500px;
            }
        }

        .section {
            padding-top: 4vw;
            padding-bottom: 4vw;
        }

    </style>
    <!-- view port width according to the size of the screen -->
</head>

<body>
<?php
include('header.php');
include('product.php');
include('parallex1.php');
include('contact.php');
include('parallex2.php');
include('booking.php');
include('footer.php');


?>

</body>
</html>