<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<div class="entry-content">
			
        
        <?php while (have_posts()): the_post(); ?>
        <?php endwhile; ?>
        <?php if (is_user_logged_in() && current_user_can('edit_posts')): ?>
       
        <div id="submit">
		<form id="form">
        
           <div class="title-form"> <label>Author of Quote</label></div>
           <div class="text-form"><input type="text" name="Author" id="author" /></div>
           <div class="title-form"> <label>Quote</label></div> 
           <div class="quote-form"><textarea rows="7" cols="10" id="quote"></textarea></div>
           <div class="title-form"><label>Where did you find this quote? (e.g. book name)</label> </div>
           <div class="source-form"><input type="text" name="Source" id="source" /></div>
           <div class="title-form"><label>Provide the URL of the quote source, if availiable</label></div> 
           <div class="url-form"><input type="url" name="url" id="url" /></div>
           <div class="submit-button"><input type="submit" value="Submit Quote" id="submit-quote"></div>
		</form>
    </div>
        <?php else: ?>
            <p>Sorry, you must be logged in to submit a quote!</p>
            <a href="<?php echo wp_login_url() ?>">Click here to login.</a>
        <?php endif; ?>
		</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>