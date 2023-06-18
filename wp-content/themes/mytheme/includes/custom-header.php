    <header class="biz">
		
        <div class="container">
	<!-- Logo with Link -->
	<div class="logo-div"><a class="logo" href="<?php site_url(); ?>" >
		<?php if(has_custom_logo()){
			the_custom_logo();
		} else{

		} ?>
		<!--<img src="<?php bloginfo('template_directory');?>/images/logo-res.png" alt="Auckland Packers n Movers" />
-->
	</a></div>
	<div>
	<input class="menu-btn" type="checkbox" id="menu-btn">
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<?php 
	$defaults = array(
		'container' => false,
		'menu' => 'Main Nav'
	);
	wp_nav_menu( $defaults ); 
	?>	
    </div>
</div>
</header>