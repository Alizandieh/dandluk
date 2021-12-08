<?php 
//Kameleon Demo Importer Dashboard
add_action( 'admin_menu', 'kameleon_dashboard_menu' );
function kameleon_dashboard_menu(){
    //Add Admin Menu Page
    add_menu_page(
        'Kameleon',     
        'Kameleon',    
        'manage_options',  
        'kameleon-framework',    
        'kameleon_framework_render',
        KAMELEON_PLUGIN_URL.'/assets/images/smallicon.png'
    );

    //Add Submenu Page For The Demo Importer
    add_submenu_page(
    	'kameleon-framework',
    	'Demo Importer',
    	'Demo Importer',
    	'manage_options',
    	'kameleon-demo-importer',
    	'kameleon_demo_importer_render'
    );

    //Add Submenu Page For The Advanced Area
    add_submenu_page(
        'kameleon-framework',
        'Custom Settings',
        'Custom Settings',
        'manage_options',
        'kameleon-custom-settings',
        'kameleon_custom_settings_render'
    );

    //Add Submenu Page For The Kameleon Header Builder
    /*add_submenu_page(
        'kameleon-framework',
        'Kameleon Header Builder',
        'Header Builder',
        'manage_options',
        'kameleon-header-builder',
        'kameleon_header_builder_render'
    );*/
}

function kameleon_framework_render(){
	?>
	<div id="sy-mmaker-wrapper">
		<?php 			
			include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/welcome.php'); 
		?>		
	</div>	
	<?php 
}


function kameleon_demo_importer_render(){		
?>	
	<div id="sy-mmaker-wrapper">	       					
		<?php include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/demo-import.php'); ?>
	</div>
<?php 
}


function kameleon_custom_settings_render(){
    ?>  
    <div id="sy-mmaker-wrapper">                            
        <?php include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/custom-settings.php'); ?>
    </div>   
<?php 
}

function kameleon_header_builder_render(){
   ?>   
    <div id="sy-mmaker-wrapper">                            
        <?php include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/header-builder.php'); ?>
    </div>
<?php  
}



?>