<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?>
<?php if($query->have_posts()):  ?>   

	<?php while($query->have_posts()): $query->the_post();
        global $post ; 
        $post_meta = _WSH()->get_meta();
    ?>
    <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="img_holder">
                    <?php the_post_thumbnail('industries_270x230', array('class' => 'img-responsive')) ;?>
                </div> <!-- End of .img_holder -->
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="post">
                    <div class="news-date">
                       <?php echo get_the_date('F d, Y');?>
                    </div>
                    <div class="text">
                        <p><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php esc_html_e('by', 'industries');?> <?php the_author();?></a> <?php the_category(', '); ?> <a href="<?php echo esc_url(get_permalink(get_the_id()).'#comment');?>"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a></p>
                        <h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h4>
                        <p><?php echo balanceTags(industries_trim(get_the_content(), $text_limit));?>  </p>
                        <div class="link"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="tran3s"><?php esc_html_e('Continue Reading...', 'industries');?></a></div>
                    </div>
                </div> <!-- End of .post -->
            </div>
        </div>                        
    </div>
	<?php endwhile;?>
    
    <div class="page_pagination">
		<?php industries_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<i class="fa fa-caret-right"></i>', 'prev_text' => '<i class="fa fa-caret-left"></i>')); ?>
    </div>
    
<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>