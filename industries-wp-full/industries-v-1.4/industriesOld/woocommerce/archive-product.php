<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$meta = _WSH()->get_meta('_bunch_layout_settings', get_option( 'woocommerce_shop_page_id' ));
$meta1 = _WSH()->get_meta('_bunch_header_settings', get_option( 'woocommerce_shop_page_id' ));
$layout = industries_set( $meta, 'layout', 'left' );
$layout = industries_set( $_GET, 'layout' ) ? $_GET['layout'] : $layout; 
if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
$layout = industries_set( $meta, 'layout', 'left' );
$sidebar = industries_set( $meta, 'sidebar', 'blog-sidebar' );

$layout = ($layout) ? $layout : 'right';
$sidebar = ($sidebar) ? $sidebar : 'blog-sidebar';

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

<div class="shop">
	<div class="container">
		<div class="row">
			
			<!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="col-md-3 col-sm-12 col-xs-12 sidebar_styleTwo">        
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

			<!-- sidebar area -->
			
			<div class="<?php echo esc_attr($classes);?> products-section no-padd-top no-padd-bottom shop-page-content1">
			<?php
				/**
				 * woocommerce_before_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action( 'woocommerce_before_main_content' );
			?>
			
			<?php
				/**
				 * woocommerce_archive_description hook
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
			?>

		<?php if ( have_posts() ) : ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	
	</div>

	<!-- sidebar area -->
	<?php if( $layout == 'right' ): ?>
    <?php if ( is_active_sidebar( $sidebar ) ) { ?>
    <div class="col-md-3 col-sm-12 col-xs-12 sidebar_styleTwo">        
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
    <!--Sidebar-->
    
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>