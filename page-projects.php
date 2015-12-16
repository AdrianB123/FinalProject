<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package midterm
 */
get_header(); ?>
<?php  wp_enqueue_script("jquery") ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_title(); ?>
				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>


			<?php rewind_posts(); ?>

			<?php
				$args = array( 'post_type' => 'Adrian_Artwork', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				
				echo '<div class="ab-entry-content">';
				the_title();
				the_content();
				echo '</div>';
				endwhile;
			?>
            
            <ul>
<div class ="jlist">    
<h3 >Materials</h3>    
	<li>acorns</li>
	<li>acrylic paint and fine brushes</li>
	<li>white glue</li>
</ul>
                </div>

    
<h3 >Instructions</h3>
<ol>
	<li>Gather some acorns. Wash and dry them.</li>
	<li>The nuts are slippery little buggers, and much easier to paint when attached to the cup. If they do separate, you can add a little white glue to the inside to secure the nut. Paint using acrylics and some fine brushes. Whatever kids choose to paint will be great because anything in miniature looks adorable.</li>
</ol>
</div>

            
            
<script type="text/javascript">	

	jQuery('ul').click(function(){
		jQuery(this).hide();

	});
    
    jQuery('ul').click(function(){
		jQuery(this).hide();

	});
    
    jQuery('ol').click(function(){
		jQuery(this).hide();

	});
</script>        
            
            
            
            
            
            
			

		</main><!-- #main -->
	</div><!-- #primary -->

