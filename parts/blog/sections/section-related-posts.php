<?php
$section_title = "Related articles";
$related_posts = get_field('related_posts_articles');
$related_posts_total = count($related_posts);

$cats_args = array(
	'hide_empty'               => 1,
	'hierarchical'             => 0
);
	
$cats = get_categories($cats_args);

$archives_args = array(
	'type'          => 'monthly',
	'limit'         => '12',
	'format'        => 'option',
	'echo'			=> 0
);
	
$archives = wp_get_archives($archives_args);
?>
<div class="rule"></div>
<section id="blog-posts" class="pg-section">
	<div class="container-fluid">
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		<div class="posts-grid">
			<?php foreach ($related_posts as $k => $rpost) { 
			$ID = $rpost['related_article'];
			$thumb_id = get_post_thumbnail_id($ID);
			$bg_src = wp_get_attachment_image_src($thumb_id, 'medium' );
			?>
			<a href="<?php echo get_permalink($ID); ?>" class="post-link block" title="<?php echo the_title_attribute( array('before' => 'View article: ', 'post'=> $ID)); ?>">
				<span class="link-bg-img" style="background-image: url(<?php echo $bg_src[0]; ?>)"></span>
				<span class="title"><span><?php echo get_the_title($ID); ?></span></span>
			</a>
			<?php } ?>
		</div>
	</div>
	<!-- DROPDOWN SECTION -->
	<?php get_template_part( 'parts/blog/archive', 'dropdowns' ); ?>
	
</section>