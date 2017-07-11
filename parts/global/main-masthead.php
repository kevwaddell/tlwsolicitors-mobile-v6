<?php 
$freephone_num = get_field('freephone_num', 'option');	
?>
<header class="header" role="banner">	
	<div class="container-fluid">
		<a href="<?php echo get_option('home'); ?>/" class="logo text-hide"><?php bloginfo('name'); ?></a>
				
	
		<div class="header-action-btns text-right">
			<button id="nav-btn" class="btn btn-default in-active"><span class="sr-only">Menu</span><i class="fa fa-bars fa-lg"></i></button>
		</div>
	</div>
	<?php get_template_part( 'parts/global/color', 'strip' ); ?>	
			
</header>
