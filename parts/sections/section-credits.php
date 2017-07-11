<?php 
$credits = get_field( 'awards_and_credits', 'options');
$section_title = "Awards & Accreditations";

//echo '<pre>';print_r($credits);echo '</pre>';
?>

<div class="rule mag-top-30"></div>
<section id="credits-section" class="pg-section">
	<div class="container-fluid">
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
	
		<?php foreach ($credits as $credit) { 
		$logo_src = wp_get_attachment_image_src($credit['logo'], 'thumbnail' );	
		?>
		<a href="<?php echo $credit['website']; ?>" target="_blank" title="<?php echo $credit['company_name']; ?>">
			<span class="logo" style="background-image: url(<?php echo $logo_src[0]; ?>)"></span>
			<span class="description"><span><?php echo  $credit['description']; ?></span></span>	
		</a>
	<?php } ?>
	</div>
</section>