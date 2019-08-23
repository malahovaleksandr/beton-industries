<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );


/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr($str) {return $str;}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
function is_admin() {return true;}

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
/**
 * @ignore
 */
function json_encode() {}
endif;



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
$yellow = $_GET['main_color'];

ob_start(); ?>




.thm-btn.thm-color2:hover,
.thm-btn.thm-tran-bg:hover,
.section-title .decor:before,
.mainmenu-wrapper .get-appt .appt-btn,
.rev_slider_wrapper .tparrows:hover,
.rev_slider_wrapper .tp-bannertimer,
.video-quot p,
.testimonials-section .column-carousel.three-column .owl-dot span:hover,
.testimonials-section .column-carousel.three-column .owl-dot.active span,
.news .blogList_single_post .post .news-date,
.product-review-tab .add_your_review form button,
.contact-section .select-form .dropdown-menu.inner li a:hover,
.contact-section .select-form .dropdown-menu.inner li.selected a,
.contact-post h4,
.single_contact_form .select-form .dropdown-menu.inner li a:hover,
.single_contact_form .select-form .dropdown-menu.inner li.selected a,
.footer-widget .subscribe-widget form button,
.sidebar_search button,
.single-sidebar.price-ranger .ui-slider .ui-slider-range,
.product_details .product_top_section .item_description>a,
.cart_table .payment_system a,
.shop_cart_table .icon_holder,
.shop_cart_table button,
.shop_cart_table .cart_btn3:hover,
.ui-widget-content .ui-state-focus,
.account_page form button,
.progress-levels .progress-box .bar .bar-fill,
.page_pagination li a.active,
.page_pagination li a:hover,
.brochures .brochures-lists li:hover a span,
.chemical-offer .item .title span,
.outer ul.benifit li:after,
.accordions-box.style-2 .accrodion.active .accrodion-title,
.img-slide-box .caption,
.bx-wrapper .bx-pager.bx-default-pager a:hover,
.bx-wrapper .bx-pager.bx-default-pager a.active,
.single-shop-item .text-box .thm-btn:hover,
.page_pagination li a:hover,
.paginate-links > span,
.pagination li span,
.woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
.woocommerce #place_order,
.post-password-form input[type="submit"],
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button,
.woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover,
.woocommerce #review_form #respond .form-submit input,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
form.cart button.add-to-cart,
.woocommerce-EditAccountForm.edit-account legend::before,
.woocommerce-billing-fields h3::before,
.woocommerce-shipping-fields h3::before,
h3#order_review_heading::before,
.woocommerce-account .addresses .title h3::before,
.woocommerce-MyAccount-content h3::before,
.woocommerce-EditAccountForm.edit-account legend::after,
.woocommerce-billing-fields h3::after,
.woocommerce-shipping-fields h3::after,
h3#order_review_heading::after,
.woocommerce-account .addresses .title h3::after,
.woocommerce-MyAccount-content h3::after,
.thm-btn,
.mainmenu-holder .nav-header > ul > li > ul li:hover > a,
.mainmenu-holder .nav-header > ul > li > ul li.current-menu-item > a
{
	background-color: #<?php echo esc_attr($yellow); ?>;
}


