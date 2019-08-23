<?php
ob_start() ;?>

<section class="our-achivement padd-80">
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
			<div class="col-md-4 col-sm-6 col-xs-12">
				<figure class="img-box">
					<img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt="">
				</figure>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="quot">
					<span class="left"><?php esc_html_e('“', 'industries');?> </span>
					<?php echo balanceTags($quot_text);?> 
					<span class="right"><?php esc_html_e('”', 'industries');?> </span>
					
				</div>
				<br>
				<div class="text">
					<p><?php echo balanceTags($text1);?></p>
				</div>
				<br>
				<div class="sign">
					<img src="<?php echo esc_url(wp_get_attachment_url($sign_img));?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   