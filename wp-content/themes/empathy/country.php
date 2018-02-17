<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/empathy/wp-config.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/empathy/wp-includes/wp-db.php' );
if(isset($_GET['countryshortname'])) {
	$country_shortname = $_GET['countryshortname'];

    global $wpdb;
    $countrydata = $wpdb->get_results("SELECT post_id from wp_postmeta WHERE meta_key = 'country' and meta_value = '". $country_shortname ."'" );

	foreach ($countrydata as $key => $value) {
		$post_id = $value->post_id;
		$postdata = $wpdb->get_results("SELECT * from wp_posts WHERE ID = '". $post_id ."'" );

		foreach ($postdata as $key => $value) {
		$name = $value->post_title;
		$id = $value->ID;
		$content = $value->post_content;
		$url = get_post_permalink( $id);
		$image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
		$custom_cont = get_post_meta($id, '', TRUE);
		$field_of_work = $custom_cont['field_of_work'][0];
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

		if($country_shortname == $country) { ?>

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

		<?php } } } } else {
          echo 'fail'; 
		} ?>