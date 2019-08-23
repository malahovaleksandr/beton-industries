<?php
$bunch_sc = array();

$bunch_sc['bunch_our_services']	=	array(
					"name" => __("Our Services", BUNCH_NAME),
					"base" => "bunch_our_services",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Services.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
									"type" => "checkbox",
									"holder" => "div",
									"class" => "",
									"heading" => __('Style Two', BUNCH_NAME ),
									"param_name" => "style_two",
									'value' => array(__('Style Two for Show Title Section', BUNCH_NAME )=>true),
									"description" => __('Choose whether you want to show Title Section.', 'SH_NAME' )
								),
							)
						);
$bunch_sc['bunch_about_industries']	=	array(
					"name" => __("About Industries", BUNCH_NAME),
					"base" => "bunch_about_industries",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show About Industries.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text1",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),	
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text2",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),	
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Button Link', BUNCH_NAME ),
								   "param_name" => "btn_link",
								   "description" => __('Enter The Button Link to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Button Text', BUNCH_NAME ),
								   "param_name" => "btn_text",
								   "description" => __('Enter The Button Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Phone No', BUNCH_NAME ),
								   "param_name" => "phone",
								   "description" => __('Enter The Phone No to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Video Image', BUNCH_NAME ),
								   "param_name" => "video_img",
								   "description" => __('Enter section Background Image To Show', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Video Link', BUNCH_NAME ),
								   "param_name" => "video_link",
								   "description" => __('Enter The Video Link to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Quot Description', BUNCH_NAME ),
								   "param_name" => "quot_des",
								   "description" => __('Enter The Quot Description to Show.', BUNCH_NAME )
								),	
							)
						);				
$bunch_sc['bunch_our_team']	=	array(
					"name" => __("Our Team", BUNCH_NAME),
					"base" => "bunch_our_team",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Team.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'team_category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
							)
						);						
$bunch_sc['bunch_call_to_action']	=	array(
					"name" => __("Call To Action", BUNCH_NAME),
					"base" => "bunch_call_to_action",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Call To Action.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Background Image', BUNCH_NAME ),
								   "param_name" => "bg_img",
								   "description" => __('Enter section Background Image To Show', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Contents', BUNCH_NAME ),
								   "param_name" => "content",
								   "description" => __('Enter The Content to Show.', BUNCH_NAME )
								),
							)
						);						
$bunch_sc['bunch_our_testimonial']	=	array(
					"name" => __("Our Testimonial", BUNCH_NAME),
					"base" => "bunch_our_testimonial",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Testimonial.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
							)
						);						
$bunch_sc['bunch_our_clients']	=	array(
					"name" => __("Our Clients", BUNCH_NAME),
					"base" => "bunch_our_clients",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Clients.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Describtion', BUNCH_NAME ),
								   "param_name" => "describtion",
								   "description" => __('Enter The Description for Own Help.', BUNCH_NAME )
								),
							)
						);						
$bunch_sc['bunch_latest_news']	=	array(
					"name" => __("Latest News", BUNCH_NAME),
					"base" => "bunch_latest_news",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Latest News.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
							)
						);						
$bunch_sc['bunch_request_a_call_back']	=	array(
					"name" => __("Request A Call Back", BUNCH_NAME),
					"base" => "bunch_request_a_call_back",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Request A Call Back.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Background Image', BUNCH_NAME ),
								   "param_name" => "bg_img",
								   "description" => __('Enter section Background Image To Show', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Contents', BUNCH_NAME ),
								   "param_name" => "content",
								   "description" => __('Enter The Section Contents to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Section Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea_raw_html",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Contact Form7 Shortcode', BUNCH_NAME ),
								   "param_name" => "contact_form",
								   "description" => __('Enter Contact Form7 Shortcode', BUNCH_NAME )
								),
							)
						);						
