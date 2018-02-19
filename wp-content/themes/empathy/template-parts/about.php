<?php 
/***
* Template Name: About
**/
get_header(); ?>
<main>
  <div class="body_content">
  	<div class="container">
  		<section class="banner">
  			<div class="world_text">
  				<p><?php if ( is_active_sidebar( 'sidebar-7' ) ) { ?>
                 <div class="widget-column footer-widget-7">
                   <?php dynamic_sidebar( 'sidebar-7' ); ?>
                 </div>
                <?php } ?></p>
  			</div>
<!--   			<div class="banner_img">
  				<figure class="banner_image">
  					<img src="images/banner2.jpg">
  				</figure>
  				<div class="banner_button">
  					<div class="btn">
  						<a href="#">Respect</a>
  					</div>
  					<div class="btn">
  						<a href="#">Integrity</a>
  					</div>
  					<div class="btn">
  						<a href="#">Empathy</a>
  					</div>
  				</div>
  			</div> -->
  			<div class="slideshow-container">
		<div class="mySlides fade">
			<img src="images/banner.jpg" style="width:100%">
			<div class="text">
<!-- 				<h1>Empathy</h1>
				<p>by Rabindranath Tagore</p> -->
			</div>
		</div>

		<div class="mySlides fade">
			<img src="images/banner2.jpg" style="width:100%">
			<div class="text">
<!-- 				<h1>Empathy</h1>
				<p>by Rabindranath Tagore</p> -->
			</div>
		</div>

		<div class="mySlides fade">
			<img src="images/banner.jpg" style="width:100%">
			<div class="text">
<!-- 				<h1>Empathy</h1>
				<p>by Rabindranath Tagore</p> -->
			</div>
		</div>
	</div>
	<div class="slideshow-container">
		<div class="slider-button">
			<div class="dot" onclick="currentSlide(1)"><a href="#">Respect</a></div> 
			<div class="dot" onclick="currentSlide(2)"><a href="#">Integrity</a></div> 
			<div class="dot" onclick="currentSlide(3)"><a href="#">Empathy</a></div> 
		</div>
	</div>
  			<div class="our_mission">
          <?php $query = new WP_Query( array( 'post_type' => 'about_mission', 'order'=>'DESC', 'posts_per_page'=>-1, 'paged' => $paged ) );
          foreach ($query->posts as $key => $value) {
            $name = $value->post_title;
            $id = $value->ID;
            $content = $value->post_content;
            $url = get_post_permalink( $id);
            $image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
            $custom_cont = get_post_meta($id, '', TRUE);
          ?>
  				<div class="our_goals">
  					<h1><?php echo $name; ?></h1>
  					<p><?php echo $content; ?></p>
  				</div>
          <?php } ?>
  			</div>
  		</section>
  	</div>
  	<section class="our_team__section">
  		<div class="container">
  			<div class="our_team__heading">
  				<h1>ten circel</h1>
  			</div>
  			<div class="our_team__block">
          <?php
          $query = new WP_Query( array( 'post_type' => 'team_member', 'order'=>'DESC', 'posts_per_page'=>-1, 'paged' => $paged ) );

      foreach ($query->posts as $key => $value) {
        $name = $value->post_title;
        $id = $value->ID;
        $image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
        $custom_cont = get_post_meta($id, '', TRUE);
          ?>
  				<div class="team_blocks">
  					<figure class="team_member__img">
  						<img src="<?php echo $image; ?>">
  					</figure>
  					<h4><a href="#"><?php echo $name; ?></a></h4>
  					<div class="social_link">
  					   <img src="images/linkedin.png">
  					</div>
  				</div>
          <?php } ?>
  			</div>
  		</div>
  	</section>
  	<section class="team_member__signature">
  		<div class="container">
  			<div class="member_signature">
  				<figure>
  					<img src="images/sign.png">
  				</figure>
  			</div>
  		</div>
  	</section>
  	<section class="our_officel__partners">
  		<div class="container">
  			<div class="our_associations">
  				<div class="our_associations__heading">
  					<h1>our associations</h1>
  				</div>
  				<div class="our_associations__partners">
  					<div class="partners_img">
  						<figure>
  							<img src="images/member.png">
  							<img src="images/member2.png">
  						</figure>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  </div>
</main>
  

<?php get_footer();