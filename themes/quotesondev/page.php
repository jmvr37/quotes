<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<a href="http://localhost:3000/quotes/" rel="logo">
		<div class="logo"><img src="<?php echo get_stylesheet_directory_uri();?>/images/qod-logo.svg" alt="quotes logo"></div>
		</a>
			<!-- <?php while ( have_posts() ) : the_post(); ?> -->

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<!-- <?php endwhile; // End of the loop. ?> -->
			<div class="entry-content">
			<p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It’s used to experiment with Ajax, WP API, jQuery, and other cool things. 🙂</p>
			<p>This site is heavily inspired by Chris Coyier’s <a href="https://quotesondesign.com/">Quotes on Design</a>.</p>
		</div>
			<button type="button" id="close-comments">Close Comments</button>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
