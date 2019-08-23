<?php
ob_start() ;?>

<section class="default-column sec_padd">
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
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="video-box wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<img src="<?php echo esc_url(wp_get_attachment_url($video_img));?>" alt="image" class="tran7s">
					<a href="<?php echo esc_url($video_link);?>" class="fancy_video fancybox.iframe tran3s"><div><span><i class="fa fa-play" aria-hidden="true"></i></span></div></a>

				</div>
				<div class="video-quot"><p><?php echo balanceTags($quot_text);?></p></div>
			</div>
			<!--Skills -->
        	<div class="column col-md-6 col-sm-12 col-xs-12">
                <!--Progress Levels-->
                <div class="text">
                	<p><?php echo balanceTags($text1);?></p><br>
                    <p><?php echo balanceTags($text2);?></p><br>
                </div>
                <div class="progress-levels">
                    <?php $skills_array = (array)json_decode(urldecode($our_skill));
						if( $skills_array && is_array($skills_array) ): 
						foreach( (array)$skills_array as $value ):
					?>       
                    <!--Skill Box-->
                    <div class="progress-box wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="box-title"><?php echo balanceTags(industries_set( $value, 'title' )); ?></div>
                        <div class="percent"></div>
                        <div class="inner">
                            <div class="bar">
                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo esc_attr(industries_set( $value, 'value' )); ?>"></div></div>
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif;?> 
                </div>
            </div>
			
		</div>
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   