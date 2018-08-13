<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
<head id="www-tlwsolicitors-co-uk" data-template-set="tlw-solicitors-theme">
<script type="text/javascript">
    var elm=document.getElementsByTagName("html")[0];
    elm.style.display="none";
</script>	
	<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PLBR4F');</script>
	<!-- End Google Tag Manager -->
	<?php } ?>
	<style id="critical-css"><?php readfile(get_stylesheet_directory() . '/_/css/criticalCSS.css'); ?></style>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta name="viewport" content="user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">
		   
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/_/img/apple-start-up-img.png" />
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
	<script>
		var loadDeferredStyles = function() {
			var addStylesNode = document.getElementById("deferred-styles");
			var gfStylesNode = document.getElementById("gf-deferred-styles");
			var replacement = document.createElement("div");
			var elm = document.getElementsByTagName("html")[0];
			replacement.innerHTML = gfStylesNode.textContent + addStylesNode.textContent;
			document.body.appendChild(replacement);
			gfStylesNode.parentElement.removeChild(gfStylesNode);
			addStylesNode.parentElement.removeChild(addStylesNode);
			elm.style.display = "block";
		};
	 
		var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	  if (raf) { 
		  raf(function() { 
		   window.setTimeout(loadDeferredStyles, 0); 
			});
	 	} else { 
		 	window.addEventListener('load', loadDeferredStyles); 
		 }
	</script>
</head>