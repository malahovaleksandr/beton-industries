<?php industries_bunch_global_variable();
$options = _WSH()->option();
get_header();
if( $wp_query->is_posts_page ) {
    $meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
    $meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
    if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
        $layout = industries_set( $meta, 'layout', 'right' );
    $sidebar = industries_set( $meta, 'sidebar', 'default-sidebar' );
    $bg = industries_set($meta1, 'header_img');
    $title = industries_set($meta1, 'header_title');
} else {
    $settings  = _WSH()->option();
    if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
        $layout = industries_set( $settings, 'archive_page_layout', 'right' );
    $sidebar = industries_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
    $bg = industries_set($settings, 'archive_page_header_img');
    $title = industries_set($settings, 'archive_page_header_title');
}
$layout = industries_set( $_GET, 'layout' ) ? industries_set( $_GET, 'layout' ) : $layout;
$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
_WSH()->page_settings = array('layout'=>'right', 'sidebar'=>$sidebar);
$classes = ( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-md-9 col-sm-12 ' ;
?>

    <!--Page Title-->
    <div class="inner-banner has-base-color-overlay text-center" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="container">
            <div class="box">
                <h3><?php if($title) echo wp_kses_post($title); else esc_html_e('Портфолио', 'industries');?></h3>
            </div><!-- /.box -->
        </div><!-- /.container -->
    </div>

    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <div class="list-inline link-list">
                    <?php echo balanceTags(industries_get_the_breadcrumb()); ?>
                </div><!-- /.list-line -->
            </div><!-- /.pull-left -->
        </div><!-- /.container -->
    </div>

    <!--Sidebar Page-->
    <section class="news style-2">
        <div class="container">
            <div class="rw">

                <!-- sidebar area
                <?php if( $layout == 'left' ): ?>
                <?php if ( is_active_sidebar( $sidebar ) ) { ?>
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar_styleTwo">
                    <div class="wrapper">
                        <?php dynamic_sidebar( $sidebar ); ?>
                    </div>
                </div>
                <?php } ?>
                <?php endif; ?>
                <!--Content Side-->
                <div class="<?php echo esc_attr($classes);?>">
                    <!--Blog Post-->
                    <div class="thm-unit-tst wrapperPortfolio">
                        <?php $paged = get_query_var('portfolio') ? get_query_var('portfolio') : 1; ?>
                        <?php $postIn = new WP_Query(array(
                                'paged'            => $paged,
                                'post_type'        => 'portfolio' ,
                                'post_status'      => 'publish',
                            )
                        );  ?>
                        <?php

                        while ( $postIn->have_posts() ) : $postIn->the_post(); ?>
                            <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', false);
                            $urlFull = wp_get_attachment_image_src($thumb_id,'full', false);
                            ?>
                            <div class="onePortfolio">
                                <img src="<?php echo $thumb_url[0]; ?>" alt="фото объекта" data-src="<?php echo $urlFull[0]; ?>">
                                <div class="nameObjectPortfolio"><?php the_title(); ?></div>
                            </div>

                            <?php
                        endwhile;  ?>
                    </div>
                    <!--Pagination-->
                    <div class="page_pagination">
                        <?php industries_the_pagination(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>