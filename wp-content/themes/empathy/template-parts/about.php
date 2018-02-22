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
        <?php $query = new WP_Query( array( 'post_type' => 'about_slider', 'order'=>'ASC', 'posts_per_page'=>-1, 'paged' => $paged) );

        foreach ($query->posts as $key => $value) {
          $name = $value->post_title;
          $id = $value->ID;
          $custom_cont = get_post_meta($id, '', TRUE);
          $image_one = wp_get_attachment_url($custom_cont['image_one'][0]);
          $image_two = wp_get_attachment_url($custom_cont['image_two'][0]);
          $image_three = wp_get_attachment_url($custom_cont['image_three'][0]);
          $image_four = wp_get_attachment_url($custom_cont['image_four'][0]);
          $image_one_Text = $custom_cont['image_one_text'][0];
          $image_two_Text = $custom_cont['image_two_text'][0];
          $image_three_Text = $custom_cont['image_three_text'][0];
          $image_four_Text = $custom_cont['image_four_text'][0];
        } 
        ?>

        <div class="container">
          <div class="mySlides fade">
            <img src="<?php echo $image_one; ?>" style="width:100%">
            <div class="text">
<!-- 				<h1>Empathy</h1>
  <p>by Rabindranath Tagore</p> -->
</div>
</div>

<div class="mySlides fade">
 <img src="<?php echo $image_two; ?>" style="width:100%">
 <div class="text">
<!-- 				<h1>Empathy</h1>
  <p>by Rabindranath Tagore</p> -->
</div>
</div>

<div class="mySlides fade">
 <img  src="<?php echo $image_three; ?>" style="width:100%">
 <div class="text">
<!-- 				<h1>Empathy</h1>
  <p>by Rabindranath Tagore</p> -->
</div>
</div>
</div>
<div class="slideshow-container">
  <div class="slider-button">
    <div class="dotslider" onclick="currentSlide(1)"><a href="#"><?php echo $image_one_Text; ?></a></div> 
    <div class="dotslider" onclick="currentSlide(2)"><a href="#"><?php echo $image_two_Text; ?></a></div> 
    <div class="dotslider" onclick="currentSlide(3)"><a href="#"><?php echo $image_three_Text; ?></a></div>
    <div class="dotslider" onclick="currentSlide(3)"><a href="#"><?php echo $image_four_Text; ?></a></div>  
  </div>
</div>
<div class="our_mission">
  <?php $query = new WP_Query( array( 'post_type' => 'about_mission', 'order'=>'ASC', 'posts_per_page'=>-1, 'paged' => $paged ) );
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
    <h1>ten circle</h1>
  </div>
  <div class="our_team__block">
    <?php
    $query = new WP_Query( array( 'post_type' => 'team_member', 'order'=>'ASC', 'posts_per_page'=>-1, 'paged' => $paged ) );

    foreach ($query->posts as $key => $value) {
      $name = $value->post_title;
      $id = $value->ID;
      $image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
      $custom_cont = get_post_meta($id, '', TRUE);
      $linkedin = $custom_cont['linkedin'][0];
      $twitter = $custom_cont['twitter'][0];
      ?>
      <div class="team_blocks">
       <figure class="team_member__img">
        <img src="<?php echo $image; ?>">
      </figure>
      <h4><a href="#"><?php echo $name; ?></a></h4>
      <div class="social_link"><?php if ($twitter) { ?>
        <a href="<?php echo $twitter; ?>">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/twitter.png">
        </a>
        <?php
      } ?>
      <?php if ($linkedin) { ?><a href="<?php echo $twitter; ?>">
      <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/linkedin.png"></a>
      <?php
    } ?>
  </div>
</div>
<?php } ?>
</div>
</div>
</section>
<div class="gratitude_section">
  <div class="container">
    <div class="gratitude_heading">
      <h1>GRATiTUDE</h1>
      <p>We are greatful to these people for their contribution, assistance and constant support</p>
    </div>
    <div class="gratitude_member__block">
     
        <div class="gratitude_member__name">
           <?php $query = new WP_Query( array( 'post_type' => 'gratitude_block', 'order'=>'ASC', 'posts_per_page'=>-1, 'paged' => $paged) );

      foreach ($query->posts as $key => $value) {
        $id = $value->ID;
        $custom_cont = get_post_meta($id, '', TRUE);
        $personName = $custom_cont['person_name'][0];
        $organisation_name = $custom_cont['organization_name'][0];
        $organisation_url = $custom_cont['organization_url'][0];
        // $twitter = $custom_cont['twitter'][0];
      ?>
          <div class="member_name">
            <ul>
              <li><span><?php echo $personName; ?><?php if($organisation_url) { ?><a href="<?php echo $organisation_url; ?>" target="blank" > <?php } ?>
                <?php if ($organisation_name) {  echo '('.$organisation_name.')'; } ?></a>
                  
                </span></li>
            </ul>
          </div>
       <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <section class="our_officel__partners">
    <div class="container">
     <div class="our_associations">
      <div class="our_associations__heading">
       <h1>our associations</h1>
     </div>
     <div class="our_associations__partners">
       <div class="partners_img">
        <figure>
          <?php if(function_exists('get_awesome_logos')){ get_awesome_logos('1'); }?>
        </figure>
      </div>
    </div>
  </div>
</div>
</section>
</div>
</main>
<script type="text/javascript">
 var slideIndex = 1;
 showSlides(slideIndex);

 function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }

  </script>

  <?php get_footer();