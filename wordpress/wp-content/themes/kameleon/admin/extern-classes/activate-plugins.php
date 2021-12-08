<?php
require_once get_template_directory(). '/admin/extern-classes/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'kameleon_register_required_plugins' );

function kameleon_register_required_plugins() {

    $plugins = array(
       
        array(
            'name'                  => 'Kameleon Core', 
            'slug'                  => 'kameleon_core', 
            'source'                =>  get_template_directory_uri() . '/plugins/kameleon_core.zip',
            'required'              =>  true, 
            'version'               =>  '1.4', 
            'force_activation'      =>  false, 
            'force_deactivation'    =>  false,
            'external_url'          =>  '', 
        ),
        array(
            'name'                  => 'Revolution Slider', 
            'slug'                  => 'revslider', 
            'source'                => get_template_directory_uri() . '/plugins/revslider.zip',
            'required'              => false, 
            'version'               => '5.4.6.2', 
            'force_activation'      => false, 
            'force_deactivation'    => false,
            'external_url'          => '', 
        ), 
         array(
            'name'                  => 'Layer Slider', 
            'slug'                  => 'LayerSlider', 
            'source'                => get_template_directory_uri() . '/plugins/LayerSlider.zip',
            'required'              => false, 
            'version'               => '6.6.1', 
            'force_activation'      => false, 
            'force_deactivation'    => false,
            'external_url'          => '', 
        ),  
        array(
            'name'                  => 'WPBakery Visual Composer', 
            'slug'                  => 'js_composer', 
            'source'                => get_template_directory_uri() . '/plugins/js_composer.zip',
            'required'              => true, 
            'version'               => '5.4.2', 
            'force_activation'      => false, 
            'force_deactivation'    => false,
            'external_url'          => '', 
        ),
        array(
            'name'                  => 'Envato Market Toolkit', 
            'slug'                  => 'Envato_Market', 
            'source'                => get_template_directory_uri() . '/plugins/envato-market.zip',
            'required'              => false, 
            'version'               => '1.0.0-RC2', 
            'force_activation'      => false, 
            'force_deactivation'    => false,
            'external_url'          => '', 
        ),
        array(
            'name'                  => 'Contact Form 7', 
            'slug'                  => 'contact-form-7',             
            'required'              => false
        )

    );

    $config = array(
        'id'           => 'kameleon',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

        /*
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'kameleon' ),
            'menu_title'                      => __( 'Install Plugins', 'kameleon' ),
            'installing'                      => __( 'Installing Plugin: %s', 'kameleon' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'kameleon' ),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop(
                'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
                'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update_maybe'      => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop(
                'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
                'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop(
                'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
                'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
                'kameleon'
            ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'kameleon'
            ),
            'update_link'                     => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'kameleon'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'kameleon'
            ),
            'return'                          => __( 'Return to Required Plugins Installer', 'kameleon' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'kameleon' ),
            'activated_successfully'          => __( 'The following plugin was activated successfully:', 'kameleon' ),
            'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'kameleon' ),  // %1$s = plugin name(s).
            'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'kameleon' ),  // %1$s = plugin name(s).
            'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'kameleon' ), // %s = dashboard link.
            'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'kameleon' ),

            'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        ),
        */
    );
    tgmpa( $plugins, $config );
}
