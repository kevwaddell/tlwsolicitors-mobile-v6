		<?php 
		$awards_section_active = get_field( 'awards_section_active', 'options' );	
		?>
		
		<?php if ($awards_section_active) { ?>
		<?php get_template_part( 'parts/sections/section', 'credits' ); ?>		
		<?php } ?>
		
		<div class="rule"></div>
		<!-- FOOTER START -->
		<section id="footer-info">
			
			<footer class="container-fluid">	
				
				<?php get_template_part( 'parts/footers/copyright', 'notice' ); ?>

			</footer>
			
		</section>
	
		</main>	
		
		<?php get_template_part( 'parts/footers/footer', 'nav' ); ?>
		
</div><!-- MAIN WRAPPER END -->
		
		<?php get_template_part( 'parts/global/popups/all', 'popups' ); ?>
		
		<?php get_template_part( 'parts/global/site', 'loader' ); ?>
				
		<?php wp_footer(); ?>

	</body>
</html>