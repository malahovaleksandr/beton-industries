<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$meta = _WSH()->get_meta('_bunch_layout_settings');
$meta1 = _WSH()->get_meta('_bunch_header_settings');
$layout = industries_set( $meta, 'layout', 'right' );
$sidebar = industries_set( $meta, 'sidebar', 'blog-sidebar' );
$classes = ( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-9 col-sm-12 col-xs-12 ' ;
$bg = industries_set($meta1, 'header_img');
$title = industries_set($meta1, 'header_title');
get_header( 'shop' ); ?>

<!--Page Title-->
<div class="inner-banner has-base-color-overlay text-center" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
	<div class="container">
		<div class="box">
			<h3><?php if($title) echo balanceTags($title); else wp_title('');?></h3>
		</div>
	</div>
</div>

<div class="breadcumb-wrapper">
	<div class="container">
		<div class="pull-left">
			<?php echo balanceTags(industries_get_the_breadcrumb()); ?>
		</div>
    </div>
</div>

<div class="shop_single_page">
	<div class="container">
		<div class="row">
			
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">        
				<div class="wrapper">
					<?php dynamic_sidebar( $sidebar ); ?>
                    <?php
							/**
							 * woocommerce_sidebar hook
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							do_action( 'woocommerce_sidebar' );
						?>
				</div>
            </div>
			<?php } ?>
			<?php endif; ?>
			
        <div class="<?php echo esc_attr($classes);?> product_details">
        <div class="wrapper">
        <?php
            /**
             * woocommerce_before_main_content hook
             *
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             */
            do_action( 'woocommerce_before_main_content' );
        ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php wc_get_template_part( 'content', 'single-product' ); ?>
            <?php endwhile; // end of the loop. ?>
        <?php
            /**
             * woocommerce_after_main_content hook
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action( 'woocommerce_after_main_content' );
        ?>
        </div>
        </div>
		
        	<!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">        
				<div class="wrapper">
					<?php dynamic_sidebar( $sidebar ); ?>
                    <?php
							/**
							 * woocommerce_sidebar hook
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							do_action( 'woocommerce_sidebar' );
						?>
				</div>
            </div>
			<?php } ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>