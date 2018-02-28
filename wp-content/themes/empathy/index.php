<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="body_content">
	<div class="container">
		<section class="banner_section">
			<div class="container">
				<?php $query = new WP_Query( array( 'post_type' => 'home_slider', 'order'=>'DESC', 'posts_per_page'=>-1, 'paged' => $paged ) );

				foreach ($query->posts as $key => $value) {
					$name = $value->post_title;
					$id = $value->ID;
					$content = $value->post_content;
					$url = get_post_permalink( $id);
					$image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
					$custom_cont = get_post_meta($id, '', TRUE);
					$image_one = wp_get_attachment_url($custom_cont['image_one'][0]);
					$image_two = wp_get_attachment_url($custom_cont['image_two'][0]);
					$image_three = wp_get_attachment_url($custom_cont['image_three'][0]);		

				}	
               // echo '<pre>';
               // print_r($image_one);
               // print_r($image_two);
               // print_r($image_three);

				?>

				<div class="mySlides fade">
					<img class="hello" src="<?php echo $image_one; ?>" style="width:100%">
					<!-- <div class="text">
						<h1><?php echo $name; ?></h1>
						<p><?php echo $content; ?></p>
					</div> -->
				</div>
				<div class="mySlides fade">
					<img class="hello" src="<?php echo $image_two; ?>" style="width:100%">
					<!-- <div class="text">
						<h1><?php echo $name; ?></h1>
						<p><?php echo $content; ?></p>
					</div> -->
				</div>
				<div class="mySlides fade">
					<img class="hello" src="<?php echo $image_two; ?>" style="width:100%">
					<!-- <div class="text">
						<h1><?php echo $name; ?></h1>
						<p><?php echo $content; ?></p>
					</div> -->
				</div>
			</div>
			<br>
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</section>
		<section class="countries_real__stories">
			<?php $query = new WP_Query( array( 'post_type' => 'story', 'order'=>'DESC', 'posts_per_page'=>3, 'paged' => 0 ) );

			foreach ($query->posts as $key => $value) {
				$name = $value->post_title;
				$id = $value->ID;
				$content = $value->post_content;
				$url = get_post_permalink( $id);
				$image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
				$custom_cont = get_post_meta($id, '', TRUE);
				$field_of_work = $custom_cont['field_of_work'][0];
				$detail_page_image = $custom_cont['detail_page_image_ideal_min_dimensions_2118x1050'][0];
				$country = $custom_cont['country'][0];
				$website_one = $custom_cont['website_one'][0];
				$website_two = $custom_cont['website_two'][0];
				$website_three = $custom_cont['website_three'][0];
				$organization_name = $custom_cont['organization_name'][0];
				$empathetic_leadership = $custom_cont['empathetic_leadership'][0];
				$purpose_of_orgnization = $custom_cont['purpose_of_orgnization'][0];
				$video_section_one = $custom_cont['video_section_one'][0];
				$video_section_two = $custom_cont['video_section_two'][0];
				$video_section_three = $custom_cont['video_section_three'][0];
				$reference_article_title_one = $custom_cont['reference_article_title_one'][0];
				$reference_article_body_one = $custom_cont['reference_article_body_one'][0];
				$reference_article_title_two = $custom_cont['reference_article_title_two'][0];
				$reference_article_body_two = $custom_cont['reference_article_body_two'][0];
				$contributor_name = $custom_cont['contributor_name'][0];
				$contributor_description = $custom_cont['contributor_description'][0];
				$soundcloud_url = $custom_cont['soundcloud_url'][0];
				?>
				<div class="real_stories">
					<figure>
						<img src="<?php echo $image ?>">
					</figure>
					<h1><?php echo $name; ?></h1>
					<p><a href="#"><?php echo $field_of_work; ?></a></p>
					<!-- <p>JANUARY 2.2018</p> -->
					<p class="content"><?php $des = substr($content, 0 , 250); echo $des; ?></p>
					<div class="read_more">
						<a href="<?php echo esc_url( get_permalink( $id ) ); ?>"><button>READ MORE</button></a>
					</div>
				</div>
				<?php } ?>
				<div class="more_story">
					
					<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="story" posts_per_page="3" offset="3" pause="true" scroll="false" button_label="MORE STORIES"]');?>
					
				</div>
			</section>

		</div>
		<div class="about_us__section">
			<div class="container">
				<section class="about_empathy">
					<p>
						<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
						<div class="widget-column footer-widget-4">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</div>
						<?php } ?>
					</p>
				</section>
			</div>
		</div>
	</div>

	<?php get_footer();
