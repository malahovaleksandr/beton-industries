<?php
add_action('after_setup_theme', 'industries_bunch_theme_setup');
function industries_bunch_theme_setup()
{
	global $wp_version;
	if(!defined('INDUSTRIES_VERSION')) define('INDUSTRIES_VERSION', '1.0');
	if( !defined( 'INDUSTRIES_ROOT' ) ) define('INDUSTRIES_ROOT', get_template_directory().'/');
	if( !defined( 'INDUSTRIES_URL' ) ) define('INDUSTRIES_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	
	load_theme_textdomain('industries', get_template_directory() . '/languages');
	
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support('menus'); //Add menu support
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( "title-tag" );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'industries'),
				'topbar_menu' => esc_html__('Topbar Menu', 'industries'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'industries_370x190', 370, 190, true ); // '370x190 Our Services'
	add_image_size( 'industries_170x170', 170, 170, true ); // '170x170 Our Teams'
	add_image_size( 'industries_90x90', 90, 90, true ); // '90x90 Our Testimonial'
	add_image_size( 'industries_270x225', 270, 225, true ); // '270x225 Our Teams 2'
	add_image_size( 'industries_1170x420', 1170, 420, true ); // '1170x420 Our Blog'
	add_image_size( 'industries_270x230', 270, 230, true ); // '270x230 Blog List View'
	add_image_size( 'industries_370x210', 370, 210, true ); // '370x210 Blog grid View'
	add_image_size( 'industries_180x180', 180, 180, true ); // '180x180 avatar'
	add_image_size( 'industries_60x60', 60, 60, true ); // '60x60 Comments'
	add_image_size( 'industries_75x75', 75, 75, true ); // '75x75 Sidebar Recent News'
}
function industries_bunch_widget_init()
{
	global $wp_registered_sidebars;
	$theme_options = _WSH()->option();
	if( class_exists( 'Bunch_About_us' ) )register_widget( 'Bunch_About_us' );
	if( class_exists( 'Bunch_Recent_Post' ) )register_widget( 'Bunch_Recent_Post' );
	if( class_exists( 'Bunch_Contact_Detail' ) )register_widget( 'Bunch_Contact_Detail' );
	if( class_exists( 'Bunch_Subscribe_us' ) )register_widget( 'Bunch_Subscribe_us' );
	if( class_exists( 'Bunch_Sidebar_Contact' ) )register_widget( 'Bunch_Sidebar_Contact' );
	if( class_exists( 'Bunch_Brochures' ) )register_widget( 'Bunch_Brochures' );
	
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'industries' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'industries' ),
	  'before_widget'=>'<div id="%1$s" class="widget single-sidebar %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'industries' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'industries' ),
	  'before_widget'=>'<div id="%1$s"  class="col-md-3 footer-widget  %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'industries' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'industries' ),
	  'before_widget'=>'<div id="%1$s" class="single-sidebar wow fadeInUp %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="theme_inner_title"><h4>',
	  'after_title' => '</h4></div>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = industries_set(industries_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(industries_set($sidebar , 'topcopy')) continue ;
		
		$name = industries_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = industries_bunch_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  sanitize_title( $slug ) ,
			'before_widget' => '<div id="%1$s" class="side-bar widget sidebar_widget single-sidebar-box %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h5 class="uppercase">',
			'after_title' => '</h5>',
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'industries_bunch_widget_init' );
// Update items in cart via AJAX
function industries_load_head_scripts() {
    $options = _WSH()->option();
	if ( !is_admin() ) {
	$protocol = is_ssl() ? 'https://' : 'http://';
	$map_path = '?key='.industries_set($options, 'map_api_key');
	wp_enqueue_script( 'industries_map_api', $protocol.'maps.google.com/maps/api/js'.$map_path, array(), false, false );
	wp_enqueue_script( 'jquery-googlemap', get_template_directory_uri().'/js/jquery.gmap.js', array(), false, false );
	}
    }
    add_action( 'wp_enqueue_scripts', 'industries_load_head_scripts' );
//global variables
function industries_bunch_global_variable() {
    global $wp_query;
}

