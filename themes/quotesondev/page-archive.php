<?php
/* 
Template Name: Archives
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="logo"><img src="<?php echo get_stylesheet_directory_uri();?>/images/qod-logo.svg" alt="quotes logo"></div>

        <?php $cats = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        'posts_per_page' => 5,
        ) );?>
       <?php if ( ! empty( $cats ) ) : ?>
        
       <div class='cats'>
           <h2> Categories </h2>
       <ul>
        <?php
        foreach ( $cats as $taxonomy ) {
         //   echo print_r( $taxonomy );

         echo '<li><a href="'.get_term_link($taxonomy->slug, 'category').'">'.$taxonomy->name.'</a></li>';

            // echo '<li>' . $taxonomy->name . '</li>'; /* wrap this whit an a tag with the link use another wp function */
        }
        ?>
    </ul>
    </div>
<?php endif; ?>
       
       
       
       
       <?php $terms = get_terms( array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
        'posts_per_page' => 5,
        ) );?>
       <?php if ( ! empty( $terms ) ) : ?>
       <div class='taxo'>
           <h2>Tags</h2>
       <ul>
        <?php
        foreach ( $terms as $taxonomy ) {
         //   echo print_r( $taxonomy );

         echo '<li><a href="'.get_term_link($taxonomy->slug, 'post_tag').'">'.$taxonomy->name.'</a></li>';

            // echo '<li>' . $taxonomy->name . '</li>'; /* wrap this whit an a tag with the link use another wp function */
        }
        ?>
    </ul>
    </div>
    <?php endif; ?>

			
		</div>
			<button type="button" id="close-comments">Close Comments</button>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
