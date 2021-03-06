<?php get_header(); ?>

	<!-- Homepage Content -->

	<div id="homepage-content-wrapper">
		<div class="outercontainer">
			<div class="clear padding15"></div>	
			<div class="container">

				<?php 

					$storepagetemplateid = esc_attr(get_option('mpt_storepage_layout_code'));

					if (!empty($storepagetemplateid) && is_numeric($storepagetemplateid) && class_exists( 'MarketPress' )) { 

						echo do_shortcode('[template id="'.$storepagetemplateid.'"]'); 

					}  else {

						echo '<h2>No Template Inserted</h2>';
						echo '<p>To insert a template into this section, first you have to create a homepage template using the page builder function. Then, copy the template id and paste it at the theme options panel.</p>';
						echo '<div class="clear padding30"></div>';
					} 

				?>

			</div><!-- / container -->
		</div><!-- / outercontainer -->	
	</div><!-- / homepage-content-wrapper -->

	<!-- End Homapage Content -->

	<!-- Footer Widget -->

	<?php 
		$selected = get_option('mpt_enable_homepage_footer_widget');

		if ($selected) {
			get_template_part('footer', 'widget'); 
		}
		
	?>

	<!-- End Footer Widget -->

<?php get_footer(); ?>