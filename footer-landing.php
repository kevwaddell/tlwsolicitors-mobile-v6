	<?php 
	$awards_section_active = get_field( 'awards_section_active', 'options' );	
	?>
	
	<?php if ($awards_section_active) { ?>
	<?php get_template_part( 'parts/sections/section', 'credits' ); ?>		
	<?php } ?>
	
	<?php get_template_part( 'parts/footers/footer', 'landing-page' ); ?>
		
	</main>
	
	<?php get_template_part( 'parts/footers/footer', 'nav' ); ?>
	
		
</div><!-- MAIN WRAPPER END -->
		
<?php get_template_part( 'parts/global/popups/no', 'script' ); ?>
		
<?php wp_footer(); ?>
		
</body>
</html>