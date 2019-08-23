<?php 
industries_bunch_global_variable();
$paged = get_query_var('paged');
$args = array('post_type' => 'bunch_testimonials', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);
$terms_array = explode(",",$exclude_cats);
if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'testimonials_category','field' => 'id','terms' => $terms_array,'operator' => 'NOT IN',));
$query = new WP_Query($args);

$t = $GLOBALS['_bunch_base'];

$data_filtration = '';
$data_posts = '';
?>

<?php if( $query->have_posts() ):
	
ob_start();?>

	<?php $count = 0; 
	$fliteration = array();?>
	<?php while( $query->have_posts() ): $query->the_post();
		global  $post;
		$meta = get_post_meta( get_the_id(), '_bunch_testimonials_meta', true );//printr($meta);
		$meta1 = _WSH()->get_meta();
		$post_terms = get_the_terms( get_the_id(), 'testimonials_category');// printr($post_terms); exit();
		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;
		$temp_category = get_the_term_list(get_the_id(), 'testimonials_category', '', ', ');
	?>
		<?php $post_terms = wp_get_post_terms( get_the_id(), 'testimonials_category'); 
		$term_slug = '';
		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		
           
		   <div class="col-md-4 mix col-sm-6 <?php echo esc_attr($term_slug); ?>">
                <article class="slide-item">
                    <div class="quote"><span class="fa fa-quote-right"></span></div>
                    <div class="author">
                        <div class="img-box">
                            <a href="<?php echo esc_url(industries_set($meta1, 'ext_url'));?>"><?php the_post_thumbnail('industries_90x90');?></a>
                        </div>
                        <h4><a href="<?php echo esc_url(industries_set($meta1, 'ext_url'));?>"><?php the_title();?></a></h4>
                        <p><?php echo balanceTags(industries_set($meta1, 'designation'));?></p>
                    </div>
                    
                    <div class="slide-text">
                        <p><?php echo balanceTags(industries_trim(get_the_content(), $text_limit));?></p>
                    </div>
                </article>
            </div>
           
<?php endwhile;?>
  
<?php wp_reset_postdata();
$data_posts = ob_get_contents();
ob_end_clean();

endif; 

ob_start();?>	 

<?php $terms = get_terms(array('testimonials_category')); ?>

<section class="project-content section-padding testimonials-section padd-bottom-30">
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
		<div class="mixit-gallery">

			<ul class="gallery-filter list-inline">
				<li><b><?php esc_html_e('About:', 'industries');?></b></li>
				<li class="filter" data-filter="all"><span><?php esc_attr_e('Company', 'industries');?> </span></li>
				<?php foreach( $fliteration as $t ): ?>
                <li class="filter" data-filter=".<?php echo esc_attr(industries_set( $t, 'slug' )); ?>"><span><?php echo balanceTags(industries_set( $t, 'name')); ?></span></li>
				<?php endforeach;?>
			</ul>
			<div class="link-btn"><a href="<?php echo esc_url($btn_link);?>" class="tran3s"><?php echo balanceTags($btn_text);?><span class="fa fa-sort-desc"></span></a></div>


			<div class="row">
            	<?php echo balanceTags($data_posts); ?> 
			</div>

		</div>
	</div>
</section>

<?php $output = ob_get_contents();
ob_end_clean(); 
return $output;?>