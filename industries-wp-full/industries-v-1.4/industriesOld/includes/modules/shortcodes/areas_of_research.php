<?php
ob_start() ;?>

<div class="outer">
    <div class="section-title inner">
        <h2><?php echo balanceTags($title);?></h2>
        <span class="decor"></span>
    </div>
    <div class="text">
        <p><?php echo balanceTags($text);?></p>
    </div>
    <br>	
    <div class="img-box display-tcm">
        <a href="<?php echo esc_url($link);?>"><img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt=""></a>
    </div>
    <div class="accordions-box display-tcm pl-30">
        <div class="accrodion-grp" data-grp-name="faq-accrodion">
            <?php $skills_array = (array)json_decode(urldecode($accordions));
				if( $skills_array && is_array($skills_array) ): 
				foreach( (array)$skills_array as $key => $value ):
			?>
            <div class="accrodion <?php if( $key == 1 ) echo 'active';?>">
                <div class="accrodion-title">
                    <h4><?php echo balanceTags(industries_set( $value, 'title' )); ?></h4>
                </div>
                <div class="accrodion-content">
                    <p><?php echo balanceTags(industries_set( $value, 'text' )); ?></p>
                </div>
            </div>
            <?php $key++; endforeach; endif;?> 
        </div>
    </div>

</div>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   