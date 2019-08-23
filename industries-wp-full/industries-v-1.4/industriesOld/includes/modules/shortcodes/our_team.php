<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['team_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?> 
<?php if($query->have_posts()):  ?>   

<section class="our-team">
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
				$team_meta = _WSH()->get_meta();
			?>
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="single-team-member">
					<figure class="img-box">
						<a href="<?php echo esc_url(industries_set($team_meta, 'ext_url'));?>"><?php the_post_thumbnail('industries_170x170');?></a>
					</figure>
					<h4><a href="<?php echo esc_url(industries_set($team_meta, 'ext_url'));?>"><?php the_title();?></a></h4>
					<p class="position"><?php echo balanceTags(industries_set($team_meta, 'designation'));?></p>
					
					<?php if($socials = industries_set($team_meta, 'bunch_team_social')):?>
                    <ul class="list-inline social">
						<?php foreach($socials as $key => $value):?>
                            <li><a href="<?php echo esc_url(industries_set($value, 'social_link'));?>"><i class="fa <?php echo esc_attr(industries_set($value, 'social_icon'));?>"></i></a></li>
                        <?php endforeach;?>
					</ul>
                    <?php endif;?>
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