$bunch_sc['bunch_about_history'] = array(
			"name" => __("About History", BUNCH_NAME),
			"base" => "bunch_about_history",
			"class" => "",
			"category" => __('Industries', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			'description' => __('Show About History', BUNCH_NAME),
			"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text One', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Two', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
						   'group' => esc_html__('Billing Address 1', BUNCH_NAME)
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text3",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
						   'group' => esc_html__('Billing Address 1', BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
						   'group' => esc_html__('Billing Address 2', BUNCH_NAME)
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text4",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
						   'group' => esc_html__('Billing Address 2', BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Phone No', BUNCH_NAME ),
						   "param_name" => "phone",
						   "description" => __('Enter The Phone No to Show.', BUNCH_NAME ),
						   'group' => esc_html__('Billing Address 2', BUNCH_NAME)
						),
						// params group
			            array(
			                'type' => 'param_group',
			                'value' => '',
			                'param_name' => 'services',
							'group' => esc_html__('Our Services', BUNCH_NAME),
			                'params' => array(
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Year', BUNCH_NAME ),
											'param_name' => 'year',
										),
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Title', BUNCH_NAME ),
											'param_name' => 'title',
										), 
										array(
											'type' => 'textarea',
											'value' => '',
											'heading' => esc_html__('Text', BUNCH_NAME ),
											'param_name' => 'text',
										),
									)
								),
							),
						);
$bunch_sc['bunch_why_choose_us'] = array(
			"name" => __("Why Choose Us", BUNCH_NAME),
			"base" => "bunch_why_choose_us",
			"class" => "",
			"category" => __('Industries', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			'description' => __('Show Why Choose Us', BUNCH_NAME),
			"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Video Image", BUNCH_NAME),
						   "param_name" => "video_img",
						   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Video Link', BUNCH_NAME ),
						   "param_name" => "video_link",
						   "description" => __('Enter The Video Link to Show.', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Quot Text', BUNCH_NAME ),
						   "param_name" => "quot_text",
						   "description" => __('Enter The Quot Text to Show.', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text one', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Two', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
						),
						// params group
			            array(
			                'type' => 'param_group',
			                'value' => '',
			                'param_name' => 'our_skill',
							'group' => esc_html__('Our Skills', BUNCH_NAME),
			                'params' => array(
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Title', BUNCH_NAME ),
											'param_name' => 'title',
										), 
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Value', BUNCH_NAME ),
											'param_name' => 'value',
										),
									)
								),
							),
						);						
$bunch_sc['bunch_our_team_2']	=	array(
					"name" => __("Our Team 2", BUNCH_NAME),
					"base" => "bunch_our_team_2",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Team 2.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Number of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'team_category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
									"type" => "checkbox",
									"holder" => "div",
									"class" => "",
									"heading" => __('Style Two', BUNCH_NAME ),
									"param_name" => "style_two",
									'value' => array(__('Style Two for Show Title Section', BUNCH_NAME )=>true),
									"description" => __('Choose whether you want to show Title Section.', 'SH_NAME' )
								), 
							)
						);						
$bunch_sc['bunch_faqs_1']	=	array(
					"name" => __("Faqs One", BUNCH_NAME),
					"base" => "bunch_faqs_1",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Faqs One.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'faqs_category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
							)
						);						
$bunch_sc['bunch_call_to_action_2']	=	array(
					"name" => __("Call To Action 2", BUNCH_NAME),
					"base" => "bunch_call_to_action_2",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Call To Action 2.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Background Image", BUNCH_NAME),
								   "param_name" => "bg_img",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Button Link', BUNCH_NAME ),
								   "param_name" => "btn_link",
								   "description" => __('Enter The Button Link to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Button Text', BUNCH_NAME ),
								   "param_name" => "btn_text",
								   "description" => __('Enter The Button Text to Show.', BUNCH_NAME )
								),
							)
						);
$bunch_sc['bunch_faqs_2'] = array(
			"name" => __("Faqs 2", BUNCH_NAME),
			"base" => "bunch_faqs_2",
			"class" => "",
			"category" => __('Industries', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			'description' => __('Show Faqs 2', BUNCH_NAME),
			"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Contact Title', BUNCH_NAME ),
						   "param_name" => "contact_title",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea_raw_html",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Contact Form7 Shortcode', BUNCH_NAME ),
						   "param_name" => "contact_form",
						   "description" => __('Enter Contact Form7 Shortcode', BUNCH_NAME )
						),
						// params group
			            array(
			                'type' => 'param_group',
			                'value' => '',
			                'param_name' => 'faqs_tab',
							'group' => esc_html__('Faqs Tab', BUNCH_NAME),
			                'params' => array(
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Title', BUNCH_NAME ),
											'param_name' => 'title',
										), 
										array(
											'type' => 'textarea',
											'value' => '',
											'heading' => esc_html__('Text', BUNCH_NAME ),
											'param_name' => 'text',
										),
									)
								),
							),
						);
