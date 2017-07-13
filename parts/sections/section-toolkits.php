<?php
$args = array(
	'child_of' => 0,
	'parent' => $post->ID
); 
$pages = get_pages($args); 

//echo '<pre>';print_r($pages);echo '</pre>'; 
?>
<?php if (!empty($pages)) { ?>
<section id="toolkit-section" class="pg-section">
	<div class="container-fluid">
		<h2 class="section-header"><?php the_title(); ?></h2>
		<div class="lg-intro">
			<?php the_content(); ?>
		</div>
		<div class="rule"></div>
		<?php foreach ($pages as $pg) { 
		$page = get_page($link['page']);
		$tk_page = get_page_by_path($page->post_name."/toolkit");
		
		$pg_col = get_field('page_colour', $pg->ID);
		$pg_icon = get_field('page_icon', $pg->ID);
		$post_thumbnail_id = get_post_thumbnail_id( $pg->ID );
		$bg_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
		$feat_img_thumb = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
		?>
			<a href="<?php echo get_permalink($pg->ID); ?>" class="toolkit-link">
				<span class="bg-img" style="background-image: url(<?php echo $bg_src[0]; ?>)"></span>
				<span class="title"><span><?php echo get_the_title($pg->ID); ?></span></span>
			</a>
		<?php } ?>
	</div>
</section>
<?php } ?>