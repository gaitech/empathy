<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<main class="main_wraper">
		<section class="header_section">
			<div class="container">
				<header class="top_header">
					<div class="soundcloud">
						<div class="soundcloud_logo">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/cloud.png">
						</div>
						<div class="soundcloud_text">
							<p class="text1">Scorpions</p>
							<p class="text2">Winds of changes</p>
						</div>
					</div>
					<div class="soundcloud_2">
						<div class="music_player">
							<div class="music_player__img">
								<img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/play_music.jpg">
							</div>
							<div class="play_time">
								<p>04:36 / 05:16</p>
							</div>
						</div>
						<div class="channel_button">
							<p>TEN Sense</p>
							<button>ON</button>
						</div>
					</div>
				</header>
			</div>	 
		</section>
		<div class="container">
			<div class="navigation">
				<div class="site_logo">
					<a href="<?php echo esc_url(home_url('/') ); ?>"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/logo-theempathynetwork.png"></a>
				</div>
				<div class="navbar">
					
					<select name="country" id="country">
						<option value="">Countries</option>
						<?php $country_data = $wpdb->get_results("SELECT * from wp_countries");
						foreach($country_data as $key => $country) {
							$id = $country->id;
							$shortname = $country->shortname;
							$name = $country->name; ?>

							<option value="<?php echo $shortname; ?>"><?php echo $name; ?></option>


						<?php } ?>
					</select>
					
				</div>
			</div> 	
		</div>