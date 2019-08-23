<?php
///----Blog widgets---

/// Recent Posts 
class Bunch_Recent_Post extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Recent_Post', /* Name */esc_html__('Industries Recent Posts','industries'), array( 'description' => esc_html__('Show the recent posts', 'industries' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
        <!-- Recent Posts -->
        <div class="popular_news">
            <?php echo balanceTags($before_title.$title.$after_title); ?>
			<div class="recent-posts post-thumb">
				<?php $query_string = 'posts_per_page='.$instance['number'];
                if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
                query_posts( $query_string ); 
                
                $this->posts();
                wp_reset_query(); ?>
            </div>
        </div>
        
		<?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Latest News', 'industries');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'industries'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'industries'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'industries'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'industries'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts()
	{
		
		if( have_posts() ):?>
        
           	<!-- Title -->
				<?php while( have_posts() ): the_post(); ?>
                <div class="post">
                    <div class="post-thumb"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('industries_75x75', array('class' => 'img-responsive'));?></a></div>
                    <h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo balanceTags(industries_trim(get_the_title(), '4'));?></a></h4>
                    <div class="post-info"><?php esc_html_e('by', 'industries'); ?> <?php the_author(); ?></div>
                </div>
                <?php endwhile; ?>
            
        <?php endif;
    }
}

///----footer widgets---
//About Us
class Bunch_About_us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_About_us', /* Name */esc_html__('Industries About Us','industries'), array( 'description' => esc_html__('Show the information about company', 'industries' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$options = _WSH()->option('social_media');
		
		echo balanceTags($before_widget);?>
      		
            <div class="about-widget">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($instance['link']); ?>" alt="" /></a>
                <p><?php echo balanceTags($instance['content']); ?></p> 
                
				<?php if( $instance['show'] ): ?>
                <ul class="list-inline social">
                    <?php echo balanceTags(industries_get_social_icons()); ?>
                </ul>
                <?php endif; ?>
            </div><!-- /.footer-widget about-widget -->
        
		<?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['link'] = strip_tags($new_instance['link']);
		$instance['content'] = $new_instance['content'];
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$link = ($instance) ? esc_attr($instance['link']) : 'http://';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$show = ( $instance ) ? esc_attr($instance['show']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_html_e('Image Url:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('About Us', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text" value="<?php echo esc_attr($link); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'industries'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo balanceTags($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Show Social Icons:', 'industries'); ?></label>
			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>        
                
		<?php 
	}
	
}

///----footer widgets---
//contact detail
class Bunch_Contact_Detail extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Contact_Detail', /* Name */esc_html__('Industries Contact Detail','industries'), array( 'description' => esc_html__('Show the information about company', 'industries' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$options = _WSH()->option('social_media');
		
		echo balanceTags($before_widget);?>
      		
        <div class="contact-widget">
            <div class="inner-title">
                <h3><?php echo balanceTags($instance['title']); ?></h3>
                <span class="decor-line"></span>
            </div><!-- /.sec-title-two -->
            <div class="footer-contact-info-carousel">
                <div class="item">
                    <ul class="contact-infos">
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-dribbble"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p><?php echo nl2br(wp_kses_post($instance['address'])); ?></p>
                            </div><!-- /.text-box -->
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-phone"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p><?php echo nl2br(wp_kses_post($instance['phone'])); ?> <br><?php echo sanitize_email($instance['email']); ?></p>
                            </div><!-- /.text-box -->
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-fax"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p><?php echo balanceTags($instance['fax']); ?></p>
                            </div><!-- /.text-box -->
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-clock-o"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p><?php echo balanceTags($instance['time']); ?></p>
                            </div><!-- /.text-box -->
                        </li>
                    </ul><!-- /.contact-infos -->						
                </div><!-- /.item -->

            </div><!-- /.contact-info-carousel owl-theme owl-carousel -->
            
        </div>
        
		<?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['address'] = $new_instance['address'];
		$instance['phone'] = $new_instance['phone'];
		$instance['email'] = $new_instance['email'];
		$instance['fax'] = $new_instance['fax'];
		$instance['time'] = $new_instance['time'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : '';
		$address = ($instance) ? esc_attr($instance['address']) : '';
		$phone = ( $instance ) ? esc_attr($instance['phone']) : '';
		$email = ( $instance ) ? esc_attr($instance['email']) : '';
		$fax = ( $instance ) ? esc_attr($instance['fax']) : '';
		$time = ( $instance ) ? esc_attr($instance['time']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Title', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:', 'industries'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" ><?php echo nl2br(wp_kses_post($address)); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Phone', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Email', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('fax')); ?>"><?php esc_html_e('Fax:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Fax', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('fax')); ?>" name="<?php echo esc_attr($this->get_field_name('fax')); ?>" type="text" value="<?php echo esc_attr($fax); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('time')); ?>"><?php esc_html_e('Time:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Time', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('time')); ?>" name="<?php echo esc_attr($this->get_field_name('time')); ?>" type="text" value="<?php echo esc_attr($time); ?>" />
        </p>       
                
		<?php 
	}
	
}


