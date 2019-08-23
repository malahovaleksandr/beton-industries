<?php $options = _WSH()->option();
	get_header(); 
	$settings  = industries_set(industries_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
	$layout = industries_set( $meta, 'layout', 'full' );
	if( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = industries_set( $meta, 'sidebar', 'blog-sidebar' );
	$classes = ( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
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
<section class="news style-2 single-blog">
	<div class="container">
		<div class="row">

            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">        
				<div class="wrapper">
					<?php dynamic_sidebar( $sidebar ); ?>
				</div>
            </div>
			<?php } ?>
			<?php endif; ?>
            
            <!--Content Side-->	
            <div class="<?php echo esc_attr($classes);?>">
                <!--Default Section-->
                <div class="thm-unit-tst">
				<?php while( have_posts() ): the_post(); 
					$post_meta = _WSH()->get_meta();
				?>
				
				<div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<?php if ( has_post_thumbnail() ):?>
                    <div class="img_holder">
						<?php the_post_thumbnail('industries_1170x420', array('class' => 'img-responsive'));?>
					</div> <!-- End of .img_holder -->
                    <?php endif;?>
					<div class="post">
						<div class="news-date">
							<?php echo get_the_date('F d, Y');?>
						</div>
						<div class="text">
							<p><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php esc_html_e('by', 'industries');?> <?php the_author();?></a> <?php the_category(', '); ?> <a href="<?php echo esc_url(get_permalink(get_the_id()).'#comment');?>"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a></p>
							<?php the_content();?>
							
						</div>
						
                        <?php if(get_the_author_meta('description')){ ?>
                        <div class="author">
                            <!-- Image -->
							<div class="avatar-img">
								<?php echo get_avatar('', 'industries_180x180' ); ?>
							</div>
                            <div class="author-comment">
								<div class="quote">
									<i class="fa fa-quote-left"></i>
								</div>
								<p><?php echo '“ ';the_author_meta( 'description', get_the_author_meta('ID') ); echo '”';?></p>
								<h5><?php the_author();?></h5>
								<p class="a-title"><?php echo the_author_meta('nickname');?></p>
							</div>												
						</div>
                        <?php } ?>
						
                        <div class="post-pagination">
							<div class="next-post"><span class="prev-post"><?php previous_post_link( '%link', '<i class="fa fa-long-arrow-left"></i>Prev Post', TRUE ); ?></span>
                            </div>
										
							<ul class="share-options clearfix">
								<li><a href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink(get_the_id()));?>"><span class="fa fa-facebook-f"></span></a></li>
								<li><a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink(get_the_id()));?>&text=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-twitter"></span></a></li>
								<li><a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink(get_the_id()));?>"><span class="fa fa-google-plus"></span></a></li>
								<li><a href="http://www.linkedin.com/shareArticle?url=<?php echo esc_url(get_permalink(get_the_id()));?>&title=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-linkedin"></span></a></li>
							</ul>
							
							<div class="prev-post"><span class="prev-post"><?php next_post_link( '%link', 'Next Post<i class="fa fa-long-arrow-right"></i>', TRUE ); ?></span>
                            </div>
							
						</div>
                        
                        <!-- comment area -->
                        <?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'industries'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                        <?php comments_template(); ?><!-- end comments -->    
                	</div> <!-- End of .post -->
                </div>
                
                <?php endwhile;?>
                </div>
            </div>
            <!--Content Side-->
            
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">        
				<div class="wrapper">
					<?php dynamic_sidebar( $sidebar ); ?>
				</div>
            </div>
			<?php } ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>