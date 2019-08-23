<?php  
ob_start() ;
$options = _WSH()->option();
?>

<section class="clients-section">
	<div class="container">
		<div class="client-carousel owl-carousel owl-theme">
			<?php if($clients = industries_set(industries_set($options, 'clients'), 'clients')):?>
			<?php foreach($clients as $key => $value):?>
				<?php if(industries_set($value, 'tocopy')) continue;?>
                <div class="item"><a href="<?php echo esc_url(industries_set($value, 'client_link'));?>"><img src="<?php echo esc_url(industries_set($value, 'client_img'));?>" alt="<?php esc_html_e('image', 'industries');?>" title="<?php echo esc_url(industries_set($value, 'title'));?>"></a></div>
                <?php endforeach;?>
        	<?php endif;?>
        </div>
	</div>	
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   