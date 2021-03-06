<?php
global $section;
$videos_active = $section['videos_active'];
$pg_temp = get_page_template_slug( get_the_ID());
?>
<?php if ($videos_active) { ?>

<?php 
$section_title = $section['section_title'];	
$videos = $section['videos'];
?>
<?php if ($pg_temp != 'page-templates/videos-page.php') { ?>
<div class="rule"></div>
<?php } ?>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container-fluid">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		<?php if ($pg_temp == 'page-templates/videos-page.php') { ?>
		<div class="lg-intro">
			<?php the_content(); ?>
		</div>
		<div class="rule"></div>
		<?php } ?>
		
		<?php foreach ($videos as $k => $video) { 
		$poster_full_src = wp_get_attachment_image_src($video['poster_img'], 'full' );
		$video_webm = $video['video_webm'];
		$video_mp4 = $video['video_mp4'];
		$video = $video['video'];
		?>
		<div id="video-<?php echo ($k+1); ?>" class="video-wrapper">
			<video controls preload="auto" id="service-video-<?php echo ($k+1); ?>" poster="<?php echo $poster_full_src[0];?>">
				<source src="<?php echo $video_webm; ?>" type="video/webm" />
				<source src="<?php echo $video_mp4; ?>" type="video/mp4" />
			</video>
		</div>
		<?php } ?>
		
	</div>

</section>
<?php } ?>