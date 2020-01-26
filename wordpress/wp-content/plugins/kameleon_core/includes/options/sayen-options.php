<?php 
define( 'KM_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'KM_PLUGIN_URL', plugin_dir_url('/') );
//Iporting the redux Options Framework
require_once KM_PLUGIN_PATH.'redux/ReduxCore/framework.php';

$opt_name = "kameleon";
if(is_multisite()){
	$opt_name = "kameleon".get_current_blog_id();
}	

function sayenRemoveDemoModeLink() { 
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'sayenRemoveDemoModeLink');
if ( ! class_exists( 'Redux' ) )
   	return;


	//Some Array Options That will be used many times
	$top_icon_hover_style = array(
		'none' => 'None',		        	
		'rotate' => 'Rotate',
		'flip_horizon' => 'Flip horizontally',
		'flip_vertical' => 'Flip Vertically', 
		'grow' => 'Grow', 
		'shrink' => 'Shrink' 
	);

	$footer_bottom_style = array(
		'style1' => 'Icons Left + Menu Right',
	    'style2' => 'Menu Left + Icons Right',
	    'style3' => 'Icon Center',
	    'style4' => 'Menu Center',
	);

	//All Pages Title Bar Syling
	$titlebar_style = array(
		'style1' => 'Page Title + Path',
	    'style2' => 'Path + Page Title',
	    'style3' => 'Center',
	);

	//Single Post Type Page Title Bar
	$single_titlebar_style = array(
		'style1' => 'Page Title + Path',
	    'style2' => 'Path + Page Title',
	    'style3' => 'Page Title + Path (center)',
	    'style4' => 'Page Title + Next/Previous ',
	    'style5' => 'Next/Previous + Page Title',
	    'style6' => 'Page Title + Next/Previous (center)'
	);
	//Single Post Title bar for Post And Portfolions
	$singlepp_titlebar_style = array(
		'style1' => 'Page Title + Path',
	    'style2' => 'Path + Page Title',
	    'style3' => 'Page Title + Path (center)',
	    'style4' => 'Page Title + Next/Previous ',
	    'style5' => 'Next/Previous + Page Title',
	    'style6' => 'Page Title + Next/Previous (center)',
	    'style7' => 'Title + Info (center)'
	);


	$top_icon_style = array(
		'none' => 'None',
		'circle' => 'Circle ', 
		'Square' => 'Square'
	);

	$positions = array(
		'left' => 'Left',
		'center' => 'Center', 
		'right' => 'Right'
	);

	function kameleon_top_menu_style(){
		return array(
			'none' => 'None',
			'border' => 'Border', 			        
		);
		
	}

	function kameleon_top_style(){
		return  array(
		    'style1' => 'Info Left + Icons Right',
		    'style2' => 'Icons Left + Info Right', 
		    'style3' => 'Info Left + Menu Right',
		    'style4' => 'Menu Left + Info Right',
		    'style5' => 'Icons Left + Menu Right', 
		    'style6' => 'Menu Left + Icons Right'
		);
		
	}

	function kameleon_modern_icon_style(){		
		return array(
			'normal_color' 			=> 'Normal With Color',
			'normal_background' 	=> 'Normal With Background Color',
			'real_color'	 		=> 'Normal Real Social Color (Color)',
			'real_background'		=> 'Normal Real Social Color (Background)',
			'from_top'				=> 'Show From Top',
			'from_left'				=> 'Show From left',
			'from_right'				=> 'Show From Right',
			'from_bottom'			=> 'Show From Bottom',
			'scale_show'			=> 'Scale Show',	
			'effect_1'				=> 'Effect 1',
			'effect_2'				=> 'Effect 2',
			'effect_3'				=> 'Effect 3',
			'effect_4'				=> 'Effect 4',
			'effect_5'				=> 'Effect 5',
			'effect_6'				=> 'Effect 6',
			'effect_7'				=> 'Effect 7',
			'effect_8'				=> 'Effect 8',
		);
		
	}


	function kameleon_social_array_list(){
		return array(
			'facebook' 			=> 'Facebook',
			'twitter' 			=> 'Twitter',
			'instagram' 		=> 'Instagram',
			'youtube' 			=> 'YouTube',
			'linkedin' 			=> 'LinkedIn',
			'google' 			=> 'Google',
			'behance' 			=> 'Behance',
			'vimeo' 			=> 'Vimeo',
			'flickr' 			=> 'Flickr',
			'skype' 			=> 'Skype',
			'pinterest' 		=> 'Pinterest',
			'dribbble' 			=> 'Dribbble',
			'twitch' 			=> 'Twitch',
			'soundcloud' 		=> 'SoundCloud',
			'github' 			=> 'GitHub',
			'vine' 				=> 'Vine',
			'tumblr' 			=> 'Tumblr',
			'foursquare' 		=> 'Foursquare',
			'rss' 				=> 'Rss',
		);
	}
	function kameleon_socialshare_array_list(){
		return array(
			'facebook' 			=> 'Facebook',
			'twitter' 			=> 'Twitter',
			'reddit' 			=> 'Reddit',			
			'linkedin' 			=> 'LinkedIn',
			'google' 			=> 'Google',
			'pinterest' 		=> 'Pinterest',		
		);
	}

	//Arrow Previous Next Style
	$arrowStyle = array(
	      	'style1'		=> '&#8594; Long Arrow',
	      	'style2' 		=> '&#10142; Normal Arrow',
	      	'style3' 		=> '&#62; Arrow Sign',
	      	'style4' 		=> '&#8250; Wide Arrow Sign',
	      	'style5' 		=> '&#10148; ArrowHead  Arrow',
	      	'style6' 		=> '&#10147; Bottom Light Arrow',
	      	'style7' 		=> '&#10146; Top Light Arrow',
	      	'style8' 		=> '&#10139; Drafting Arrow',
	      	'style9' 		=> '&#10137; Heavy Arrow',
	      	'style10' 		=> '&#10140; Heavy Round Arrow',
	      	'style11'		=> '&#8658; Double Arrow',
	      	'style12' 		=> '&#8680; Border Arrow',
	      	'style13' 		=> '&#8702; Open Arrow',
	      	'style14' 		=> '&#10141; Triangle Headed Arrow',
	      );

	


	$args = Array(
		'display_name'=>'<img id="reduxLogo" src="'. KM_PLUGIN_URL.'kameleon_core/assets/images/option-logo.png'.'"> Kameleon Theme',
		'display_version' => 'Version '.KAMELEON_PLUGIN_VERSION,
	    'opt_name'    => $opt_name,
		'dev_mode' => false,
		'network_admin' => true,
		'menu_title' => 'Theme Options',
		'page_title' => 'kameleon Theme Options',
		'page_slug' => 'kameleon_theme_options',
		'admin_bar' => false,
		'disable_tracking' => true,
		'menu_type'            => 'submenu',
		'allow_sub_menu'       => true,
		'page_parent'          => "kameleon-framework",
		'page_permissions'     => 'manage_options',
	);

	Redux::setArgs ($opt_name, $args);

	//Adding Redux Kameleon Options Sections
	$sections = array();	
	$sy_options = get_option($opt_name);
	
	//Including All The Theme Options Sections
	define('SECTIONS_PATH',KM_PLUGIN_PATH.'sections/');

	require_once SECTIONS_PATH . 'configuration.php';
	require_once SECTIONS_PATH . 'logos.php';
	require_once SECTIONS_PATH . 'headers.php';
	require_once SECTIONS_PATH . 'header-v1.php';
	require_once SECTIONS_PATH . 'header-v2.php';
	require_once SECTIONS_PATH . 'header-v3.php';
	require_once SECTIONS_PATH . 'header-v4.php';
	require_once SECTIONS_PATH . 'header-v5.php';
	require_once SECTIONS_PATH . 'header-v6.php';
	//new headers
	require_once SECTIONS_PATH . 'header-v7.php';
	require_once SECTIONS_PATH . 'header-v8.php';
	require_once SECTIONS_PATH . 'header-v9.php';
	require_once SECTIONS_PATH . 'header-v10.php';

	require_once SECTIONS_PATH . 'side-header-info.php';
	require_once SECTIONS_PATH . 'full-header-info.php';

	require_once SECTIONS_PATH . 'header-steaky.php';
	require_once SECTIONS_PATH . 'slide-widgetarea.php';
	require_once SECTIONS_PATH . 'layout.php';
	require_once SECTIONS_PATH . 'menu.php';
	require_once SECTIONS_PATH . 'responsive.php';
	require_once SECTIONS_PATH . 'titlebar.php';
	require_once SECTIONS_PATH . 'post.php';
	require_once SECTIONS_PATH . 'portfolio.php';
	
	
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	//WooCommerce Configuration
	if(is_plugin_active( 'woocommerce/woocommerce.php' )){
		require_once SECTIONS_PATH . 'woocommerce.php';
	}

	
	require_once SECTIONS_PATH . 'slidingbar.php';
	require_once SECTIONS_PATH . 'sidebar.php';
	require_once SECTIONS_PATH . 'footer.php';
	require_once SECTIONS_PATH . 'social-links.php';
	require_once SECTIONS_PATH . 'typography.php';
	Redux::setSections($opt_name, $sections);



	//Function to Return the type of search on headers
function kameleon_header_shared_elements($hvSec,$elements){	
	$headersArray = kameleon_headers_type_plugin();
	$hvType = $headersArray[$hvSec];
	$arrayShareElements = 
		array(
			array(
	       		'id' => 'top_'.$hvType.'_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Top Header Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for top header section for this header', 'kameleon'),
	        ),	
			 array(
		        'id' => $hvType.'_top',
		        'type' => 'switch',
		        'title' => esc_html__('Top Extra Header Information', 'kameleon'), 
		        'subtitle' => esc_html__('Choose to display the top small header (for extra information)', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

		    array(
		        'id' => $hvType.'_unique_top',
		        'type' => 'switch',
		        'required' => array($hvType.'_top', '=' , '1'),
		        'title' => esc_html__('Have a unique top design', 'kameleon'), 
		        'subtitle' => esc_html__('', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
		    array(
		        'id' => $hvType.'_top_style',
		        'type' => 'select',
		        'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Top Extra-Header Style', 'kameleon'), 
		        'subtitle' => esc_html__('Choose to be applied for the extra top header', 'kameleon'),
		        'options' =>kameleon_top_style(),
				'default' => 'style1'
			),
		    array(
        		'id' => $hvType.'_top_background',
		        'type' => 'color',
		        'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Extra header top background color', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a color to be applied for the top extra header background', 'kameleon'),
		        'default' => 'transparent',
				'validate' => 'color'	
        	),
			 array(
			    'id'       => $hvType.'_social_array',
			    'type'     => 'select',
			    'multi'    => true,
			    'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title'    => __('Top Header  Social Icons', 'kameleon'), 
			    'subtitle' => __('Choose the social links you want to include on the Top Header.', 'kameleon'),			   
			    'options'  => kameleon_social_array_list(),
			    'default'  => array('facebook','twitter','youtube','google','linkedin','instagram')
			),
			array(
        		'id' => $hvType.'_top_height',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Top Extra-Header Height', 'kameleon'), 
		        'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),        
		        'default'  => '30',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '150'
        	),
			array(
        		'id' => $hvType.'-top_scheme',
		        'type' => 'button_set',
		        'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Top header Color Scheme ', 'kameleon'), 
		        'subtitle' => esc_html__('choose the top color scheme You wan to use', 'kameleon'),
		        'options' => array(
			        'light' => 'Light', 
			        'dark' => 'Dark'
			     ), 
		        'default' => 'light',	
        	),

        	//Top Header Icons Begin
        	//FOR LIGHT Background 
        	array(
	       		'id' => 'top'.$hvType.'light',
	       		'type' => 'raw',	
	       		'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
	       		'title' =>esc_html__('Top Light Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the top when light background', 'kameleon'),
	        ), 
        	array(
        		'id' => $hvType.'_light-top_color',
		        'type' => 'color',
		        'title' => esc_html__('Extra header top color (light)', 'kameleon'), 
		        'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'subtitle' => esc_html__('Choose a color to be applied for the top extra header Color', 'kameleon'),
		        'default' => '#777',
				'validate' => 'color'	
        	),
			array(
			    'id'       => $hvType.'-light-icon_style',
			    'type'     => 'select',
			    'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title'    => __('Social Icons Style Effect (light)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => $hvType.'-light-icon_scheme_enabled',
		        'type' => 'switch',
		        'required' => array(
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Enable Icon Color Scheme (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => $hvType.'-light-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array($hvType.'-light-icon_scheme_enabled' , '=','0'),		        	
					array($hvType.'-light-icon_style' , '!=','real_color'),
					array($hvType.'_top', '=' , '1'),
					array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Icon Color (light)', 'kameleon'),			  
		        'default' => array(
		        	'color' => '#777',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 
		    array(
		        'id' => $hvType.'-light-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array($hvType.'-light-icon_style' , '!=','normal_color'),
					array($hvType.'-light-icon_style' , '!=','real_color'),
					array($hvType.'-light-icon_style' , '!=','real_background'),
					array($hvType.'-light-icon_style' , '!=','effect_2'),
					array($hvType.'-light-icon_style' , '!=','effect_3'),
					array($hvType.'-light-icon_style' , '!=','effect_4'),
					array($hvType.'-light-icon_style' , '!=','effect_5'),
		        	array($hvType.'-light-icon_style' , '!=','effect_6'),
		        	array($hvType.'_top', '=' , '1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Icon Default Background Color (light)', 'kameleon'),	
		        'default' => array(
		        	'color' => '#000',
		        	'alpha' => 0,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 

			array(
		        'id' => $hvType.'-light-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array($hvType.'-light-icon_style' , '!=','normal_color'),		        	
		        	array($hvType.'-light-icon_style' , '!=','real_background'),		        	
		        	array($hvType.'-light-icon_style' , '!=','real_color'),
		        	array($hvType.'-light-icon_style' , '!=','effect_2'),
		        	array($hvType.'-light-icon_style' , '!=','effect_3'),
		        	array($hvType.'-light-icon_style' , '!=','effect_4'),
		        	array($hvType.'-light-icon_style' , '!=','effect_5'),
		        	array($hvType.'-light-icon_style' , '!=','effect_6'),
		        	array($hvType.'-light-icon_style' , '!=','effect_7'),		
		        	array($hvType.'_top', '=' , '1'),        
		        	array($hvType.'_unique_top', '=' , '1'),	
		        ),
		        'title' => esc_html__('Icon Color On Hover (light)', 'kameleon'),	
		        'default' => array(
		        	'color' => '#fff',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 

			array(
	        	'id' => $hvType.'-light-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title' => esc_html__('Icon Size (px) (light)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => $hvType.'-light-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		       'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title' => esc_html__('Icon Background Size(px) (light)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => $hvType.'-light-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title' => esc_html__('Icon Background Radius Size(px) (light)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => $hvType.'-light-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),	       
			    'title' => esc_html__('Icon Margins(px) (light)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        //DARK Background
	        array(
	       		'id' => 'top'.$hvType.'dark',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Top Dark Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the top when dark background', 'kameleon'),
	        ), 
        	array(
        		'id' => $hvType.'_dark-top_color',
		        'type' => 'color',
		        'title' => esc_html__('Extra header top color (dark)', 'kameleon'), 
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'subtitle' => esc_html__('Choose a color to be applied for the top extra header Color', 'kameleon'),
		        'default' => '#777',
				'validate' => 'color'	
        	),
			array(
			    'id'       => $hvType.'-dark-icon_style',
			    'type'     => 'select',
			    'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title'    => __('Social Icons Style Effect (dark)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => $hvType.'-dark-icon_scheme_enabled',
		        'type' => 'switch',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Enable Icon Color Scheme (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => $hvType.'-dark-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array($hvType.'-dark-icon_scheme_enabled' , '=','0'),		        	
					array($hvType.'-dark-icon_style' , '!=','real_color'),
		        	array($hvType.'_top', '=' , '1'),	        	
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Icon Color (dark)', 'kameleon'),			  
		        'default' => array(
		        	'color' => '#777',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 
		    array(
		        'id' => $hvType.'-dark-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array($hvType.'-dark-icon_style' , '!=','normal_color'),
					array($hvType.'-dark-icon_style' , '!=','real_color'),
					array($hvType.'-dark-icon_style' , '!=','real_background'),
					array($hvType.'-dark-icon_style' , '!=','effect_2'),
					array($hvType.'-dark-icon_style' , '!=','effect_3'),
					array($hvType.'-dark-icon_style' , '!=','effect_4'),
					array($hvType.'-dark-icon_style' , '!=','effect_5'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_6'),
		        	array($hvType.'_top', '=' , '1'),	        	
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Icon Default Background Color (dark)', 'kameleon'),	
		        'default' => array(
		        	'color' => '#000',
		        	'alpha' => 0,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 

			array(
		        'id' => $hvType.'-dark-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array($hvType.'-dark-icon_style' , '!=','normal_color'),		        	
		        	array($hvType.'-dark-icon_style' , '!=','real_background'),		        	
		        	array($hvType.'-dark-icon_style' , '!=','real_color'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_2'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_3'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_4'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_5'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_6'),
		        	array($hvType.'-dark-icon_style' , '!=','effect_7'),	
		        	array($hvType.'_top', '=' , '1'),	        	
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
		        'title' => esc_html__('Icon Color On Hover (dark)', 'kameleon'),	
		        'default' => array(
		        	'color' => '#fff',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 

			array(
	        	'id' => $hvType.'-dark-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title' => esc_html__('Icon Size (px) (dark)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => $hvType.'-dark-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		       'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title' => esc_html__('Icon Background Size(px) (dark)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => $hvType.'-dark-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),
			    'title' => esc_html__('Icon Background Radius Size(px) (dark)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => $hvType.'-dark-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),	       
			    'title' => esc_html__('Icon Margins(px) (dark)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	         array(
        		'id' => $hvType.'_top_menu_style',
		        'type' => 'select',
		         'required' => array(
		        	array($hvType.'_top','=','1'),
		        	array($hvType.'_unique_top', '=' , '1'),
		        ),	 
		        'title' => esc_html__('Extra top header Menu Style', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a style for the top extra header  menu', 'kameleon'),
		        'options' => kameleon_top_menu_style(), 
		        'default' => 'none',	
        	),
	        //Search Section
			array(
	       		'id' => $hvSec.'_search_section',
	       		'type' => 'raw',			       	
	       		'title' =>esc_html__('Search Header Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for the search section on this header', 'kameleon'),
	        ), 
			array(
				'id' => $hvSec.'_search_enabled',
			    'type' => 'switch',
				'title' => esc_html__('Enable search on headers', 'kameleon'), 		        
			    'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
			),
			array(
				'id' => $hvSec.'_search_unique',
			    'type' => 'switch',
				'title' => esc_html__('Unique Search Settings', 'kameleon'), 		        
			    'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
			),
	        array(
        		'id' => $hvSec.'_search_style',
		        'type' => 'select',
		        'required' => array(
		        	array($hvSec.'_search_enabled', '=' , '1'),
		        	array($hvSec.'_search_unique', '=' , '1'),
		        ),
		        'title' => esc_html__('Search Style', 'kameleon'), 	
		        'subtitle' => esc_html__('Choose a style for the header search area', 'kameleon'),	        
		        'options' => array(
		        	'wide' => 'Wide Search', 
		        	'small' => 'Small Input', 
		        	'dropdown' => 'Drop Down', 
		        	'fullscreen' => 'Full Screen', 
		        	'topfixed' => 'Top Fixed', 
		        ), 
		        'default' => 'wide',	
        	),
        	

        	//Search FullScreen Styling
        	array(
		        'id' => $hvSec.'_searchfull_background',
		        'type' => 'color_rgba',				
				 'required' => array(
		        	array($hvSec.'_search_style', '=' , 'fullscreen'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'title' => esc_html__('Search FullScreen Background Color', 'kameleon'), 		        
		        'default' => array(
		        	'color' => '#000000',
		        	'alpha' => 0.95,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),        
        	),
        	array(
        		'id' => $hvSec.'_searchfull_animation',
		        'type' => 'select',
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'fullscreen'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'title' => esc_html__('Search FullScreen Animation', 'kameleon'), 	
		        'subtitle' => esc_html__('Choose an animation style for showing action', 'kameleon'),	        
		        'options' => kameleon_fullscreen_section_animations(), 
		        'default' => 'scalecentersmall',	
        	),
        	array(
        		'id' => $hvSec.'_searchfull_bordercolor',
		        'type' => 'color',
		        'title' => esc_html__('Search FullScreen Input Border Color', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'fullscreen'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),	        
		        'default' => '#333',
				'validate' => 'color'	
        	),

        	array(
        		'id' => $hvSec.'_searchfull_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search FullScreen Text Color', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'fullscreen'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),		        
		        'default' => '#bbb',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchfull_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search FullScreen Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'fullscreen'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '52',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '80'
        	),

        	array(
        		'id' => $hvSec.'_searchfull_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Search FullScreen Input Text Alignement', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'fullscreen'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),			   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),
        	

        	//Search Wide Styling
        	array(
        		'id' => $hvSec.'_searchwide_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Wide Background Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'wide'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchwide_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Wide Text Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'wide'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#888',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchwide_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Wide Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'wide'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '32',
			    'min'      => '16',
			    'step'     => '1',
			    'max'      => '46'
        	),
        	array(
        		'id' => $hvSec.'_searchwide_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Search Wide Input Text Alignement', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_unique', '=' , '1'),
		        	array($hvSec.'_search_style', '=' , 'wide'),		        	
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),			   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),

        	//Search Drop Down Styling	
        	array(
        		'id' => $hvSec.'_searchdrop_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Area Background', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_unique', '=' , '1'),
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fafafa',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_border',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Border Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_inputback',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Input Background', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_inputborder',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Input Border', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Text Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_unique', '=' , '1'),
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#777',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_iconcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Icon Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_iconbackground',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Icon Background', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#111',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchdrop_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Drop Down Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'dropdown'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '15',
			    'min'      => '11',
			    'step'     => '1',
			    'max'      => '22'
        	),

        	//Search Small Input
        	array(
        		'id' => $hvSec.'_searchsmall_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Small Background', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'small'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchsmall_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Small Text Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'small'),		        	
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchsmall_border',
		        'type' => 'color',
		        'title' => esc_html__('Search Small Border Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'small'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchsmall_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Small Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'small'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '13',
			    'min'      => '11',
			    'step'     => '1',
			    'max'      => '22'
        	),
        	//Search Top Fixed Styling
        	array(
        		'id' => $hvSec.'_searchtopfixed_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Top Fixed Background Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'topfixed'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchtopfixed_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Top Fixed Text Color', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'topfixed'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#888',
				'validate' => 'color'	
        	),
        	array(
        		'id' => $hvSec.'_searchtopfixed_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Top Fixed Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array($hvSec.'_search_style', '=' , 'topfixed'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '32',
			    'min'      => '16',
			    'step'     => '1',
			    'max'      => '46'
        	),
        	array(
        		'id' => $hvSec.'_searchtopfixed_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Search Top Fixed Input Text Alignement', 'kameleon'),
		        'required' => array(
		        	array($hvSec.'_search_style', '=' , 'topfixed'),		        	
		        	array($hvSec.'_search_unique', '=' , '1'),
				 	array($hvSec.'_search_enabled', '=' , '1'), 
		        ),		 		   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),
        	array(
				'id' => $hvSec.'_cart_enabled_header',
			    'type' => 'switch',
				'title' => esc_html__('Enable WooCommerce Cart for this header', 'kameleon'), 		        
				'subtitle' => esc_html__('Only if WooCommerce is active', 'kameleon'), 		        
			    'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
			),				        	
	);
	
	//Slide Widget Area Array 	
	if( !in_array($hvSec, kameleon_headers_no_swa_plugin()) ){
		array_push($arrayShareElements, //Header Slide Widget Area 
        	array(
	       		'id' => $hvSec.'_swa_section',
	       		'type' => 'raw',	
	       		'title' =>esc_html__('Slide Widget Area Section', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('If active it will add a hamburger icon to the header and active a cool hidden slide widget area', 'kameleon'),
	        ), 
	        array(
				'id' => $hvSec.'_swa_enabled',
			    'type' => 'switch',
				'title' => esc_html__('Enable Slide Widget Area', 'kameleon'), 		        				
			    'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
			),

	        array(
        		'id' => $hvSec.'_type_swa',
		        'type' => 'button_set',
		        'required' => array(
		        	array($hvSec.'_swa_enabled', '=' , '1')
		        ),
		        'title' => esc_html__('Slide Widget Area Color Scheme', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the type of color scheme', 'kameleon'),
		        'options' => array(
			        'light' => 'Light', 
			        'dark' => 'Dark'
			     ), 
		        'default' => 'dark',	
        	),

        	array(
		        'id' => $hvSec.'_background_swa',
		        'type' => 'background',
		         'required' => array(
		        	array($hvSec.'_swa_enabled', '=' , '1')
		        ),
		        'title' => esc_html__('Slide Widget Area Background', 'kameleon'), 		        
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#141414',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),

			array(
        		'id' => $hvSec.'_icon_swa',
		        'type' => 'select',
		        'required' => array(
		        	array($hvSec.'_swa_enabled', '=' , '1')
		        ),
		        'title' => esc_html__('Hamburger Button effect style', 'kameleon'), 		        
		        'options' => array(
			        '1' => 'Style 1', 
			        '2' => 'Style 2',
			        '3' => 'Style 3', 
			        '4' => 'Style 4',			     	
			     ), 
		        'default' => '1',	
        	),	

        	array(
       		'id' => $hvSec.'_animation_swa',
	        'type' => 'select',
	        'title' => esc_html__('Show SWA Animation', 'kameleon'), 		        
	       	'desc' =>esc_html__('Choose an Animation to be applied for the slide widget area', 'kameleon'),		        
	        'options' => array(
		        'push' => 'Push Content', 
		        'parallax' => 'Parallax'
		     ), 
	        'default' => 'push',	
       	),

        	 array(
        		'id' => $hvSec.'_position_swa',
		        'type' => 'button_set',
		        'title' => esc_html__('Slide Wiget Area Position', 'kameleon'), 
		        'required' => array(
		        	array($hvSec.'_swa_enabled', '=' , '1')		        	
		        ),			   
		        'options' => array(
			        'left' => 'Left', 			      
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),
        	array(
        		'id' => $hvSec.'_sidebar_swa',
		        'type'      => 'select',
    			'data'      => 'sidebars',
		        'required' => array(
		        	array($hvSec.'_swa_enabled', '=' , '1')
		        ),
		        'title' => esc_html__('Widget Area', 'kameleon'), 		        
		        'subtitle' => esc_html__('Choose Widget Area for the slide bar', 'kameleon'), 		        
		        'default' => 'kameleon-slidewidget',	
        	)
        );
	}



	if( in_array($hvSec, kameleon_headers_side_side_plugin()) ){
		array_push($arrayShareElements,array(
	       	'id' => 'side_'.$hvType.'_settings',
	       	'type' => 'raw',		
	       	'title' =>esc_html__('Side Header Settings', 'kameleon'),
	       	'full_width' => true,	   
			'desc' => esc_html__('Change the settings for side header', 'kameleon'),
	    ),
	    array(
       		'id' => $hvType.'_position_side',
	        'type' => 'button_set',
	        'title' => esc_html__('Side Header Position', 'kameleon'), 		        
	       	'desc' =>esc_html__('Choose the Side Header Position', 'kameleon'),		        
	        'options' => array(
		        'left' => 'Left', 
		        'right' => 'Right',
		     ), 
	        'default' => 'left',	
       	),
		array(
	        'id' => $hvType.'_background_side',
	        'type' => 'background',
	        'title' => esc_html__('Background Settings', 'kameleon'), 		      
	        'preview' =>false,		        
			'default'  => array(
		        'background-color' => '#121212',
		        'background-image' => '',
				'background-repeat' => '',
				'background-position' => '',
				'background-size' => '',
				'background-attachment' => '',
		    )						
	    ),             	
       
        array(
        	'id' => $hvType.'_link_height_side',
		    'type' => 'slider',
	        'display_value' => 'text',
		    'title' => esc_html__('Link Height', 'kameleon'), 			    
		    'default'  => '50',
			'min'      => '20',
			'step'     => '1',
			'max'      => '75',	
        ),       
		array(
        	'id' => $hvType.'_fontsize_side',
		    'type' => 'slider',
	        'display_value' => 'text',
		    'title' => esc_html__('Links Font Size', 'kameleon'), 			    
		    'default'  => '14',
			'min'      => '0',
			'step'     => '1',
			'max'      => '25',	
        ),
		array(
		    'id' => $hvType.'_color_side',
		    'type' => 'color',
		    'title' => esc_html__('Text Color', 'kameleon'), 			    		        
			'default' => '#888',
			'validate' => 'color'
		), 
		array(
		    'id' => $hvType.'_hover_color_side',
		    'type' => 'color',
		    'title' => esc_html__('Link Text Color (Hover)', 'kameleon'), 			    		        
			'default' => '#eee',
			'validate' => 'color'
		), 
		array(
		    'id' => $hvType.'_hover_background_side',
		    'type' => 'color',
		    'title' => esc_html__('Hover Link Background Color', 'kameleon'), 			    		        
			'default' => '#0f0f0f',
			'validate' => 'color'
		), 
		
		array( 
		    'id'       => $hvType.'_border_side',
		    'type'     => 'border',
		    'all' 	   => false,
		    'left' 	   => false,
		    'right' 	   => false,
		    'title'    => esc_html__('Link Borders', 'kameleon'),
		    'default'  => array(
		        'border-color'  => '#222', 
		        'border-style'  => 'dotted', 
		        'border-top'    => '0px', 
		        'border-bottom' => '1px', 
		    )
		),
		array(
        	'id' => $hvType.'_width_side',
		    'type' => 'slider',
	        'display_value' => 'text',
		    'title' => esc_html__('Header Width ', 'kameleon'), 			    
		    'default'  => '350',
			'min'      => '40',
			'step'     => '1',
			'max'      => '500',	
        ),
        array(
		    'id'=> $hvType.'_padding_side',
		    'type'=> 'spacing',
		    'units' => array( 'px'),
		    'mode'=> 'padding',
		    'title'=> esc_html__('Padding Options', 'kameleon'),
		    'default'=> array(
		        'padding-top'     => '40px', 			       
		        'padding-bottom'  => '30px',
		        'padding-left'     => '30px', 			       
		        'padding-right'  => '30px', 			       			        
		   		'units' =>  'px',
		    	
		    )
		),
		array(
        		'id' => $hvSec.'_icon_side',
		        'type' => 'select',
		        'title' => esc_html__('Hamburger Button effect style', 'kameleon'), 		        
		        'options' => array(
			        '1' => 'Style 1', 
			        '2' => 'Style 2',
			        '3' => 'Style 3', 
			        '4' => 'Style 4',			     	
			     ), 
		       'default' => '1',	
        ),	
       	 array(
       		'id' => $hvType.'_animation_side',
	        'type' => 'select',
	        'title' => esc_html__('Show Side Header Animation', 'kameleon'), 		        
	       	'desc' =>esc_html__('Choose an Animation to be applied for the side header when showing the header', 'kameleon'),		        
	        'options' => array(
		        'push' => 'Push Content', 
		        'parallax' => 'Parallax'
		     ), 
	        'default' => 'push',	
       	),
        array(
       		'id' => $hvType.'_content_position_side',
	        'type' => 'button_set',
	        'title' => esc_html__('Content Position', 'kameleon'), 		        
	       	'desc' =>esc_html__('Links Position', 'kameleon'),		        
	        'options' => array(
		        'left' => 'Left', 
		        'center' => 'Center',
		        'right' => 'Right',
		     ), 
	        'default' => 'center',	
       	),
       	array(
       		'id' => $hvType.'_logo_position_side',
	        'type' => 'button_set',
	        'title' => esc_html__('Logo Position', 'kameleon'), 		        
	       	'desc' =>esc_html__('Logo Position', 'kameleon'),		        
	        'options' => array(
		        'left' => 'Left', 
		        'center' => 'Center',
		        'right' => 'Right',
		     ), 
	        'default' => 'center',	
       	),
		array(
       		'id' => $hvType.'_logo_type_side',
	        'type' => 'button_set',
	        'title' => esc_html__('Logo Type', 'kameleon'), 		        
	        'options' => array(
		        'normal' => 'Normal', 
		        'transparent' => 'Transparent'
		     ), 
	        'default' => 'transparent',	
       	),
       	array(
        	'id' => $hvType.'_logo_marginTop_side',
		    'type' => 'slider',
	        'display_value' => 'text',
		    'title' => esc_html__('Logo Margin Top', 'kameleon'), 			    
		    'default'  => '0',
			'min'      => '0',
			'step'     => '1',
			'max'      => '200',	
        ),
       	array(
        	'id' => $hvType.'_logo_width_side',
		    'type' => 'slider',
	        'display_value' => 'text',
		    'title' => esc_html__('Logo Width ', 'kameleon'), 			    
		    'default'  => '210',
			'min'      => '40',
			'step'     => '1',
			'max'      => '500',	
        ), 
        array(
        	'id' => $hvType.'_logo_height_side',
		    'type' => 'slider',
	        'display_value' => 'text',
		    'title' => esc_html__('Logo Height ', 'kameleon'), 			    
		    'default'  => '65',
			'min'      => '20',
			'step'     => '1',
			'max'      => '250',	
        ),
        array(
	      	'id' => 'top_'.$hvType.'_drop_settings',
	      	'type' => 'raw',		
	      	'title' =>esc_html__('Drop Menu Colors', 'kameleon'),
	      	'full_width' => true,	   
		    'desc' => esc_html__('Change drop menu colors and settings', 'kameleon'),
	    ),	
        array(
		    'id' => $hvType.'_background_drop_side',
		    'type' => 'color',
		    'title' => esc_html__('Drop Menu Background Color', 'kameleon'), 			    		        
			'default' => '#121212',
			'validate' => 'color'
		), 
        array(
		    'id' => $hvType.'_color_drop_side',
		    'type' => 'color',
		    'title' => esc_html__('Drop Menu Link Color', 'kameleon'), 			    		        
			'default' => '#888',
			'validate' => 'color'
		), 
		array(
		    'id' => $hvType.'_background_hover_drop_side',
		    'type' => 'color',
		    'title' => esc_html__('Drop Link Background Color (Hover)', 'kameleon'), 			    		        
			'default' => '#111',
			'validate' => 'color'
		), 
		array(
		    'id' => $hvType.'_color_hover_drop_side',
		    'type' => 'color',
		    'title' => esc_html__('Drop Link Text Color (Hover)', 'kameleon'), 			    		        		   
			'default' => '#fff',
			'validate' => 'color'
		),

		array(
       		'id' => $hvType.'_info_scheme',
	        'type' => 'button_set',
	        'title' => esc_html__('Information Area Scheme', 'kameleon'), 		        
	       	'desc' =>esc_html__('Choose the color scheme on the information area', 'kameleon'),		        
	        'options' => array(
		        'dark' => 'Dark', 		      
		        'light' => 'Light',
		     ), 
	        'default' => 'dark',	
       	)

		);
	}

	if( in_array($hvSec, kameleon_headers_fullscreen_plugin()) ){
		array_push($arrayShareElements,
			array(
		       	'id' => 'fullscreen_'.$hvType.'_settings',
		       	'type' => 'raw',		
		       	'title' =>esc_html__('FullScreen Header Settings', 'kameleon'),
		       	'full_width' => true,	   
				'desc' => esc_html__('Change the settings for the fullscreen header', 'kameleon'),
		    ),	
		    array(
        		'id' => 'full_color_scheme',
		        'type' => 'button_set',
		        'title' => esc_html__('Choose the Color Scheme For the FullScreen', 'kameleon'), 		       
		        'options' => array(
			        'light' => 'Light', 
			        'dark' => 'Dark'
			     ), 
		        'default' => 'dark',	
        	),
		    array(
        		'id' => $hvType.'_show_animation_fullscreen',
		        'type' => 'select',
		        'title' => esc_html__('Show Header FullScreen Animation', 'kameleon'), 	
		        'subtitle' => esc_html__('Choose an animation style for showing action', 'kameleon'),	        
		        'options' => kameleon_fullscreen_section_animations(), 
		        'default' => 'scalecentersmall',	
        	), 
        	array(
        		'id' => $hvSec.'_icon_side',
		        'type' => 'select',
		        'title' => esc_html__('Hamburger Button effect style', 'kameleon'), 		        
		        'options' => array(
			        '1' => 'Style 1', 
			        '2' => 'Style 2',
			        '3' => 'Style 3', 
			        '4' => 'Style 4',			     	
			     ), 
		       'default' => '1',	
      		 ),	
		    
		    array(
        		'id' => $hvType.'_text_size_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Links Font Size', 'kameleon'), 
		        'subtitle' => esc_html__('Apply font size for the fullscreen menu header links', 'kameleon'),
		        'default'  => '24',
			    'min'      => '14',
			    'step'     => '1',
			    'max'      => '45',	
        	),  
        	array(
        		'id' => $hvType.'_link_height_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Links Height', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a height for the fullscreen menu header links', 'kameleon'),
		        'default'  => '70',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '150',	
        	) ,
        	array(
        		'id' => $hvType.'_link_spacing_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Letter Spacing', 'kameleon'), 
		        'default'  => '3',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '7',	
        	),   
        	array(
        		'id' => $hvType.'_link_weight_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Font Weight', 'kameleon'), 
		        'default'  => '400',
			    'min'      => '100',
			    'step'     => '100',
			    'max'      => '700',	
        	),   
        	array(
        		'id' => $hvType.'_link_transform_fullscreen',
		        'type' => 'select',
		        'title' => esc_html__('Text Transform', 'kameleon'), 		        
		        'options' => array(
			        'uppercase' => 'Uppercase', 
			        'lowercase' => 'Lowercase',
			        'capitalize' => 'Capitalize', 
			    ), 
		       'default' => 'uppercase',	
       		 ),
        	array(
	       		'id' => 'full_'.$hvType.'_logo_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Fullscreen Menu Logo', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for fullscreen logo image', 'kameleon'),
	        ),	
        	array(
        		'id' => $hvType.'_logo_align_fullscreen',
		        'type' => 'select',
		        'title' => esc_html__('Logo FullScreen Align', 'kameleon'), 
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center'
			     ), 
		        'default' => 'left',	
        	),
        	array(
        		'id' => $hvType.'_logo_width_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Logo FullScreen Width (px)', 'kameleon'), 
		        'default'  => '190',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '650',	
        	), 
        	array(
        		'id' => $hvType.'_logo_height_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Logo FullScreen Height (px)', 'kameleon'), 
		        'default'  => '65',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '450',	
        	), 
        	array(
        		'id' => $hvType.'_logo_mtop_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Logo FullScreen Margin Top (px)', 'kameleon'), 
		        'default'  => '15',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '100',	
        	),
        	array(
	       		'id' => 'full_'.$hvType.'_bottom_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Fullscreen Bottom Area', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for fullscreen menu bottom area', 'kameleon'),
	        ),	
	        array(
        		'id' => $hvType.'_copyright_style_fullscreen',
		        'type' => 'select',
		        'title' => esc_html__('Bottom Area Style', 'kameleon'), 
		        'options' => array(
			        'style1' => 'Style 1', 
			        'style2' => 'Style 2'
			     ), 
		        'default' => 'style1',	
        	),
	        array(
        		'id' => $hvType.'_copyright_size_fullscreen',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Copyright Font-Size', 'kameleon'), 
		        'default'  => '15',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '40',	
        	)
		    
	    );
	}



	foreach ($arrayShareElements as $singleShareElements) {
		array_push($elements, $singleShareElements);
	}
	return $elements;
}

//FullScreen Show Animations
function kameleon_fullscreen_section_animations(){
	return array(
		"radius" => "Radius",
		"leftshow" => "Show From Left",
		"rightshow" => "Show From Right",
		"topshow" => "Show From Top",
		"bottomshow" => "Show From Bottom",
		"scalebottom" => "Scale From Bottom",
		"scaletop" => "Scale From Top",
		"scalecenter" => "Center Scale",
		"scalecentersmall" => "Center Scale Small",
		"scalecenterradius" => "Center Scale Radius",
		"topleftcorner" => "Show From Top Left Corner",
		"bottomleftcorner" => "Show From Bottom Left Corner",
		"toprightcorner" => "Show From Top Right Corner",
		"bottomrightcorner" => "Show From Bottom Right Corner"	
	);
}

//Slide Widget Area Animation
function kameleon_swa_animations(){
	return array(																										
		"slide" => "Simple Slide",	
		"parallax" => "Parallax Effect",	
	);
}




?>