$bunch_sc['bunch_agricultural_enginering']	=	array(
					"name" => __("Agricultural Enginering", BUNCH_NAME),
					"base" => "bunch_agricultural_enginering",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Agricultural Enginering.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text1",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text2",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Section Image", BUNCH_NAME),
								   "param_name" => "img",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Link', BUNCH_NAME ),
								   "param_name" => "link",
								   "description" => __('Enter The Image Link to Show.', BUNCH_NAME )
								),
							)
						);
$bunch_sc['bunch_areas_of_research'] = array(
			"name" => __("Area of Research", BUNCH_NAME),
			"base" => "bunch_areas_of_research",
			"class" => "",
			"category" => __('Industries', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			'description' => __('Show Area of Research', BUNCH_NAME),
			"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter The Text to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Section Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link",
						   "description" => __('Enter The External Link to Show.', BUNCH_NAME ),
						),
						// params group
			            array(
			                'type' => 'param_group',
			                'value' => '',
			                'param_name' => 'accordions',
							'group' => esc_html__('Our Accordions', BUNCH_NAME),
			                'params' => array(
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Title', BUNCH_NAME ),
											'param_name' => 'title',
										), 
										array(
											'type' => 'textarea',
											'value' => '',
											'heading' => esc_html__('Text', BUNCH_NAME ),
											'param_name' => 'text',
										),
									)
								),
							),
						);
$bunch_sc['bunch_service_tabs'] = array(
			"name" => __("Services Tabs", BUNCH_NAME),
			"base" => "bunch_service_tabs",
			"class" => "",
			"category" => __('Industries', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			'description' => __('Show Services Tabs', BUNCH_NAME),
			"params" => array(
						// params group
			            array(
			                'type' => 'param_group',
			                'value' => '',
			                'param_name' => 'service_tab',
							'group' => esc_html__('Our Services', BUNCH_NAME),
			                'params' => array(
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Title', BUNCH_NAME ),
											'param_name' => 'title',
										), 
										array(
											'type' => 'textarea',
											'value' => '',
											'heading' => esc_html__('Text', BUNCH_NAME ),
											'param_name' => 'text',
										),
									)
								),
							),
						);
$bunch_sc['bunch_research_engineering']	=	array(
					"name" => __("Research Engineering", BUNCH_NAME),
					"base" => "bunch_research_engineering",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Research Engineering.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Section Image one", BUNCH_NAME),
								   "param_name" => "image1",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Image Description', BUNCH_NAME ),
								   "param_name" => "des1",
								   "description" => __('Enter The Image Description to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Section Image Two", BUNCH_NAME),
								   "param_name" => "image2",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Image Description', BUNCH_NAME ),
								   "param_name" => "des2",
								   "description" => __('Enter The Image Description to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
							)
						);
$bunch_sc['bunch_what_we_offer'] = array(
			"name" => __("What We Offer", BUNCH_NAME),
			"base" => "bunch_what_we_offer",
			"class" => "",
			"category" => __('Industries', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			'description' => __('Show What We Offer', BUNCH_NAME),
			"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Title to Show.', BUNCH_NAME )
						),
						// params group
			            array(
			                'type' => 'param_group',
			                'value' => '',
			                'param_name' => 'services',
							'group' => esc_html__('Our Services', BUNCH_NAME),
			                'params' => array(
										array(
										   "type" => "attach_image",
										   "holder" => "div",
										   "class" => "",
										   "heading" => __("Section Image", BUNCH_NAME),
										   "param_name" => "image",
										),
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('External Url', BUNCH_NAME ),
											'param_name' => 'link',
										),
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Title', BUNCH_NAME ),
											'param_name' => 'title',
										), 
										array(
											'type' => 'textarea',
											'value' => '',
											'heading' => esc_html__('Text', BUNCH_NAME ),
											'param_name' => 'text',
										),
										array(
											'type' => 'textfield',
											'value' => '',
											'heading' => esc_html__('Button Text', BUNCH_NAME ),
											'param_name' => 'btn_text',
										), 
									)
								),
							),
						);
