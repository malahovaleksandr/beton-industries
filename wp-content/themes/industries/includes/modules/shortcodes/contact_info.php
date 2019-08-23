<?php
ob_start() ;?>

<section class="contact-post">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h4><?php echo balanceTags($title);?></h4>
				<div class="item">
					<ul class="contact-infos">
						
						<li>
							<div class="icon-box">
								<i class="icon-geography"></i>
							</div><!-- /.icon-box -->
							<div class="text-box">
								<p><b><?php esc_html_e('Address:', 'industries');?></b> <?php echo nl2br(wp_kses_post($address));?></p>
							</div><!-- /.text-box -->
						</li>
						<li>
							<div class="icon-box">
								<i class="icon-technology-1"></i>
							</div><!-- /.icon-box -->
							<div class="text-box">
								<p><b><?php esc_html_e('Call Us:', 'industries');?></b> <?php echo nl2br(wp_kses_post($phone));?><br><?php esc_html_e('Mail Us:', 'industries');?> <?php echo sanitize_email($email);?></p>
							</div><!-- /.text-box -->
						</li>
						<li>
							<div class="icon-box">
								<i class="icon-telephone-with-fax"></i>
							</div><!-- /.icon-box -->
							<div class="text-box">
								<p><b><?php esc_html_e('Fax:', 'industries');?></b> <?php echo balanceTags($fax);?></p>
							</div><!-- /.text-box -->
						</li>
					</ul>
				</div>
					
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h4><?php echo balanceTags($title1);?></h4>
				<div class="item">
					<div class="contact-infos Business">

						<br><p><?php echo balanceTags($text);?></p>
						<ul>
							<?php $fearures = explode("\n",$feature_str);?>
							<?php foreach($fearures as $feature):?>
                                <li><?php echo balanceTags($feature);?></li>
                            <?php endforeach;?>
						</ul>
							
					</div>
				</div>
					
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h4><?php echo balanceTags($title2);?></h4>
				<div class="item">
					<div class="text twitter-setting">
						<?php echo balanceTags($contents);?>
					</div>
				</div>
			</div>
		</div>
		<div class="border-bottom"></div>

	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   