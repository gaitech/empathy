<?php
add_action( 'wp_enqueue_scripts', 'empathy_enqueue_child_styles', 99);
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

function empathy_enqueue_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
function wpb_load_fa() {
 
wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . ' /stylesheets/font-awesome.min.css' );
 
}
 


function my_scripts_method() { 
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'custom-js-script', get_stylesheet_directory_uri() . '/library/jquery/jquery.min.js', array( 'jquery' ) ); 
} 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function empathy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Home Block', 'twentyseventeen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Right Block', 'twentyseventeen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Copyright Block', 'twentyseventeen' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'About Top Text Block', 'twentyseventeen' ),
		'id'            => 'sidebar-7',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Detail Text Block', 'twentyseventeen' ),
		'id'            => 'sidebar-8',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'First Track Block', 'twentyseventeen' ),
		'id'            => 'sidebar-9',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Second Track Block', 'twentyseventeen' ),
		'id'            => 'sidebar-10',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	    'before_title'  => '<h2 class="widget-title">',
	    'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'empathy_widgets_init' );


// function include google font 
function wpb_add_google_fonts() {
wp_enqueue_style( 'custom-font', 'fonts/Helvetica Neue.ttf', false );
wp_enqueue_style( 'custom-font', 'fonts/Georgia.ttf', false );
}	
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );




// user fields

function fb_add_custom_user_profile_fields( $user ) {
?>
	<h3><?php _e('Extra Profile Information', 'your_textdomain'); ?></h3>
	
	<table class="form-table">
		<tr>
			<th>
				<label for="contributor_description"><?php _e('Contributor Description', 'your_textdomain'); ?>
			</label></th>
			<td>
				<input type="text" name="contributor_description" id="contributor_description" value="<?php echo esc_attr( get_the_author_meta( 'contributor_description', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your Contributor Description.', 'your_textdomain'); ?></span>
			</td>
		</tr>
	</table>
<?php }

function fb_save_custom_user_profile_fields( $user_id ) {
	
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;
	
	update_usermeta( $user_id, 'contributor_description', $_POST['contributor_description'] );
}

add_action( 'show_user_profile', 'fb_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'fb_add_custom_user_profile_fields' );

add_action( 'personal_options_update', 'fb_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'fb_save_custom_user_profile_fields' );

/* Adding Image Upload Fields */
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user )
{
?>

        <h3>Profile Images</h3>

        <style type="text/css">
                .fh-profile-upload-options th,
                .fh-profile-upload-options td,
                .fh-profile-upload-options input {
                        vertical-align: top;
                }

                .user-preview-image {
                        display: block;
                        height: auto;
                        width: 100px;
                }

        </style>

        <table class="form-table fh-profile-upload-options">
                <tr>
                        <th>
                                <label for="image">Main Profile Image</label>
                        </th>

                        <td>
                                <img class="user-preview-image" src="<?php echo esc_attr(
get_the_author_meta( 'image', $user->ID ) ); ?>">

                                <input type="text" name="image" id="image" value="<?php echo
esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>"
class="regular-text" />
                                <input type='button' class="button-primary" value="Upload Image"
id="uploadimage"/><br />

                                <span class="description">Please upload an image for your profile.</span>
                        </td>
                </tr>

        </table>

        <script type="text/javascript">
                (function( $ ) {
                        $( '#uploadimage' ).on( 'click', function() {
                                tb_show('test', 'media-upload.php?type=image&TB_iframe=1');

                                window.send_to_editor = function( html )
                                {
                                        imgurl = $( 'img',html ).attr( 'src' );
                                        $( '#image' ).val(imgurl);
                                        tb_remove();
                                }

                                return false;
                        });

                })(jQuery);
        </script>

<?php
}

add_action( 'admin_enqueue_scripts', 'enqueue_admin' );

function enqueue_admin()
{
        wp_enqueue_script( 'thickbox' );
        wp_enqueue_style('thickbox');

        wp_enqueue_script('media-upload');
}

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

        if ( !current_user_can( 'edit_user', $user_id ) )
{
                return false;
        }

update_user_meta( $user_id, 'image', $_POST[ 'image' ] );
        update_user_meta( $user_id, 'sidebarimage', $_POST[ 'sidebarimage' ] );
}