<?php
ob_start() ;?>

<div class="tabs-outer">
    <!--Tabs Box-->
    <div class="tabs-box tabs-style-one">
        <!--Tab Buttons-->
        <ul class="tab-buttons clearfix">
            <?php $skills_array = (array)json_decode(urldecode($service_tab));
				if( $skills_array && is_array($skills_array) ): 
				foreach( (array)$skills_array as $key => $value ):
			?>
            <li data-tab="#tab-one<?php echo esc_attr($key);?>" class="tab-btn <?php if( $key == 1 ) echo 'active-btn' ;?> "><?php echo balanceTags(industries_set( $value, 'title' )); ?></li>
            <?php endforeach; endif;?>
        </ul>
    
        <!--Tabs Content-->
        <div class="tabs-content">
            <?php $skills_array = (array)json_decode(urldecode($service_tab));
				if( $skills_array && is_array($skills_array) ): 
				foreach( (array)$skills_array as $key => $value ):
			?>
            <!--Tab / Active Tab-->
            <div class="tab <?php if( $key == 1 ) echo 'active-tab' ;?>" id="tab-one<?php echo esc_attr($key);?>" <?php if( $key == 1 ) echo 'style=display:block;'; else echo 'style=display:none;'?>>
                <div class="text-content">
                    <div class="text"><p><?php echo balanceTags(industries_set( $value, 'text' )); ?></p></div>
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
   