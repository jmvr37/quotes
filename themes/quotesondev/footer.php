<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
		
				<div class="footer-nav">	
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				<p>Brought to you by
					<a href="<?php echo esc_url( 'https://redacademy.com/vancouver/' ); ?>"> RED Academy</a>
					</p>
				</div><!-- .site-info -->
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
