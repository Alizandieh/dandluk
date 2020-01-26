<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============        		 LOGOS          	   ============== 
\* ================================================================== */

//Section for the Logos
	$sections[] = array(
        'title' => 'Logos & Icons',
		'icon' => 'el el-picture',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Add your website icons & Favicon', 'kameleon'),
    
        'fields' => array(  

			//Default Website Logo
			array(
		        'id' => 'logo',
		        'type' => 'media',
		        'title' => esc_html__('Default Logo ', 'kameleon'), 		       
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/logo.png'
    			), 
		    ),

			//Default Retina Website Logo
			array(
		        'id' => 'retlogo',
		        'type' => 'media',
		        'title' => esc_html__('Retina logo ', 'kameleon'), 		        
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/logo.png'
    			), 
		    ),	

			//Default Transparent Website Logo
			array(
		        'id' => 'trslogo',
		        'type' => 'media',
		        'title' => esc_html__('Transparent logo ', 'kameleon'), 
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/transparent_logo.png'
    			), 
		    ),

			//Default Transparent Retina Website Logo
			array(
		        'id' => 'trsretlogo',
		        'type' => 'media',
		        'title' => esc_html__('Retina transparent logo ', 'kameleon'), 
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/transparent_logo.png'
    			), 
		    ),

			//Default Side Menu Website Logo
			array(
		        'id' => 'sidelogo',
		        'type' => 'media',
		        'title' => esc_html__('Side menu logo ', 'kameleon'), 
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/logo.png'
    			),
		    ),

			//Default Side Menu Website Logo Retina
			array(
		        'id' => 'retsidelogo',
		        'type' => 'media',
		        'title' => esc_html__('Retina side menu logo ', 'kameleon'), 
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/logo.png'
    			),
		    ),

		    //Transparent Default Side Menu Website Logo
			array(
		        'id' => 'trssidelogo',
		        'type' => 'media',
		        'title' => esc_html__('Transparent Side menu logo ', 'kameleon'), 		        
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/transparent_logo.png'
    			),
		    ),

			//Transparent Default Side Menu Website Logo Retina
			array(
		        'id' => 'trsretsidelogo',
		        'type' => 'media',
		        'title' => esc_html__('Transparent Retina side menu logo ', 'kameleon'), 
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/transparent_logo.png'
    			),
		    ),


		    //Default Mobile Website Logo
			array(
		        'id' => 'mobilelogo',
		        'type' => 'media',
		        'title' => esc_html__('Mobile Default Logo ', 'kameleon'), 		  
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/logo.png'
    			), 
		    ),

			//Default Transparent Mobile Website Logo
			array(
		        'id' => 'mobiletrslogo',
		        'type' => 'media',
		        'title' => esc_html__('Mobile transparent logo ', 'kameleon'), 		      
		        'preview' => true,
		        'default'  => array(
        			'url'=> KM_PLUGIN_URL.'kameleon_core/assets/images/transparent_logo.png'
    			), 
		    ),
		)        
	);	


?>