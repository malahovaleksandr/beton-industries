<?php
ob_start() ;?>

<section class="single_contact_form">
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
			<!--Form Column -->
        	<div class="column form-column col-md-9 col-sm-9 col-xs-12">
            	<!--form-box-->
                <div class="form-box default-form">
                    <div class="default-form">
                        <?php echo do_shortcode(bunch_base_decode($contact_form));?>
                    </div>
                </div>
            </div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="contact-details">
					<div class="item">
						<h5><?php echo balanceTags($title1);?></h5>
                        <div class="img-box">
                            <img src="<?php echo esc_url(wp_get_attachment_url($image1))?>" alt="">
                        </div>
                        <div class="content">
                        	<h5><?php echo balanceTags($author_title1);?></h5>
                            <p><i class="fa fa-phone"></i><?php echo nl2br(wp_kses_post($phone1));?></p>
                            <p><i class="fa fa-envelope"></i><?php echo sanitize_email($email1);?></p>
                        </div>
					</div>
					<div class="item">
						<h5><?php echo balanceTags($title2);?></h5>
                        <div class="img-box">
                            <img src="<?php echo esc_url(wp_get_attachment_url($image2))?>" alt="">
                        </div>
                        <div class="content">
                        	<h5><?php echo balanceTags($author_title2);?></h5>
                            <p><i class="fa fa-phone"></i><?php echo nl2br(wp_kses_post($phone2));?></p>
                            <p><i class="fa fa-envelope"></i><?php echo sanitize_email($email2);?></p>
                        </div>
					</div>

				</div>
			</div>
			
		</div>
	</div>	
</section>
    
<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   