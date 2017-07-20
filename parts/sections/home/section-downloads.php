<?php
global $section;
$downloads_active = $section['downloads_active'];
?>
<?php if ($downloads_active) { ?>
<?php 
$section_title = $section['section_title'];	
$download_files = $section['files'];	
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container-fluid">	
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		
		<?php foreach ($download_section_files as $k => $file) { 
		$img = wp_get_attachment_image_src($file['file_image'], 'medium' );	
		?>
		<a href="<?php echo $file['file_download']; ?>" class="download-link" target="_blank">
			<span class="bg-img"><span class="inner" style="background-image: url(<?php echo $img[0]; ?>)"></span></span>
			<span class="title"><span><?php echo $file['file_title']; ?></span></span>
		</a>
		<?php } ?>
		
	</div>
		
</section>
<?php } ?>