<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-content">
		<?php the_content();  ?> 
		
	</header><!-- .entry-content -->
	<div class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span class="link-source"><a><?php echo get_post_meta(get_the_ID(),'_qod_quote_source', true )?></a></span>
		
</div><!-- .entry-header -->
</article><!-- #post-## -->