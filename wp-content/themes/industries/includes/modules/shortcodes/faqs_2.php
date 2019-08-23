<?php
ob_start() ;?>

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

		<div class="row">
			<div class="col-md-8 col-sm-12">
				<div class="tabs-box tabs-style-two">
                    <!--Tab Buttons-->
                    <div class="row">
                    	<div class="col-md-5 col-sm-12">
                    		<ul class="tab-buttons clearfix">
		                        <?php $skills_array = (array)json_decode(urldecode($faqs_tab));
									if( $skills_array && is_array($skills_array) ): 
									foreach( (array)$skills_array as $key => $value ):
								?>
                                <li data-tab="#tab-one<?php echo esc_attr($key);?>" class="tab-btn <?php if( $key == 1) echo 'active-btn';?>"><?php echo balanceTags(industries_set( $value, 'title' )); ?></li>
		                        <?php $key++; endforeach; endif;?>
		                    </ul>
                    	</div>
                    	<div class="col-md-7 col-sm-12">
                    		<!--Tabs Content-->
		                    <div class="tabs-content">
		                        <?php $skills_array = (array)json_decode(urldecode($faqs_tab));
									if( $skills_array && is_array($skills_array) ): 
									foreach( (array)$skills_array as $key => $value ):
								?>
                                <!--Tab / Active Tab-->
		                        <div class="tab <?php if( $key == 1) echo 'active-tab';?>" id="tab-one<?php echo esc_attr($key);?>" <?php if( $key == 1 ) echo 'style=display:block;'; else echo 'style=display:none;'?>>
		                            <div class="text-content">
		                            	<h5><?php echo balanceTags(industries_set( $value, 'title' )); ?></h5>
		                            	<br>
		                            	<div class="text"><p><?php echo balanceTags(industries_set( $value, 'text' )); ?></p></div>
		                            </div>
		                        </div>
                                <?php $key++; endforeach; endif;?>

		                    </div>
                    	</div>
                    </div>
		        
                </div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="contact-section no-padd style-2">
					<div class="section-title inner">
						<h2><?php echo balanceTags($contact_title);?></h2>
						<span class="decor"></span>
					</div>

					<div class="form-box default-form">
                        <div class="default-form">
                            <?php echo do_shortcode(bunch_base_decode($contact_form));?>
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
   