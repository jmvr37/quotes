<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	<header class="entry-content">
		<p><?php the_content();  ?> </p>
		
	</header><!-- .entry-content -->
	<div class="entry-header">
		<div class="entry-title"><?php the_title(); ?></div>
		
		
		<a href="<?php echo get_post_meta(get_the_ID(),'_qod_quote_source_url', true )?>">
		<span class="link-source"><?php echo get_post_meta(get_the_ID(),'_qod_quote_source', true )?></span></a>
</div><!-- .entry-header -->
</article><!-- #post-## -->
