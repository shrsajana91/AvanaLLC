
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
<!-- background img as header -->
<header>
    <!-- Nav bar -->
    <nav class="nav-wraper green">
        <div class="container">
            <a href="#" class="brand-logo">Site Title</a>
            <a href="#" class="sidenav-trigger" data-target="menu-link">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#"> Home</a></li>
                <li><a href="#"> ZuRide </a></li>
                <li><a href="#"> Bunjee</a></li>
                <li><a href="#"> Login</a></li>
            </ul>
        </div>
    </nav>
    <!-- logic for menu for mobile -->
    <ul class="sidenav" id="menu-link">
        <li><a href="#"> Home</a></li>
        <li><a href="#"> ZuRide </a></li>
        <li><a href="#"> Bunjee</a></li>
        <li><a href="#"> Login</a></li>
    </ul>

</header>

<!-- Photo grid -->
<section class="container section" id="photos">
    <div class="row">
        <div class="col s12 l4">
            <img src="image/animal.png" alt="" class="responsive-img materialboxed"></img>
        </div>
        <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4"> ZuRide </h2>
            <p>Select to open. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. "</p>
        </div>
    </div>

    <div class="row">
        <div class="col s12 l4 "> <!-- offset for tab/ space after image-->
            <img src="image/bunjee.jpg" alt="" class="responsive-img materialboxed"></img>
        </div>
        <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4"> Bunjee </h2>
            <p>Select to open. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. "</p>
        </div>
    </div>
</section>


<!-- parallax -->
<div class="parallax-container">
    <div class="parallax">
        <img src="image/grass.jpg" alt="" class="responsive-img">
    </div>
</div>

<!-- content contact us-->
<section class="section container" id="contact">
    <div class="row">
        <div class="col s12 l5">
            <h2 class="indigo-text"> Contact Us</h2>

        </div>
        <div class="col s12 l5 offset-l2">
            <form action="">
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="Email" id="email">
                    <label for="email">Your Email</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea id="message" class="material-textarea"></textarea>
                    <label for="message">Your Message</label>
                </div>
                <div class="input-field">
                    <input type="text" id="date" class="datepicker"
                    <label for="date">Pick a date for reservation.</label>
                </div>
                <div class="input-field">
                    <p>Option..</p>
                    <p>
                        <label>
                            <input type="checkbox">
                            <span>ZuRide</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input type="checkbox">
                            <span>Bunjee</span>
                        </label>
                    </p>
                </div>
                <div class="input-field center">
                    <button class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>

</section>

<!-- parallax -->
<div class="parallax-container">
    <div class="parallax">
        <img src="image/grass.jpg" alt="" class="responsive-img">
    </div>
</div>

<!-- contact us -->


<div class="container">
    <div class="row">
        <div class="col s12">

            <h1> Zu Ride</h1>
        </div>
        <div class="col s12">
            <h3 class="green"> Select Time</h3>
        </div>
        <div class="col s6">
            <a href="#" class="btn-large waves-effect waves-light">
                <span> 15 Minutes </span>
                <i class="material-icons right">access_time</i>
            </a>
            <div class="col s6">
                <a href="#" class="btn-large wave-effect waves-light">
                    <span> 30 minutes </span>
                    <i class="material-icons right">access_time</i>
                </a>
            </div>
        </div>

        <div class="col s12">

            <h3 class="green"> Select Quantity </h3>
        </div>
        <div class="col s12">
            <a href="#" class="btn-floating blue pulse">
                <i class="material-icons"> add </i>
            </a>

            <a href="#" class="btn-floating red">
                <i class="material-icons">remove</i>
            </a>
        </div>
        <div class="col s12">

            <h3 class="green"> Total</h3>
        </div>


    </div>
</div>

<!-- footer -->
<footer class="page-footer grey">
    <div class="container">
        <div class="row">
            <div class="col s12 l6">
                <h5>About Me</h5>
                <p> sfdkjkdjslkjflskj sdkfjlks sdkjf sl</p>
            </div>
            <div class="col s12 l4 offset-l2">
                <h5>Connect</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- jquery Link -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.datepicker').datepicker({
            disableWeekends: true
        })
    });


</script>


</body>
</html>