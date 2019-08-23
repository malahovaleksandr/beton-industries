<?php
ob_start() ;?>

<section class="about-section">
	<div class="container">
		<div class="section-title text-center">
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo balanceTags($title);?></h2>
					<span class="decor"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="text font-20">
					<p><?php echo balanceTags($text1);?> </p>
					<p><?php echo balanceTags($text2);?> </p>
				</div>
				<div class="call-out clearfix">
					<div class="pull-left"><a href="<?php echo esc_url($btn_link);?>" class="thm-btn thm-color thm-tran-bg"><?php echo balanceTags($btn_text);?></a></div>
					<div class="pull-left"><p class="phone-number thm-color"><i class="fa fa-phone"></i><?php echo nl2br(wp_kses_post($phone));?></p></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="video-box wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
					<img src="<?php echo esc_url(wp_get_attachment_url($video_img));?>" alt="image" class="tran7s">
					<a href="<?php echo esc_url($video_link);?>" class="fancy_video fancybox.iframe tran3s"><div><span><i class="fa fa-play" aria-hidden="true"></i></span></div></a>

				</div>
				<div class="video-quot"><p><?php echo balanceTags($quot_des);?></p></div>
			</div>
		</div>
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   