function industries_enqueue_scripts() {
    //styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'gui', get_template_directory_uri() . '/css/gui.css' );
	wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/bootstrap-select.min.css' );
	wp_enqueue_style( 'fontawesom', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/owl.carousel-2/assets/owl.carousel.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/owl.carousel-2/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/animate.min.css' );
	wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() . '/assets/fancyapps-fancyBox/source/jquery.fancybox.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'icomoon-style', get_template_directory_uri() . '/assets/icomoon/style.css' );
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/assets/jquery.bxslider/jquery.bxslider.css' );
	wp_enqueue_style( 'language-switcher', get_template_directory_uri() . '/assets/Polyglot-Language-Switcher-master/css/polyglot-language-switcher.css' );
	wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/nouislider/nouislider.css' );
	wp_enqueue_style( 'nouislider-pips', get_template_directory_uri() . '/assets/nouislider/nouislider.pips.css' );
	wp_enqueue_style( 'bootstrap-touchspin', get_template_directory_uri() . '/assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.css' );
	wp_enqueue_style( 'industries_main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'industries_custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'industries_responsive', get_template_directory_uri() . '/css/responsive.css' );
	if(class_exists('woocommerce')) wp_enqueue_style( 'industries_woocommerce', get_template_directory_uri() . '/css/woocommerce.css' );
	
    //scripts
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri().'/assets/owl.carousel-2/owl.carousel.min.js', array(), false, true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/wow.js', array(), false, true );
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/assets/jquery.mixitup.min.js', array(), false, true );
	wp_enqueue_script( 'fitvids', get_template_directory_uri().'/assets/jquery.fitvids.js', array(), false, true );
	wp_enqueue_script( 'bootstrap-select', get_template_directory_uri().'/assets/bootstrap-select.min.js', array(), false, true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri().'/assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js', array(), false, true );
	wp_enqueue_script( 'language-switcher', get_template_directory_uri().'/assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js', array(), false, true );
	wp_enqueue_script( 'nouislider', get_template_directory_uri().'/assets/nouislider/nouislider.js', array(), false, true );
	wp_enqueue_script( 'bootstrap-touchspin', get_template_directory_uri().'/assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js', array(), false, true );
	wp_enqueue_script( 'SmoothScroll', get_template_directory_uri().'/assets/SmoothScroll.js', array(), false, true );
	wp_enqueue_script( 'jquery-appear', get_template_directory_uri().'/assets/jquery-appear/jquery.appear.js', array(), false, true );
	wp_enqueue_script( 'jquery-countTo', get_template_directory_uri().'/assets/jquery.countTo.js', array(), false, true );
	wp_enqueue_script( 'default-map', get_template_directory_uri().'/js/default-map.js', array(), false, true );
	wp_enqueue_script( 'industries_main_script', get_template_directory_uri().'/js/custom.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
	
}
add_action( 'wp_enqueue_scripts', 'industries_enqueue_scripts' );

/*-------------------------------------------------------------*/
function industries_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $roboto = _x( 'on', 'Roboto font: on or off', 'industries' );
	$montserrat = _x( 'on', 'Montserrat font: on or off', 'industries' );
	
	/* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $roboto = _x( 'on', 'Roboto font: on or off', 'industries' );
 
    if ( 'off' !== $roboto || 'off' !== $montserrat ) {
        $font_families = array();
		
		if ( 'off' !== $montserrat ) {
            $font_families[] = 'Montserrat:400,700';
        }
		
		if ( 'off' !== $roboto ) {
            $font_families[] = 'Roboto:400,700';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}
function industries_theme_slug_scripts_styles() {
    wp_enqueue_style( 'industries-theme-slug-fonts', industries_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'industries_theme_slug_scripts_styles' );
/*---------------------------------------------------------------------*/
function industries_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'industries_add_editor_styles' );
/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function industries_woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'industries_jk_related_products_args' );
  function industries_jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}


/*
 * новый тип записаей Портофолио
 * **/

function portfolio(){
    register_post_type('portfolio', array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => admin_url() . 'images/media-button-video.gif',
        'labels' => array(
            'name' => 'Портфолио',
            'all_items' => 'Все Портфолио',
            'add_new' => 'Новое портфолио',
            'add_new_item' => 'Добавить Портфолио'
        )
    ));
    register_taxonomy(
        'tagportfolio',
        'portfolio',
        array (
            'hierarchical' => false,
            'label' => __('Рубрики'),
            'singular_label' => __('Рубрика'),
            'query_var' => 'mtype')
    );
}
add_action('init', 'portfolio');
