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
				<ul>
						<li>
					<a href="<?php echo esc_url( 'http://localhost:3000/quotes/quotes-on-dev/' ); ?>"> About</a>
						</li>
					<li>
					<a href="<?php echo esc_url( 'http://localhost:3000/quotes/archive/' ); ?>"> Archives</a>
					</li>
					<li>
					<a href="<?php echo esc_url( 'http://localhost:3000/quotes/submit/' ); ?>"> Submit a Quote</a>
					</li>
					</ul>
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
