<?php
global $section;
$posts_active = $section['posts_active'];
?>

<?php if ($posts_active) { ?>
<?php
$section_title = $section['section_title'];	

if (empty($section_title)) {
$section_title = "Recent blog articles";
}

$number_of_posts = $section['number_of_posts'];

if (empty($number_of_posts)) {
$number_of_posts = 3;	
}

$recent_posts_args = array (
'posts_per_page' => $number_of_posts,
);

$from_category_active = $section['from_category'];

if ($from_category_active) {
$blog_categories = $section['blog_categories'];	
$recent_posts_args['category__in'] = $blog_categories;

	if ( date("n") >= 4 ) {
	$recent_posts_args['year'] = date("Y");
	}
}

$recent_posts = get_posts($recent_posts_args);
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container-fluid">
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		<div class="posts-grid">
			<?php foreach ($recent_posts as $k => $rpost) { 
			$ID = $rpost->ID;
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
<?php } ?>