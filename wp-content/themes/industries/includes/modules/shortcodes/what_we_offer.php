<?php
ob_start() ;?>

<div class="outer">
    <div class="section-title inner">
        <h2><?php echo balanceTags($title);?></h2>
        <span class="decor"></span>
    </div>

    <div class="chemical-offer">
        <div class="row">
        	<?php $skills_array = (array)json_decode(urldecode($services));
				if( $skills_array && is_array($skills_array) ): 
				foreach( (array)$skills_array as $value ):
			?>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="img-box display-tcm">
                        <a href="<?php echo esc_url(industries_set( $value, 'link' )); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(industries_set( $value, 'image' ))); ?>" alt=""></a>
                    </div>
                    <div class="text-box display-tcm pl-20">
                        <div class="title"><a href="<?php echo esc_url(industries_set( $value, 'link' )); ?>"><?php echo balanceTags(industries_set( $value, 'title' )); ?></a> <span><?php echo balanceTags(industries_set( $value, 'btn_text' )); ?></span></div>
                        <div class="text">
                            <p><?php echo balanceTags(industries_set( $value, 'text' )); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; endif;?>
        </div>
    </div>
</div>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   