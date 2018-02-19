<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer class="footer_section">
	<div class="container">
		<div class="logo_footer">
			<div class="logo">
				<figure>
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/logo-theempathynetwork.png">
				</figure>
			</div>
			<div class="txt">
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
			           <div class="widget-column footer-widget-5">
				           <?php dynamic_sidebar( 'sidebar-5' ); ?>
			           </div>
		        <?php } ?>
			</div>
		</div>
		<div class="menu_footer">
			<div class="footer_menu">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			           <div class="widget-column footer-widget-1">
				           <?php dynamic_sidebar( 'sidebar-2' ); ?>
			           </div>
		        <?php } ?>
			</div>
			<div class="footer_menu2">
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			           <div class="widget-column footer-widget-2">
				           <?php dynamic_sidebar( 'sidebar-3' ); ?>
			           </div>
		        <?php } ?>
			</div>
			<div class="copyrights">
				<p><?php if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
			           <div class="widget-column footer-widget-6">
				           <?php dynamic_sidebar( 'sidebar-6' ); ?>
			           </div>
		        <?php } ?></p>
			</div>
		</div>
	</div>
</footer>
</div>
</main>
<?php wp_footer(); ?>
</body>
</html>