///----footer widgets---
//SUBSCRIBE US
class Bunch_Subscribe_us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Subscribe_us', /* Name */esc_html__('Subscribe Us','industries'), array( 'description' => esc_html__('Show the information about company', 'industries' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$options = _WSH()->option('social_media');
		
		echo balanceTags($before_widget);?>
     	
        <div class="subscribe-widget">
            <div class="inner-title">
                <h3><?php echo balanceTags($instance['title']); ?></h3>
                <span class="decor-line"></span>
            </div><!-- /.sec-title-two -->
            <p class="highlight"><?php echo balanceTags($instance['text']); ?></p>
            <form action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8" class="clearfix mailchimp-form">
                <input type="hidden" id="uri2" name="uri" value="<?php echo esc_attr($id); ?>">
                <input type="text" name="email" placeholder="<?php esc_html_e('Email address', 'industries');?>" />
                <button type="submit"><i class="fa fa-envelope-o"></i></button>
            </form>
            <p class="highlight"><?php echo balanceTags($instance['text2']); ?></p>
        </div>
        
        <?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['text'] = $new_instance['text'];
		$instance['id'] = $new_instance['id'];
		$instance['text2'] = $new_instance['text2'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : '';
		$text = ($instance) ? esc_attr($instance['text']) : '';
		$id = ( $instance ) ? esc_attr($instance['id']) : '';
		$text2 = ( $instance ) ? esc_attr($instance['text2']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Title', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('Description:', 'industries'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('Description')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" ><?php echo balanceTags($text); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('id')); ?>"><?php esc_html_e('Form Id:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Form Id', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('id')); ?>" name="<?php echo esc_attr($this->get_field_name('id')); ?>" type="text" value="<?php echo esc_attr($id); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text2')); ?>"><?php esc_html_e('Description:', 'industries'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('Description')); ?>" name="<?php echo esc_attr($this->get_field_name('text2')); ?>" ><?php echo balanceTags($text2); ?></textarea>
        </p>       
                
		<?php 
	}
	
}

