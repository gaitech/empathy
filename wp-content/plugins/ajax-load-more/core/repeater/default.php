<?php
$url = get_permalink( $id );
$postid = url_to_postid( $url );  
				?>
					<div class="real_stories">
						<figure>
						<?php	   	if ( has_post_thumbnail() ) {
						   		the_post_thumbnail('alm-thumbnail');
						 } ?> 	
						</figure>
						<h1><?php the_title(); ?></h1>
						<?php 
						$custom_cont = get_post_meta($postid, '', TRUE);
						?>

						<p><a href="#"><?php echo $custom_cont['field_of_work'][0]; ?></a></p>
						<?php
						$content_post = get_post($postid);
            $content = $content_post->post_content;
            ?>

						<p class="content"><?php echo substr($content, 0 , 250); ?></p>
						<div class="read_more">
							<a href="<?php  the_permalink( $id ); ?>"><button>READ MORE</button></a>
						</div>
					</div>