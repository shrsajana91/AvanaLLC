l
<!-- Booking Section for another page -->

<div class="container">
    <div class="row">
        <div class="col s12">

            <h1> Zu Ride</h1>
        </div>
        <div class="col s12">
            <h3 class="green"> Select Time</h3>
        </div>
        <div class="input-field col s12">
            <select >
                <option value="" disabled selected> Select Time</option>
                <option value="1"> 15 minutes</option>
                <option value="2">30 minutes</option>

            </select>
            <label>Select any</label>

        </div>


        <div class="col s12">

            <h3 class="green"> Select Rides </h3>
        </div>

        <div class="input-field col s12">
            <select class ="icons">
                <option value="" disabled selected> Select Ride</option>
                <?php  foreach($product as $item){ ?>
                <option value="" data-icon =<?php echo $item['picture']; ?>> <?php echo $item['name'];} ?></option>

            </select>
            <label>Select any</label>

        </div>


        <div class="col s12">

            <h3 class="green"> Total</h3>

        </div>


    </div>
</div>

<!-- jquery Link -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>