$bunch_sc['bunch_chemical_research_engineering']	=	array(
					"name" => __("Chemical Research Engineering", BUNCH_NAME),
					"base" => "bunch_chemical_research_engineering",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Chemical Research Engineering.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Section Image one", BUNCH_NAME),
								   "param_name" => "image",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text One', BUNCH_NAME ),
								   "param_name" => "text1",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Two', BUNCH_NAME ),
								   "param_name" => "text2",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
							)
						);
$bunch_sc['bunch_mechanical_engineering']	=	array(
					"name" => __("Mechanical Engineering", BUNCH_NAME),
					"base" => "bunch_mechanical_engineering",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Mechanical Engineering.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Mechanical Engineering', BUNCH_NAME)
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Mechanical Engineering', BUNCH_NAME)
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Video Image", BUNCH_NAME),
								   "param_name" => "image",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME),
								   'group' => esc_html__('Mechanical Engineering', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Video Link', BUNCH_NAME ),
								   "param_name" => "video_link",
								   "description" => __('Enter The Video Link to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Mechanical Engineering', BUNCH_NAME)
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text1",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Mechanical Engineering', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title1",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Service Output', BUNCH_NAME)
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text2",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Service Output', BUNCH_NAME)
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Chart Image", BUNCH_NAME),
								   "param_name" => "image1",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME),
								   'group' => esc_html__('Service Output', BUNCH_NAME)
								),
							)
						);
$bunch_sc['bunch_our_achievments']	=	array(
					"name" => __("Our Achievments", BUNCH_NAME),
					"base" => "bunch_our_achievments",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Achievments.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Image", BUNCH_NAME),
								   "param_name" => "image",
								   "description" => __("Enter the Section Image to show.", BUNCH_NAME),
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Quot Text', BUNCH_NAME ),
								   "param_name" => "quot_text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text1",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Signature Image", BUNCH_NAME),
								   "param_name" => "sign_img",
								   "description" => __("Enter the Signature Image to show.", BUNCH_NAME),
								),
							)
						);
$bunch_sc['bunch_testimonial_mixitup']	=	array(
					"name" => __("Testimonial Mixitup", BUNCH_NAME),
					"base" => "bunch_testimonial_mixitup",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Testimonial Mixitup.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Excluded Categories ID', BUNCH_NAME ),
								   "param_name" => "exclude_cats",
								   "description" => __('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Button Text', BUNCH_NAME ),
								   "param_name" => "btn_text",
								   "description" => __('Enter The Button Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Button Link', BUNCH_NAME ),
								   "param_name" => "btn_link",
								   "description" => __('Enter The Button Link to Show.', BUNCH_NAME )
								),
							)
						);						
$bunch_sc['bunch_blog_list_view']	=	array(
					"name" => __("Blog List View", BUNCH_NAME),
					"base" => "bunch_blog_list_view",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Blog List View.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
							)
						);
$bunch_sc['bunch_blog_grid_view']	=	array(
					"name" => __("Blog Grid View", BUNCH_NAME),
					"base" => "bunch_blog_grid_view",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Blog Grid View.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text Limit', BUNCH_NAME ),
								   "param_name" => "text_limit",
								   "description" => __('Enter The Limit Of Text to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Number', BUNCH_NAME ),
								   "param_name" => "num",
								   "description" => __('Enter Number of Items to Show.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __( 'Category', BUNCH_NAME ),
								   "param_name" => "cat",
								   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
								   "description" => __( 'Choose Category.', BUNCH_NAME )
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order By", BUNCH_NAME),
								   "param_name" => "sort",
								   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
								array(
								   "type" => "dropdown",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Order", BUNCH_NAME),
								   "param_name" => "order",
								   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
								   "description" => __("Enter the sorting order.", BUNCH_NAME)
								),
							)
						);
