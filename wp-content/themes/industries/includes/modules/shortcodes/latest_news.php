<?php  
   global $post ;
   $count = 0;
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?>
<?php if($query->have_posts()):  ?>   

<section class="news">
	<div class="container">
		<div class="section-title">
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<h2><?php echo balanceTags($title);?></h2>
					<span class="decor"></span>
				</div>
				<div class="col-md-8 col-sm-7 col-xs-12 font-20">
					<p><?php echo balanceTags($text);?></p>
				</div>
			</div>
		</div>
		<div class="row">
        	<?php while($query->have_posts()): $query->the_post();
                global $post ; 
                $post_meta = _WSH()->get_meta();
            ?>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<div class="img_holder">
						<?php the_post_thumbnail('industries_370x210', array( 'class' => 'img-responsive')); ?>
					</div> <!-- End of .img_holder -->
					<div class="post">
						<div class="news-date">
							<?php echo get_the_date('F d, Y');?>
						</div>
						<div class="text">
							<p class="author"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php esc_html_e('by', 'industries');?> <?php the_author();?></a></p>
							<h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h4>
							<p><?php echo balanceTags(industries_trim(get_the_content(), $text_limit));?> </p>
							<div class="link"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="tran3s"><?php esc_html_e('CONTINUE READING...', 'industries'); ?></a></div>
						</div>
						
					</div> <!-- End of .post -->
				</div>
				
			</div>
			<?php endwhile;?>
		</div>
	</div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>