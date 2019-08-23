<?php  
   $count = 0;
   $query_args = array('post_type' => 'bunch_faqs' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['faqs_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?> 
<?php if($query->have_posts()):  ?>   

<section class="faq-section">
	<div class="container">
		<div class="section-title">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<h2><?php echo balanceTags($title);?></h2>
							<span class="decor"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-12 font-20">
							<p><?php echo balanceTags($text);?></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="search-box text-center">
						<?php get_template_part( 'searchform4' ); ?>
					</div>
				</div>
			</div>
					
		</div>
		<div class="faq-bg">
			<div class="row">
            	<?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$faq_meta = _WSH()->get_meta();
				?>
				<div class="col-md-6">
					<div class="single-faq-box">
						<h3><?php the_title();?></h3>
						<p><?php echo balanceTags(industries_trim(get_the_content(), $text_limit));?></p>
					</div><!-- /.single-faq-box -->
				</div><!-- /.col-md-6 -->
                <?php endwhile;?>
			</div>	
		</div>
			
	</div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>