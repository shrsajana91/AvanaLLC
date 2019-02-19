<!-- Photo grid product section -->
<section class="container section" id="zuride">
    <?php
    foreach($content as $item){?>
    <div class="row">

        <div class="col s12 l4">
            <img src="<?php echo $item['picture'];?>" alt="" class="responsive-img materialboxed"></img>
        </div>
        <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4"> <?php echo $item['title'];?></h2>
            <p><?php echo $item['wording'];?></p>
        </div>
    </div>
    <?php } ?>
</section>