/// Recent Services
class Bunch_Sidebar_Contact extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Sidebar_Contact', /* Name */esc_html__('Industries Contact Us Sidebar','industries'), array( 'description' => esc_html__('Show the info Sidebar Contact Us', 'industries' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		
		echo balanceTags($before_widget);?>
      		
            <!--Contact Us-->
            <div class="cotact_us">
            	<h5 class="uppercase"><?php echo balanceTags($instance['title']); ?></h5><br/>
                <div class="contact-details">
                                
                    <div class="item">
                        <h5><?php echo balanceTags($instance['designation1']); ?></h5>
                        <div class="img-box">
                            <img src="<?php echo esc_url($instance['image_link1']); ?>" alt="">
                        </div>
                        <div class="content">
                            <h5><?php echo balanceTags($instance['name1']); ?></h5>
                            <p><i class="fa fa-phone"></i><?php echo nl2br(wp_kses_post($instance['phone1'])); ?></p>
                            <p><i class="fa fa-envelope"></i><?php echo sanitize_email($instance['email1']); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <h5><?php echo balanceTags($instance['designation2']); ?></h5>
                        <div class="img-box">
                            <img src="<?php echo esc_url($instance['image_link2']); ?>" alt="">
                        </div>
                        <div class="content">
                            <h5><?php echo balanceTags($instance['name2']); ?></h5>
                            <p><i class="fa fa-phone"></i><?php echo nl2br(wp_kses_post($instance['phone2'])); ?></p>
                            <p><i class="fa fa-envelope"></i><?php echo sanitize_email($instance['email2']); ?></p>
                        </div>
                    </div>
    
                </div>
            </div>
            
		<?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['designation1'] = $new_instance['designation1'];
		$instance['image_link1'] = $new_instance['image_link1'];
		$instance['name1'] = $new_instance['name1'];
		$instance['phone1'] = $new_instance['phone1'];
		$instance['email1'] = $new_instance['email1'];
		$instance['designation2'] = $new_instance['designation2'];
		$instance['image_link2'] = $new_instance['image_link2'];
		$instance['name2'] = $new_instance['name2'];
		$instance['phone2'] = $new_instance['phone2'];
		$instance['email2'] = $new_instance['email2'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Contact Us', 'industries');
		$designation1 = ( $instance ) ? esc_attr($instance['designation1']) : 'Human Resource:';
		$image_link1 = ($instance) ? esc_attr($instance['image_link1']) : 'http://asianitbd.com/wp/industries/wp-content/themes/industries/images/team/author.jpg';
		$name1 = ( $instance ) ? esc_attr($instance['name1']) : 'Charles Mecky';
		$phone1 = ($instance) ? esc_attr($instance['phone1']) : '+123 456 789';
		$email1 = ( $instance ) ? esc_attr($instance['email1']) : 'example@gmail.com';
		
		$designation2 = ( $instance ) ? esc_attr($instance['designation2']) : 'Sales Department:';
		$image_link2 = ($instance) ? esc_attr($instance['image_link2']) : 'http://asianitbd.com/wp/industries/wp-content/themes/industries/images/team/author1.jpg';
		$name2 = ( $instance ) ? esc_attr($instance['name2']) : 'Charles Mecky';
		$phone2 = ($instance) ? esc_attr($instance['phone2']) : '+123 456 789';
		$email2 = ( $instance ) ? esc_attr($instance['email2']) : 'example@gmail.com';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'industries'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('designation1')); ?>"><?php esc_html_e('Designation:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Designation', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('designation1')); ?>" name="<?php echo esc_attr($this->get_field_name('designation1')); ?>" type="text" value="<?php echo esc_attr($designation1); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('image_link1')); ?>"><?php esc_html_e('Image Link:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Image link here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('image_link1')); ?>" name="<?php echo esc_attr($this->get_field_name('image_link1')); ?>" type="text" value="<?php echo esc_attr($image_link1); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('name1')); ?>"><?php esc_html_e('Name:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Name here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('name1')); ?>" name="<?php echo esc_attr($this->get_field_name('name1')); ?>" type="text" value="<?php echo esc_attr($name1); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone1')); ?>"><?php esc_html_e('Phone Number:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Phone Number here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone1')); ?>" name="<?php echo esc_attr($this->get_field_name('phone1')); ?>" type="text" value="<?php echo esc_attr($phone1); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email1')); ?>"><?php esc_html_e('Email Address:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Email Address here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email1')); ?>" name="<?php echo esc_attr($this->get_field_name('email1')); ?>" type="text" value="<?php echo esc_attr($email1); ?>" />
        </p>
        
        
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('designation2')); ?>"><?php esc_html_e('Designation:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Designation', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('designation2')); ?>" name="<?php echo esc_attr($this->get_field_name('designation2')); ?>" type="text" value="<?php echo esc_attr($designation2); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('image_link2')); ?>"><?php esc_html_e('Image Link:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Image link here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('image_link2')); ?>" name="<?php echo esc_attr($this->get_field_name('image_link2')); ?>" type="text" value="<?php echo esc_attr($image_link2); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('name2')); ?>"><?php esc_html_e('Name:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Name here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('name2')); ?>" name="<?php echo esc_attr($this->get_field_name('name2')); ?>" type="text" value="<?php echo esc_attr($name2); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone2')); ?>"><?php esc_html_e('Phone Number:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Phone Number here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone2')); ?>" name="<?php echo esc_attr($this->get_field_name('phone2')); ?>" type="text" value="<?php echo esc_attr($phone2); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email2')); ?>"><?php esc_html_e('Email Address:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Email Address here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email2')); ?>" name="<?php echo esc_attr($this->get_field_name('email2')); ?>" type="text" value="<?php echo esc_attr($email2); ?>" />
        </p>
                
		<?php 
	}
	
}

/// Our Brochures
class Bunch_Brochures extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Brochures', /* Name */esc_html__('Industries Our Brochures','industries'), array( 'description' => esc_html__('Show the info Our Brochures', 'industries' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget);?>
      		
            <!--Our Brochures-->
            <div class="brochures">
            	<?php echo balanceTags($before_title.$title.$after_title); ?><br/>
                <ul class="brochures-lists">
                    <li><a href="<?php echo esc_url($instance['pdf']); ?>"><span><?php esc_html_e('PDF', 'industries'); ?></span><?php esc_html_e('Our Brouchure.pdf', 'industries'); ?><i class="fa fa-download"></i></a></li>
                    <li><a href="<?php echo esc_url($instance['word']); ?>"><span><?php esc_html_e('TXT', 'industries'); ?></span><?php esc_html_e('Our Brouchure.txt', 'industries'); ?><i class="fa fa-download"></i></a></li>
                </ul>
            </div>
            
		<?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['pdf'] = $new_instance['pdf'];
		$instance['word'] = $new_instance['word'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Our Brochures', 'industries');
		$pdf = ( $instance ) ? esc_attr($instance['pdf']) : '#';
		$word = ($instance) ? esc_attr($instance['word']) : '#';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'industries'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('pdf')); ?>"><?php esc_html_e('PDF Link:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('PDF link here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('pdf')); ?>" name="<?php echo esc_attr($this->get_field_name('pdf')); ?>" type="text" value="<?php echo esc_attr($pdf); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('word')); ?>"><?php esc_html_e('Work Doc Link:', 'industries'); ?></label>
            <input placeholder="<?php esc_html_e('Word link here', 'industries');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('word')); ?>" name="<?php echo esc_attr($this->get_field_name('word')); ?>" type="text" value="<?php echo esc_attr($word); ?>" />
        </p>
                
		<?php 
	}
	
}