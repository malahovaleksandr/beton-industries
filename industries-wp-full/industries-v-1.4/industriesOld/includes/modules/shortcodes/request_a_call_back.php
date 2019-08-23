<?php
ob_start() ;?>

<section class="contact-section" style="background: url('<?php echo esc_url(wp_get_attachment_url($bg_img));?>');">
	<div class="container">
				
		<div class="row">
			<div class="col-md-6">
				<div class="section-title">
					<h2><?php echo balanceTags($title);?></h2>
				</div>
				<p><?php echo balanceTags($contents);?></p>
				<p><span><?php esc_html_e('Note:', 'industries');?> </span> <?php echo balanceTags($text);?></p>
			</div>
			<!--Form Column -->
            <div class="column form-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <!--form-box-->
                <div class="form-box default-form">
                    <div class="default-form">
                        <?php echo do_shortcode(bunch_base_decode($contact_form));?>
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
   