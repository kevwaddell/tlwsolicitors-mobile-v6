<?php 
$freephone_num = get_field('freephone_num', 'option');
$contact_pg = get_page_by_title( "Contact us");
$location = get_field('global_location', 'options');
$sitemap_pg = get_page_by_title( "Site map");
global $post;
//echo '<pre>';print_r($front_page);echo '</pre>';
?>
<!-- FOOTER START -->
<footer id="footer-nav">
	<nav class="links">
		<?php if (!empty($freephone_num)) { ?>
		<a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><i class="fa fa-phone"></i><span class="title">Call us</span></a>
		<?php } ?>
		<a href="<?php echo get_permalink( $contact_pg->ID ); ?>" title="Contact us"><i class="fa fa-envelope"></i><span class="title"><?php echo get_the_title( $contact_pg->ID ); ?></span></a>
		<?php if ($post->ID == $sitemap_pg->ID || is_search()) { ?>
		<a href="<?php echo get_option('home'); ?>/" title="Contact us"><i class="fa fa-home"></i><span class="title">Home</span></a>
		<?php } else { ?>
		<a href="#search" id="search-btn" title="Search"><i class="fa fa-search fa-lg"></i><span class="title">Search</span></a>
		<?php } ?>
	</nav>
</footer>