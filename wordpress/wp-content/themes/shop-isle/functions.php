<?php
/**
 * Main functions file
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */


add_filter('gettext', 'translate_reply');
add_filter('ngettext', 'translate_reply');

function translate_reply($translated) {
	$translated = str_ireplace('Shipping', 'Delivery', $translated);
	return $translated;
}

add_filter( 'woocommerce_shipping_package_name' , 'woocommerce_replace_text_shipping_to_delivery', 10, 3);

function woocommerce_replace_text_shipping_to_delivery($package_name, $i, $package){
    return sprintf( _nx( 'Delivery', 'Delivery %d', ( $i + 1 ), 'shipping', 'woocommerce' ), ( $i + 1 ) );
}


add_filter('gettext', 'text_replace', 10, 3);

/**
* change some WooCommerce labels
* @param string $translation
* @param string $text
* @param string $domain
* @return string
*/
function text_replace($translation, $text, $domain) {
    if ($domain == 'woocommerce') {
        if ($text == 'Update cart') {
            $translation = 'Update order';
        }
        if ($text == 'View cart') {
            $translation = 'View order';
        }
    }

    return $translation;
}