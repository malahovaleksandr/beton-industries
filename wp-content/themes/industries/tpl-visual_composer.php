<?php /* Template Name: VC Page */
	get_header() ;
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = industries_set($meta, 'header_img');
	$title = industries_set($meta, 'header_title');
?>
<?php if(industries_set($meta, 'breadcrumb')):?>
	
    <!--Page Title-->
    <div class="inner-banner has-base-color-overlay text-center" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="container">
            <div class="box">
                <h3><?php if($title) echo wp_kses_post($title); else wp_title('');?></h3>
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
<?php endif;?>
<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;  ?>
<?php get_footer() ; ?>