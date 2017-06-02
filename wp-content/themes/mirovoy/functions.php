<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );

  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('Roboto', 'https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700%7CRoboto:300,400');
				wp_enqueue_style( 'Roboto');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');

add_theme_support( 'title-tag' );

// Custom Post Type
function create_my_custom_post() {
	register_post_type( 'my-custom-post',
			array(
			'labels' => array(
					'name' => __( 'My Custom Post' ),
					'singular_name' => __( 'My Custom Post' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_my_custom_post' );

// Custom settings
function social_settings_add_menu() {
  add_menu_page( 'Social Settings', 'Social Settings', 'manage_options', 'social-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'social_settings_add_menu' );


// ====== Changing the menu "posts" to "events"
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Events';
    $submenu['edit.php'][5][0] = 'Events';
    $submenu['edit.php'][10][0] = 'Add Events';
    $submenu['edit.php'][16][0] = 'Events Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Events';
    $labels->singular_name = 'Events';
    $labels->add_new = 'Add Events';
    $labels->add_new_item = 'Add Events';
    $labels->edit_item = 'Edit Events';
    $labels->new_item = 'Events';
    $labels->view_item = 'View Events';
    $labels->search_items = 'Search Events';
    $labels->not_found = 'No Events found';
    $labels->not_found_in_trash = 'No Events found in Trash';
    $labels->all_items = 'All Events';
    $labels->menu_name = 'Events';
    $labels->name_admin_bar = 'Events';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );


// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Social Network settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
<?php }

function setting_youtube() { ?>
  <input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );

	add_settings_field( 'facebook', 'facebook URL', 'setting_facebook', 'theme-options', 'section' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
	add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
	add_settings_field( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );

register_setting( 'section', 'facebook' );
  register_setting('section', 'twitter');
	register_setting( 'section', 'instagram' );
	register_setting( 'section', 'youtube' );

}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );



?>