.thm-color,
.thm-btn.thm-color:hover,
.main-header .header-top .top-right .links-nav li a,
.main-header .info-box .icon-box,
.mainmenu-holder .nav-header > ul > li.current-menu-item > a:before,
.mainmenu-holder .nav-header > ul > li:hover > a:before,
.mainmenu-holder .nav-header > ul > li.current-menu-ancestor > a:before,
.rev_slider_wrapper .factory-caption-p,
.about-section .call-out a.thm-btn,
.single-team-member .social li a:hover,
.single-team-member:hover a p,
.testimonials-section .slide-item:hover .quote,
.testimonials-section .author p,
.news .blogList_single_post .post h4 a:hover,
.news .blogList_single_post .post p a:hover,
.single-blog .author-comment p.a-title,
.single-blog .post-pagination .share-options li a:hover,
.news .blogList_single_post .post .prev-post a:hover,
.news .blogList_single_post .post .next-post a:hover,
.product-review-tab .add_your_review ul.active li,
.product-review-tab .add_your_review form button:hover,
.contact-section .section-title h2,
.contact-section p span,
.contact-section.style-2 .default-form .thm-btn:hover,
.contact-post .contact-infos li .icon-box i,
.single_contact_form p span,
.single_contact_form .contact-details .item .content p i,
.single_contact_form .contact-details .item .content h5,
.footer-widget .inner-title h3,
.footer-widget .about-widget .social li a:hover,
.footer-widget .link-widget li a:hover,
.footer-widget .contact-widget .contact-infos li .icon-box i,
.footer-bottom .copy-text a:hover,
.footer-bottom .get-text ul li a:hover,
.breadcumb-wrapper ul.link-list li a:hover,
.breadcumb-wrapper ul.link-list li a i,
.breadcumb-wrapper a.get-qoute,
.link-btn a,
.link-btn span,
.widget_categories ul li a:hover,
.single-sidebar ul li a:hover,
.sidebar_categories ul li a:hover,
.single-sidebar-box ul li a:hover,
.sidebar_categories ul li a:hover,
.best_sellers .best_selling_item .text ul li,
.best_sellers .best_selling_item .text span,
.product_details .product_top_section .item_description>ul>li i,
.product_details .product_top_section .item_description .item_price,
.product_details .product-review-tab .nav li.active a,
.cart_table .payment_system a:hover,
.progress-levels .progress-box .percent,
.error-section .error-searchbox ul li a:hover,
.our-achivement .quot,
.single-sidebar-box.service-link-widget ul.catergori-list li.active a,
.single-sidebar-box.service-link-widget ul.catergori-list li a:hover,
.brochures .brochures-lists li:hover a i::before,
.brochures .brochures-lists li:hover a,
.single-sidebar-box .contact-details .item .content p i,
.single-sidebar-box .contact-details .item .content h5,
.chemical-offer .item .title a:hover,
.tabs-box.tabs-style-two ul li.active-btn,
.single-shop-item .text-box p span,
ul.feedback li a,
.recent-posts.post-thumb .post a:hover,
.breadcumb-wrapper li:first-child a:after,
.breadcumb-wrapper li:hover,
.breadcumb-wrapper li:hover a,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover,
.woocommerce .star-rating,
.woocommerce .woocommerce-message::before,
.woocommerce .woocommerce-message::before,
.woocommerce div.product p.price,
.woocommerce div.product span.price,
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover,
.woocommerce .star-rating,
.woocommerce .feedback li a,
.woocommerce #review_form #respond .form-submit input:hover,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
.scroll-to-top,
.news .blogList_single_post .post .link a:hover,
.mainmenu-holder .nav-header > ul > li:hover > a,
.mainmenu-wrapper .search-box form input
{
	color: #<?php echo esc_attr($yellow); ?>;
}

.thm-btn,
.thm-btn.thm-color:hover,
.thm-btn.thm-tran-bg:hover,
ul.gallery-filter li:hover span,
ul.gallery-filter li.active span,
.mainmenu-holder .nav-header > ul > li.current-menu-item > a,
.mainmenu-holder .nav-header > ul > li:hover > a,
.mainmenu-holder .nav-header > ul > li.current-menu-ancestor > a,
.mainmenu-wrapper .get-appt .appt-btn:hover,
.about-section .call-out a.thm-btn,
.testimonials-section .slide-item:hover,
.testimonials-section .column-carousel.three-column .owl-dot span,
.testimonials-section .column-carousel.three-column .owl-dot span:hover,
.testimonials-section .column-carousel.three-column .owl-dot.active span,
.testimonials-section.theme-two .column-carousel.three-column .owl-dot span,
.product-review-tab .add_your_review form button,
.contact-section.style-2 .default-form .thm-btn:hover,
.link-btn a,
.single-sidebar.price-ranger .ui-slider-handle,
.cart_table .payment_system a,
.cart_table .payment_system a:hover,
.progress-levels .progress-box.animated .bar .bar-fill:before,
.tabs-style-one .tab-buttons .tab-btn.active-btn,
.single-shop-item:hover .img-box,
.single-shop-item .img-box .offer-box .inner:before,
.woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button,
.woocommerce .woocommerce-message,
.post-password-form input[type="password"],
.mainmenu-holder .nav-header > ul > li,
.woocommerce .woocommerce-message,
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover,
.woocommerce #review_form #respond .form-submit input,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
form.cart button.add-to-cart
{
	border-color: #<?php echo esc_attr($yellow); ?>;
}


.footer-widget .subscribe-widget form button
{
    outline: #<?php echo esc_attr($yellow); ?>;
}


.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover
{
	background-color: #<?php echo esc_attr($yellow); ?> !important;
}


.progress-levels .progress-box .bar .bar-fill
{
     background: #<?php echo esc_attr($yellow); ?> !important;
}


.single-shop-item:hover h3 a,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover
{
   color: #<?php echo esc_attr($yellow); ?> !important;
} 

.mainmenu-holder .nav-footer > ul > li > button,
.mainmenu-holder .nav-header .navigation .dropdown-expander{
	background: #<?php echo esc_attr($yellow); ?> !important;
}



<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;