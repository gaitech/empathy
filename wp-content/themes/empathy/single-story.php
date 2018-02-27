<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-story', get_post_format() );

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<div class="Organization_scetion">
				<div class="container">
					<div class="Organization_about">
                        <p><?php if ( is_active_sidebar( 'sidebar-8' ) ) { ?>
                        	<div class="widget-column footer-widget-8">
                        		<?php dynamic_sidebar( 'sidebar-8' ); ?>
                        	</div>
                        	<?php } ?>
					    </p>
					</div>
				</div>
		</div>

<?php get_footer();
