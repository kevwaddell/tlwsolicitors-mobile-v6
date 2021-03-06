<?php  
global $post;
$about_pg = get_page_by_title('About TLW Solicitors');
$about_pg_icon = get_field('page_icon', $about_pg->ID);
$team_pg = get_page_by_title('Our Team');
$team_pg_icon = get_field('page_icon', $team_pg->ID);
$feedback_pg = get_page_by_title('Why Choose TLW');
$feedback_pg_icon = get_field('page_icon', $feedback_pg->ID);
$videos_pg = get_page_by_title('Videos');
$videos_pg_icon = get_field('page_icon', $videos_pg->ID);
$downloads_pg = get_page_by_title('Downloads');
$downloads_pg_icon = get_field('page_icon', $downloads_pg->ID);	

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://api.feefo.com/api/10/reviews/summary/all?merchant_identifier=tlw-solicitors');
$result = curl_exec($ch);
curl_close($ch);
$feefo = json_decode($result);
$review_count = $feefo->meta->count;
$rating = $feefo->rating->rating;
$rating_max = $feefo->rating->max;
$stars = round($rating);
?>
<article <?php post_class("content-section"); ?>>	
	
	<div class="container-fluid">
		<div class="entry">
			
			<div class="main-txt home">
				<?php the_content(); ?>
			</div>	
												
		</div>
		<aside class="hp-sidebar">	
			<div class="feefo-panel">
				<i class="fa fa-star"></i>
				<h3>Feefo</h3>
				<div class="title caps text-center">Service Rating <strong><?php echo $rating; ?></strong> from <strong><?php echo $review_count; ?></strong> reviews</div>
				<div class="star-rating text-center">
					<?php for ($i = 1; $i <= $stars; $i++) { ?>
				    <span class="fa fa-star fa-2x"></span>
					<?php } ?>
				</div>
			</div>				
		</aside>	
	</div>
	
</article>