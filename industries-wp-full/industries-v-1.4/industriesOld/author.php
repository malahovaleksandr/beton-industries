<?php industries_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option(); 
	if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
	$layout = industries_set( $settings, 'author_page_layout', 'right' );
	$sidebar = industries_set( $settings, 'author_page_sidebar', 'blog-sidebar' );
	$view = industries_set( $settings, 'author_page_view', 'list' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-md-9 col-sm-12 ' ;
	$bg = industries_set($settings, 'author_page_header_img');
	$title = industries_set($settings, 'author_page_header_title');
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
                    <!-- Post -->
                    <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                        <?php get_template_part( 'blog' ); ?>
                    <!-- blog post item -->
                    </div><!-- End Post -->
                <?php endwhile;?>
                </div>
                <!--Pagination-->
                <div class="page_pagination">
					<?php industries_the_pagination(); ?>
                </div>
                
            </div>
            <!--Content Side-->
            
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