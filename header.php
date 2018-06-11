<?php
get_template_part( 'parts/headers/header', 'global' );
$body_classes = array('atfc-mobile-css','nav-closed');
$freephone_num = get_field('freephone_num', 'option');
?>	

<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<body <?php body_class($body_classes); ?> onload="_googWcmGet(callback, <?php echo str_replace(' ', '', $freephone_num); ?>)">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<!-- Trinity Mirror Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHL78WL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Trinity Mirror Google Tag Manager (noscript) -->
<script type="text/javascript">
(function(a,e,c,f,g,h,b,d){var k={ak:"966769174",cl:"RtWJCOeI51gQlvT-zAM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
</script>
<?php } else { ?>
<body <?php body_class($body_classes); ?>>
<?php } ?>
<a class="sr-only" href="#main-content">Skip to main content</a>	
<?php get_template_part( 'parts/navigation/nav', 'main' ); ?>		

<div class="tlw-wrapper">
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<?php get_template_part( 'parts/global/main', 'masthead' ); ?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">