$bunch_sc['bunch_contact_info']	=	array(
					"name" => __("Contact Information", BUNCH_NAME),
					"base" => "bunch_contact_info",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Contact Information.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Contact Information', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Address', BUNCH_NAME ),
								   "param_name" => "address",
								   "description" => __('Enter The Address to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Contact Information', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Phone No', BUNCH_NAME ),
								   "param_name" => "phone",
								   "description" => __('Enter The Phone NO to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Contact Information', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Email', BUNCH_NAME ),
								   "param_name" => "email",
								   "description" => __('Enter The Email to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Contact Information', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Fax', BUNCH_NAME ),
								   "param_name" => "fax",
								   "description" => __('Enter The Fax to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Contact Information', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title1",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Business Hours', BUNCH_NAME)
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Text', BUNCH_NAME ),
								   "param_name" => "text",
								   "description" => __('Enter The Text to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Business Hours', BUNCH_NAME)
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __("Features Text", BUNCH_NAME),
								   "param_name" => "feature_str",
								   "description" => __("Enter the Section Features to show.", BUNCH_NAME),
								   'group' => esc_html__('Business Hours', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title2",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Twitter', BUNCH_NAME)
								),
								array(
								   "type" => "textarea",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Contents', BUNCH_NAME ),
								   "param_name" => "content",
								   "description" => __('Enter The Contents to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Twitter', BUNCH_NAME)
								),
							)
						);
$bunch_sc['bunch_contact_form']	=	array(
					"name" => __("Contact Form", BUNCH_NAME),
					"base" => "bunch_contact_form",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Contact Form.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								),
								array(
								   "type" => "textarea_raw_html",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Contact Form7 Shortcode', BUNCH_NAME ),
								   "param_name" => "contact_form",
								   "description" => __('Enter Contact Form7 Shortcode', BUNCH_NAME )
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title1",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Human Resource', BUNCH_NAME)
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Section Image', BUNCH_NAME ),
								   "param_name" => "image1",
								   "description" => __('Enter section Section Image To Show', BUNCH_NAME ),
								   'group' => esc_html__('Human Resource', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Author Title', BUNCH_NAME ),
								   "param_name" => "author_title1",
								   "description" => __('Enter The Author Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Human Resource', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Phone No', BUNCH_NAME ),
								   "param_name" => "phone1",
								   "description" => __('Enter The Phone No to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Human Resource', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Email', BUNCH_NAME ),
								   "param_name" => "email1",
								   "description" => __('Enter The Email to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Human Resource', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Title', BUNCH_NAME ),
								   "param_name" => "title2",
								   "description" => __('Enter The Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Sales Department', BUNCH_NAME)
								),
								array(
								   "type" => "attach_image",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Section Image', BUNCH_NAME ),
								   "param_name" => "image2",
								   "description" => __('Enter section Section Image To Show', BUNCH_NAME ),
								   'group' => esc_html__('Sales Department', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Author Title', BUNCH_NAME ),
								   "param_name" => "author_title2",
								   "description" => __('Enter The Author Title to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Sales Department', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Phone No', BUNCH_NAME ),
								   "param_name" => "phone2",
								   "description" => __('Enter The Phone No to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Sales Department', BUNCH_NAME)
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Email', BUNCH_NAME ),
								   "param_name" => "email2",
								   "description" => __('Enter The Email to Show.', BUNCH_NAME ),
								   'group' => esc_html__('Sales Department', BUNCH_NAME)
								),
							)
						);
$bunch_sc['bunch_google_map']	=	array(
					"name" => __("Google Map", BUNCH_NAME),
					"base" => "bunch_google_map",
					"class" => "",
					"category" => __('Industries', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Google Map.', BUNCH_NAME),
					"params" => array(
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Latitude', BUNCH_NAME ),
								   "param_name" => "lat",
								   "description" => __('Enter The Latitude to Show.', BUNCH_NAME ),
								),	
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Longitude', BUNCH_NAME ),
								   "param_name" => "long",
								   "description" => __('Enter The Longitude to Show.', BUNCH_NAME ),
								),
								array(
								   "type" => "textfield",
								   "holder" => "div",
								   "class" => "",
								   "heading" => __('Mark Title', BUNCH_NAME ),
								   "param_name" => "mark_title",
								   "description" => __('Enter The Mark Title to Show.', BUNCH_NAME ),
								),
							)
						);							
								




















																																																												
/*----------------------------------------------------------------------------*/
$bunch_sc = apply_filters( '_bunch_shortcodes_array', $bunch_sc );
	
return $bunch_sc;