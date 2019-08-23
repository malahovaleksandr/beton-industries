<?php $options = _WSH()->option();
	industries_bunch_global_variable();
	$icon_href = (industries_set( $options, 'site_favicon' )) ? industries_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.png';
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		 <!-- Basic -->
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- Favcon -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
			<link rel="shortcut icon" type="image/png" href="<?php echo esc_url($icon_href);?>">
		<?php endif;?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
    <div class="boxed_wrapper">
 	<?php if(industries_set($options, 'preloader')):?>
    <!-- Preloader -->
    <div class="preloader"></div>
 	<?php endif;?>
    
    <header class="main-header">
        <div class="header-top">
            <div class="container">
                <!--Top Left-->
                <?php if(industries_set($options, 'welcome')):?>
                <div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo balanceTags(industries_set($options, 'welcome'));?></a></li>
                    </ul>
                </div>
                <?php endif;?>
                
                <!--Top Right-->
                <div class="top-right pull-right">
                    <ul class="links-nav clearfix">
                         <?php wp_nav_menu( array( 'theme_location' => 'topbar_menu', 'container_id' => 'navbar-collapse-1',
							'container_class'=>'navbar-collapse collapse navbar-right',
							'menu_class'=>'nav navbar-nav',
							'fallback_cb'=>false, 
							'items_wrap' => '%3$s', 
							'container'=>false,
							'walker'=> new Bunch_Bootstrap_walker()  
						) ); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="container">
                <div class="clearfix">
    
                    <div class="pull-left logo-outer">
                        <div class="logo">
                        	<?php if(industries_set($options, 'logo_image')):?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(industries_set($options, 'logo_image'));?>" alt="" title="<?php esc_html_e('Industries', 'industries');?>"></a>
                            <?php else:?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo/logo.png');?>" alt="<?php esc_html_e('Industries', 'industries');?>"></a>
                            <?php endif;?>
                        </div>
                    </div>
    
                    <div class="pull-right upper-right clearfix">
    
                        <?php if(industries_set($options, 'address')):?>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-map-marker"></span></div>
                            <?php esc_html_e('Address :', 'industries');?> <span class="light-text"><?php echo nl2br(wp_kses_post(industries_set($options, 'address')));?></span>
                        </div>
    					<?php endif;?>
						
						<?php if(industries_set($options, 'phone_no') || industries_set($options, 'email')):?>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-dribbble"></span></div>
                            <?php esc_html_e('Call Us :', 'industries');?> <span class="light-text"><?php echo nl2br(wp_kses_post(industries_set($options, 'phone_no')));?></span> <br><?php esc_html_e('Mail Us :', 'industries');?> <span class="light-text"><?php echo balanceTags(industries_set($options, 'email'));?></span>
    
                        </div>
    					<?php endif;?>
                        
						<?php if(industries_set($options, 'office_time')):?>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-clock-o"></span></div>
                            <?php esc_html_e('Office Time :', 'industries');?> <span class="light-text"><?php echo balanceTags(industries_set($options, 'office_time'));?></span>
                        </div>
    					<?php endif;?>
    
                    </div>
    
                </div>
            </div>
        </div>
    </header>
    
    
    <section class="mainmenu-wrapper stricky">
        <div class="container">
            <nav class="mainmenu-holder pull-left">
                <div class="nav-header">
                    <ul class="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
							'container_class'=>'navbar-collapse collapse navbar-right',
							'menu_class'=>'nav navbar-nav',
							'fallback_cb'=>false, 
							'items_wrap' => '%3$s', 
							'container'=>false,
							'walker'=> new Bunch_Bootstrap_walker()  
						) ); ?>
                    </ul>
                </div>
                <div class="nav-footer hidden-lg">
                    <ul>
                        <li><button class="menu-expander"><i class="fa fa-list-ul"></i></button></li>
                    </ul>
                </div>
            </nav>
            <?php if(industries_set($options, 'quote_link')){ ?>
            <div class="get-appt pull-right">
                <a href="<?php echo esc_url(industries_set($options, 'quote_link'));?>" class="appt-btn theme-btn"><?php esc_html_e('GET A QUOTE', 'industries');?></a>
            </div>
            <?php } ?>
            <div class="search-box pull-right">
              <?php get_template_part('searchform3')?>
            </div>
        </div>
    </section>