<?php
/* 
Template Name: Archives
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<h1>Archives</h1>
       
            <?php $args = array(
                'posts_per_page'   => -1,
            );
            $posts_array = get_posts($args);
            ?>

            <div class="authors">
                <h2>Quote Authors</h2>
                <ul>
                    <?php foreach ($posts_array as $post): ?>
                   <li> <a href="<?php echo get_permalink($post->ID) ?>">
                        <?php echo ($post->post_title); ?></a></li>
                    <?php endforeach; ?>
        </ul>
            </div>


        <?php $cats = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => false,
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
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
