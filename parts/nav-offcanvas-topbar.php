<!-- By default, this menu will use off-canvas for small and a topbar for medium-up -->
<div data-sticky-container>
<div class="top-bar" id="top-bar-menu" data-sticky data-options="marginTop:0;" style="width:100%">
   <div class="top-bar-right float-right hide-for-large">

     <ul class="menu">
    <!--<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>-->
        <li>
            <a data-toggle="off-canvas" class="menu-icon">

 </a>
        </li>
    </ul> 
</div>
    <div class="top-bar-left float-left">
        <a class="logo" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>
</div>
<div class="top-bar-right show-for-large">
    <?php joints_top_nav(); ?>
</div>

</div>
</div>
