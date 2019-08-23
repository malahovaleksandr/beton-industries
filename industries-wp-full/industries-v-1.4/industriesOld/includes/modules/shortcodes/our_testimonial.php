<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?> 
<?php if($query->have_posts()):  ?>   

<section class="testimonials-section">
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
        
        <!--Slider-->      
        <div class="testimonials-slider column-carousel three-column">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$testimonial_meta = _WSH()->get_meta();
			?>
            <!--Slide-->
            <article class="slide-item">
                <div class="quote"><span class="fa fa-quote-right"></span></div>
                <div class="author">
                    <div class="img-box">
                        <a href="<?php echo esc_url(industries_set($testimonial_meta, 'ext_url'));?>"><?php the_post_thumbnail('industries_90x90');?></a>
                    </div>
                    <h4><a href="<?php echo esc_url(industries_set($testimonial_meta, 'ext_url'));?>"><?php the_title();?></a></h4>
                    <p><?php echo balanceTags(industries_set($testimonial_meta, 'designation'));?></p>
                </div>
                
                <div class="slide-text">
                    <p><?php echo balanceTags(industries_trim(get_the_content(), $text_limit));?></p>
                </div>
            </article>

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