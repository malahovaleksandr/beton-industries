<?php $options = _WSH()->option();
	get_header();
	$settings  = industries_set(industries_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
	$layout = industries_set( $meta, 'layout', 'right' );
	$sidebar = industries_set( $meta, 'sidebar', 'blog-sidebar' );
	$classes = ( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-md-9 col-sm-12 ' ;
	$bg = industries_set($meta1, 'header_img');
	$title = industries_set($meta1, 'header_title');
?>

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

<!--Sidebar Page-->
<section class="news style-2">
	<div class="container">
		<div class="rw">
            
            <!-- sidebar area -->
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
                <div class="thm-unit-tst">
				<?php while( have_posts() ): the_post();?>
                    <!-- blog post item -->
                    <?php the_content(); ?>
                    <?php comments_template(); ?><!-- end comments -->
                <?php endwhile;?>
                </div>
                <!--Pagination-->
                <div class="page_pagination">
					<?php industries_the_pagination(); ?>
                </div>
                
            </div>
            <!--Content Side-->
            
            <!--Sidebar-->	
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="col-md-3 col-sm-12 col-xs-12 sidebar_styleTwo">        
				<div class="wrapper">
					<?php dynamic_sidebar( $sidebar ); ?>
				</div>
            </div>
			<?php } ?>
			<?php endif; ?>
            <!--Sidebar-->
        </div>
    </div>
</section>

<?php get_footer(); ?>