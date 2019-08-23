<?php  
   $count = 0;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?> 
<?php if($query->have_posts()):  ?>   

<section class="our-services">
	<div class="container">
		<?php if( $style_two == true ):?>
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
		<?php endif;?>
        <div class="row">
			
			<?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$services_meta = _WSH()->get_meta();
			?>
            <?php if(($count%3) == 0 && $count != 0):?>
            	<div class="col-md-12"><div class="separet"></div></div>
            <?php endif; ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="<?php echo esc_url(industries_set($services_meta, 'ext_url'));?>"><?php the_post_thumbnail('industries_370x190');?></a>
                    </figure>
                    <a href="<?php echo esc_url(industries_set($services_meta, 'ext_url'));?>"><h4><?php the_title();?></h4></a>
                    <p><?php echo balanceTags(industries_trim(get_the_content(), $text_limit));?> </p>
                </div>
            </div>
            <?php $count++; endwhile;?>
        </div>
	</div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>