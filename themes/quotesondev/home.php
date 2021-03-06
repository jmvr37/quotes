<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>
		<?php
			$post = array(
			'orderby'=>'rand',
        	'posts_per_page' => 1);
				
    		$_post = new WP_Query( $post );
		?>
			<?php /* Start the Loop */ ?>
			<?php while ( $_post->have_posts() ) : $_post->the_post(); ?>
				
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; ?>
		

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<button class="quo" type="button" id="new-quote">Show Me Another!</button>
	</div><!-- #primary -->

<?php get_footer(); ?>
