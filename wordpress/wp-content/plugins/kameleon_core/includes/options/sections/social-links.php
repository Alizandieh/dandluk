<?php 
/* ================================================================== *\
   ==                  	    S E C T I O N                          ==
   ==============           SOCIAL LINKS    		   ============== 
\* ================================================================== */
	//Social Links
	$sections[] = array(
        'title' => 'Contact & Social',
		'icon' => 'fa fa-share-alt',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Social & Contact information ', 'kameleon'),
        'fields' => array(  
        	array(		        
        		'id' =>'contact_phone' ,
		        'type' => 'text',
		        'title' => esc_html__('Phone Number', 'kameleon'), 		        
		        'default' => '0673492434'
		    ), 

		    array(		        
        		'id' =>'contact_email' ,
		        'type' => 'text',
		        'title' => esc_html__('Email', 'kameleon'), 		        
		        'default' => 'email@contact.com'
		    ), 

		    array(
		        'id' => 'contact_gmap',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Goolgle maps on Contact pages', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 


		    array(		        
        		'id' =>'contact_address' ,
		        'type' => 'text',
		        'title' => esc_html__('Address', 'kameleon'), 
		        'required' => array('contact_gmap', '=' , '1'),		        
		        'default' => 'Eiffel Tower Paris, France'
		    ),

		    array(
        		'id' => 'contact_gmap_zoom',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Map Zoom', 'kameleon'),
		        'required' => array('contact_gmap', '=' , '1'), 
		        'subtitle' => esc_html__('', 'kameleon'),
		        'default'  => '15',
			    'min'      => '1',
			    'step'     => '1',
			    'max'      => '50',	
        	),

		    array(		        
			    'id' =>'facebook_url' ,
				'type' => 'text',
				'title' => esc_html__('Facebook', 'kameleon'), 		        
				'default' => '#'
			),
			array(		        
			    'id' =>'twitter_url' ,
				'type' => 'text',
				'title' => esc_html__('Twitter', 'kameleon'), 		        
				'default' => '#'
			),
			array(		        
			    'id' =>'instagram_url' ,
				'type' => 'text',
				'title' => esc_html__('Instagram', 'kameleon'), 		        
				'default' => '#'
			),
			array(		        
			    'id' =>'youtube_url' ,
				'type' => 'text',
				'title' => esc_html__('YouTube', 'kameleon'), 		        
				'default' => '#'
			),
			array(		        
			    'id' =>'linkedin_url' ,
				'type' => 'text',
				'title' => esc_html__('LinkedIn', 'kameleon'), 		        
				'default' => '#'
			),
			array(		        
			    'id' =>'google_url' ,
				'type' => 'text',
				'title' => esc_html__('Google Plus', 'kameleon'), 		        
				'default' => '#'
			),
			array(		        
			    'id' =>'behance_url' ,
				'type' => 'text',
				'title' => esc_html__('Behance', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'vimeo_url' ,
				'type' => 'text',
				'title' => esc_html__('Vimeo', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'flickr_url' ,
				'type' => 'text',
				'title' => esc_html__('Flickr', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'skype_url' ,
				'type' => 'text',
				'title' => esc_html__('Skype', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'pinterest_url' ,
				'type' => 'text',
				'title' => esc_html__('Pinterest', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'dribbble_url' ,
				'type' => 'text',
				'title' => esc_html__('Dribbble', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'twitch_url' ,
				'type' => 'text',
				'title' => esc_html__('Twitch', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'soundcloud_url' ,
				'type' => 'text',
				'title' => esc_html__('SoundCloud', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'github_url' ,
				'type' => 'text',
				'title' => esc_html__('GitHub', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'vine_url' ,
				'type' => 'text',
				'title' => esc_html__('Vine', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'tumblr_url' ,
				'type' => 'text',
				'title' => esc_html__('Tumblr', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'foursquare_url' ,
				'type' => 'text',
				'title' => esc_html__('Foursquare', 'kameleon'), 		        
				'default' => ''
			),
			array(		        
			    'id' =>'rss_url' ,
				'type' => 'text',
				'title' => esc_html__('RSS', 'kameleon'), 		        
				'default' => ''
			),
        ),
    );
?>