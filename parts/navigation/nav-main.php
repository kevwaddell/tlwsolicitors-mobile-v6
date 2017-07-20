<?php 
$email = get_field( 'main_email', 'options' );
$contact_pg = get_page_id( 'contact-us' );
?>
<nav id="top-nav" class="nav-closed">
	
	<div class="nav-wrapper">
		
		<div class="container-fluid">
			
		<div class="top-nav-icon-links">
			<a href="<?php echo get_option('home'); ?>/"><i class="fa fa-home fa-2x"></i><span class="sr-only">Home</span></a>
			<a href="mailto:<?php echo $email; ?>?subject=Enquiry from the <?php bloginfo('name'); ?> website"><i class="fa fa-envelope fa-2x"></i><span class="sr-only">Email Us</span></a>
			<a href="<?php echo get_permalink($contact_pg); ?>#find-us"><i class="fa fa-map-marker fa-2x"></i><span class="sr-only">Find us</span></a>
			<button id="close-nav" class="btn"><i class="fa fa-times"></i><span class="sr-only">Close navigation</span></button>
		</div>
			
		<?php wp_nav_menu(array( 
		'container' => 'false', 
		'menu' => 'Hidden Navigation', 
		'menu_class'  => 'menu clearfix list-unstyled',
		'fallback_cb' => false ) ); 
		?>
			
		</div>
		
	</div>
</nav>