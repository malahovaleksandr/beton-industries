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
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    </head>
	<body <?php body_class(); ?>>
	
    <div class="boxed_wrapper">
 	<?php if(industries_set($options, 'preloader')):?>
    <!-- Preloader -->
    <div class="preloader"></div>
 	<?php endif;?>
    
    <header class="main-header">
        <div class="header-upper">
            <div class="container">
                <div class="pull-right upper-right clearfix flexVerticalCenter">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/images/logo/logo.png'); ?>"
                                    alt="<?php esc_html_e('Industries', 'industries'); ?>"></a>
                    </div>
                    <?php if (industries_set($options, 'address')): ?>
                        <!--Info Box-->
                        <div class="upper-column info-box text-header">
                            <div class="icon-box"><span class="fa fa-map-marker"></span></div>
                            <div class="headerIconText">
                                <?php esc_html_e('Адрес :', 'industries'); ?> <?php echo nl2br(wp_kses_post(industries_set($options,
                                        'address'))); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (industries_set($options, 'phone_no') || industries_set($options, 'email')): ?>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-phone"></span></div>
                            <div class="headerIconText">
                                <?php esc_html_e('Телефон :', 'industries'); ?>
                                <a href="tel:<?php echo nl2br(wp_kses_post(industries_set($options, 'phone_no'))); ?> ">
                                    <?php echo nl2br(wp_kses_post(industries_set($options, 'phone_no'))); ?>
                                </a>
                                <br><?php esc_html_e('Эл. почта :', 'industries'); ?>
                                <a href="mailto:<?php echo balanceTags(industries_set($options,'email')); ?> ">
                                    <?php echo balanceTags(industries_set($options,'email')); ?>
                                </a>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (industries_set($options, 'office_time')): ?>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-clock-o"></span></div>
                            <div class="headerIconText">
                                <?php esc_html_e('Режим работы :', 'industries'); ?> <?php echo balanceTags(industries_set($options,
                                        'office_time')); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </header>
