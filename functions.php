<?php
define("PATH",get_template_directory());
define("URL",get_template_directory_uri());


/**
 * awakening_hosting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package awakening_hosting
 */
 require_once PATH . '/admin/admin-init.php';

if ( ! function_exists( 'awakening_hosting_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function awakening_hosting_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on awakening_hosting, use a find and replace
		 * to change 'awakening_hosting' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'awakening_hosting', PATH . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header Menu', 'awakening_hosting' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'awakening_hosting' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'awakening_hosting_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'awakening_hosting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function awakening_hosting_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'awakening_hosting_content_width', 640 );
}
add_action( 'after_setup_theme', 'awakening_hosting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function awakening_hosting_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'awakening_hosting' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'awakening_hosting' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'awakening_hosting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function awakening_hosting_scripts() {
    wp_register_style('google-font',  'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500', array(), 1.0);
    wp_register_style('bootstrap-min', URL . '/css/bootstrap.min.css', array(), 1.0);
    wp_register_style('font-awesome', URL . '/css/font-awesome.min.css', array(), 1.0);
    wp_register_style('niceCountryInput', URL . '/css/niceCountryInput.css', array(), 1.0);
    wp_register_style('chosen', URL . '/css/chosen.min.css', array(), 1.0);
    wp_register_style('custom-styles', URL . '/css/styles.css', array(), 1.0);

    wp_register_script('niceCountryInput-script', URL . '/js/niceCountryInput.js', array('jquery'), 155.0, true);
    wp_register_script('popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), 1.0, true);
    wp_register_script('bootstrap-script', URL . '/js/bootstrap.min.js', array('jquery'), 1.0, true);
    wp_register_script('chosen-script', URL . '/js/chosen.jquery.min.js', array('jquery'), 1.0, true);
    wp_register_script('slick-script', URL . '/js/slick.min.js', array('jquery'), 1.0, true);

    wp_register_script('custom-script', URL . '/js/functions.js', array('jquery'), 1.0, true);


    wp_enqueue_script( 'awakening_hosting-navigation', URL . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'awakening_hosting-skip-link-focus-fix', URL . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_style('google-font');
    wp_enqueue_style('bootstrap-min');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('niceCountryInput');
    wp_enqueue_style('chosen');
    wp_enqueue_style('custom-styles');
    wp_enqueue_style( 'awakening_hosting-style', get_stylesheet_uri() );


    wp_enqueue_script('popper-script');
    wp_enqueue_script('bootstrap-script');
    wp_enqueue_script('chosen-script');
    wp_enqueue_script('slick-script');
    wp_enqueue_script('niceCountryInput-script');
    wp_enqueue_script('custom-script');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'awakening_hosting_scripts' );

/**
 * Implement the Custom Header feature.
 */
require PATH. '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require PATH. '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require PATH. '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require PATH . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require PATH . '/inc/jetpack.php';
}

require PATH . '/inc/wp-bootstrap-navwalker.php';


function pr($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    return $var;
}

function admin_style() {
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash',10);
remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_images',20);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating',10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_sharing',50);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',20);

function global_notice_meta_box() {

    add_meta_box(
        'button-text-url',
        __( 'Button Options', 'awakening_hosting' ),
        'button_text_url_meta_box_callback',
        'product'
    );
}

add_action( 'add_meta_boxes', 'global_notice_meta_box' );

function button_text_url_meta_box_callback($post)
{
    $_buttontext = get_post_meta($post->ID, 'custom_button_text', true);
    $_buttonurl = get_post_meta($post->ID, 'custom_button_url', true);
    ?>
    <div class="inside">
        <div style="margin-bottom: 20px">
            <label for="btntxt_field" style="width: 30%;font-weight: bold"><?php _e('Button Text','awakening_hosting');?> :</label>
            <input style="width: 70%" type="text" name="custom_button_text" value="<?php if(!empty($_buttontext)){ echo $_buttontext;}?>">
        </div>
        <div class="">
            <label for="btntxt_field" style="width: 30%;font-weight: bold"><?php _e('Button Url','awakening_hosting');?> :</label>
            <input style="width: 70%" type="text" name="custom_button_url" value="<?php if(!empty($_buttonurl)){ echo $_buttonurl;}?>">
        </div>
    </div>
    <?php
}

function save_custom_postdata($post_id)
{
    if (array_key_exists('custom_button_text', $_POST)) {
        update_post_meta(
            $post_id,
            'custom_button_text',
            $_POST['custom_button_text']
        );
    }
    if (array_key_exists('custom_button_url', $_POST)) {
        update_post_meta(
            $post_id,
            'custom_button_url',
            $_POST['custom_button_url']
        );
    }
}
add_action('save_post', 'save_custom_postdata');
