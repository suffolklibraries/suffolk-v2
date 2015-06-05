<div id="top" class="top-bar-container contain-to-grid">
    <div class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
            <li class="show-for-small-only text-center"><a href="#nav" class="button"><i class="fa fa-arrow-circle-down"></i> Skip to navigation</a></li>
        </section>
    </div>
</div>
