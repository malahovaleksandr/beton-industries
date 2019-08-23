<?php
ob_start() ;?>

<section class="about-industries sec_padd">
	<div class="container">
		<div class="section-title">
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<h2><?php echo balanceTags($title);?></h2>
					<span class="decor"></span>
				</div>
				<div class="col-md-8 col-sm-7 col-xs-12 font-20">
					<p><?php echo balanceTags($text1);?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="text">
					<p><?php echo balanceTags($text2);?></p>
				</div>
				<br>
				<br>
				<figure class="img-box">
					<img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt="">
				</figure>
			</div>

        	<div class="column col-md-6 col-sm-12 col-xs-12">
				<div class="section-title inner">
					<h2><?php echo balanceTags($title1);?></h2>
					<span class="decor"></span>
				</div>
				<div class="text"><p>
					<?php echo balanceTags($text3);?>
				</p></div>
				<br>
				<div class="border-bottom"></div>
				<br>
				<div class="section-title inner">
					<h2><?php echo balanceTags($title1);?></h2>
					<span class="decor"></span>
				</div>
				<div class="text"><p>
					<?php echo balanceTags($text4);?>
				</p></div>
				<br>
				<div class="icon-box thm-color">
					<i class="fa fa-phone"></i>
					<p class="phone-number thm-color"><?php esc_html_e('Front Desk', 'industries');?> <br><?php echo nl2br(wp_kses_post($phone));?></p>
				</div>
			</div>
		</div>
		
        <br><br>
		
        <div class="border-bottom"></div>
		
        <br><br>
		
        <div class="history">
			<div class="row">
            	<?php $skills_array = (array)json_decode(urldecode($services));
					if( $skills_array && is_array($skills_array) ): 
					foreach( (array)$skills_array as $value ):
				?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="item">
						<div class="top-box">
							<div class="count"><?php echo balanceTags(industries_set( $value, 'year' )); ?></div>
							<h4><?php echo balanceTags(industries_set( $value, 'title' )); ?></h4>
						</div>
						<div class="text">
							<p><?php echo balanceTags(industries_set( $value, 'text' )); ?></p>
						</div>
					</div>
				</div>
				<?php endforeach; endif;?>
			</div>
		</div>
			
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   