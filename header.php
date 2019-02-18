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
                <?php foreach($menu as $item) { ?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <!-- logic for menu for mobile -->
    <ul class="sidenav" id="menu-link">
        <?php foreach($menu as $item) { ?>
        <li><a href="#"><?php echo $item['name']; ?></a></li>
        <?php } ?>
    </ul>

</header>


