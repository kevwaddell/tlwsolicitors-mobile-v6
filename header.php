<?php
get_template_part( 'parts/headers/header', 'global' );
$body_classes = array('atfc-mobile-css','nav-closed', 'loading');
$freephone_num = get_field('freephone_num', 'option');
?>	

<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<body <?php body_class($body_classes); ?> onload="_googWcmGet(callback, <?php echo str_replace(' ', '', $freephone_num); ?>)">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php } else { ?>
<body <?php body_class($body_classes); ?> onload="_googWcmGet(callback, '1-800-123-4567')">
<?php } ?>
<a class="sr-only" href="#main-content">Skip to main content</a>	
<?php get_template_part( 'parts/navigation/nav', 'main' ); ?>		

<div class="tlw-wrapper">
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<?php get_template_part( 'parts/global/main', 'masthead' ); ?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">