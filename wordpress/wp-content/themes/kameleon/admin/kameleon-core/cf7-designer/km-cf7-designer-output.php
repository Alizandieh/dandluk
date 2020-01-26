<?php 
//Kameleon CF7 Handlers 
//add_action( 'wpcf7_init', 'kameleon_cf7_designer_add_shortcode_handlers' );
add_action( 'init', 'kameleon_cf7_designer_add_shortcode_handlers' );
add_action( 'after_setup_theme', 'kameleon_cf7_designer_add_shortcode_handlers' );
function kameleon_cf7_designer_add_shortcode_handlers(){
  	wpcf7_add_shortcode(array( 'text', 'text*', 'email', 'email*', 'url', 'url*', 'tel', 'tel*' ),'kameleon_cf7_text_handler', true ); 
  	wpcf7_add_shortcode( array( 'textarea', 'textarea*' ), 'kameleon_cf7_textarea_handler', true );
 	wpcf7_add_shortcode( 'submit', 'kameleon_cf7_submit_handler' );
}

//functions to change the output of the shortcodes
function kameleon_cf7_text_handler($tag){

 $tag = new WPCF7_FormTag( $tag );
  if ( empty( $tag->name ) )
    return '';

  $validation_error = wpcf7_get_validation_error( $tag->name );

  $class = wpcf7_form_controls_class( $tag->type, 'wpcf7-text' );

  if ( in_array( $tag->basetype, array( 'email', 'url', 'tel' ) ) )
    $class .= ' wpcf7-validates-as-' . $tag->basetype;

  if ( $validation_error )
    $class .= ' wpcf7-not-valid';

  $atts = array();

  $atts['size'] = $tag->get_size_option( '40' );
  $atts['maxlength'] = $tag->get_maxlength_option();
  $atts['minlength'] = $tag->get_minlength_option();

  if ( $atts['maxlength'] && $atts['minlength'] && $atts['maxlength'] < $atts['minlength'] ) {
    unset( $atts['maxlength'], $atts['minlength'] );
  }

  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $id_key = substr(str_shuffle($chars),0,8);

  $atts['class'] = $tag->get_class_option( $class );  
  $input_half = ''; 
  if( strpos($atts['class'], 'cf7-input-half') !== false)
    $input_half = 'cf7-input-half';

  $atts['class'] .= ' km_cf7-input '; 
  $atts['id'] = $tag->get_id_option();
  $for_id = $tag->get_id_option();
  $atts['tabindex'] = $tag->get_option( 'tabindex', 'int', true );

  if(trim($atts['id']) == "" || empty($atts['id'])){
    $atts['id'] = 'kmcf7-'.$tag->name.''.$id_key;    
    $for_id = 'kmcf7-'.$tag->name.''.$id_key;
  }

  if ( $tag->has_option( 'readonly' ) )
    $atts['readonly'] = 'readonly';

  if ( $tag->is_required() )
    $atts['aria-required'] = 'true';

  $atts['aria-invalid'] = $validation_error ? 'true' : 'false';

  $value = (string) reset( $tag->values );
  $placeholder = '';  
  if($tag->has_option( 'watermark' )  || $tag->has_option( 'placeholder' )){
    $placeholder = $value;
    $value ='';     
  }
   else{
    $placeholder = str_replace("-"," ",$tag->name);
    $value =''; 
   }



  $value = $tag->get_default_option( $value );

  $value = wpcf7_get_hangover( $tag->name, $value );

  $atts['value'] = $value;

  if ( wpcf7_support_html5() ) {
    $atts['type'] = $tag->basetype;
  } else {
    $atts['type'] = 'text';
  }

  $atts['name'] = $tag->name;

  $atts = wpcf7_format_atts( $atts );

  $html = sprintf(
    '<span class="wpcf7-form-control-wrap %1$s km_cf7-input-container '.$input_half.'">     
      <input %2$s onfocus="km_cf7_designer_focus(this)" onblur="km_cf7_designer_blur()"/>
      <label class="km_cf7-label" for="'.$for_id.'" data-content="'.$placeholder.'">
        <span class="km_cf7_label-content" data-content="'.$placeholder.'">'.$placeholder.'</span>
      </label>
      %3$s
    </span>',
    sanitize_html_class( $tag->name ), $atts, $validation_error );
  return $html;
  //<span class="wpcf7-form-control-wrap %1$s"><input %2$s />%3$s</span>
} 


function kameleon_cf7_textarea_handler( $tag ) {

  $tag = new WPCF7_FormTag( $tag );

  if ( empty( $tag->name ) )
    return '';

  $validation_error = wpcf7_get_validation_error( $tag->name );

  $class = wpcf7_form_controls_class( $tag->type );
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $id_key = substr(str_shuffle($chars),0,8);

  if ( $validation_error )
    $class .= ' wpcf7-not-valid';

  $atts = array();

  $atts['cols'] = $tag->get_cols_option( '40' );
  $atts['rows'] = $tag->get_rows_option( '10' );
  $atts['maxlength'] = $tag->get_maxlength_option();
  $atts['minlength'] = $tag->get_minlength_option();

  if ( $atts['maxlength'] && $atts['minlength'] && $atts['maxlength'] < $atts['minlength'] ) {
    unset( $atts['maxlength'], $atts['minlength'] );
  }

  $atts['class'] = $tag->get_class_option( $class );
  $atts['class'] .= ' km_cf7-input km_cf7-textarea '; 
  $atts['id'] = $tag->get_id_option();
  $atts['tabindex'] = $tag->get_option( 'tabindex', 'int', true );
  $for_id = $tag->get_id_option();
  if(trim($atts['id']) == "" || empty($atts['id'])){
    $atts['id'] = 'kmcf7-'.$tag->name.''.$id_key;    
    $for_id = 'kmcf7-'.$tag->name.''.$id_key;
  }
  
  if ( $tag->has_option( 'readonly' ) ) {
    $atts['readonly'] = 'readonly';
  }

  if ( $tag->is_required() ) {
    $atts['aria-required'] = 'true';
  }

  $atts['aria-invalid'] = $validation_error ? 'true' : 'false';

  $value = empty( $tag->content )
    ? (string) reset( $tag->values )
    : $tag->content;

  $placeholder = '';  
  if($tag->has_option( 'watermark' )  || $tag->has_option( 'placeholder' )){
    $placeholder = $value;
    $value ='';     
  }
   else{
    $placeholder = str_replace("-"," ",$tag->name);
    $value =''; 
   }

  $value = $tag->get_default_option( $value );

  $value = wpcf7_get_hangover( $tag->name, $value );

  $atts['name'] = $tag->name;

  $atts = wpcf7_format_atts( $atts );
  $html = sprintf(
    '<span class="km_cf7-input-container km_cf7-textarea-container">
      <textarea %2$s onfocus="km_cf7_designer_focus(this)" onblur="km_cf7_designer_blur()">%3$s</textarea>
      <label class="km_cf7-label" for="'.$for_id.'" data-content="'.$placeholder.'">
        <span class="km_cf7_label-content" data-content="'.$placeholder.'">'.$placeholder.'</span>
      </label>
      %4$s
    </span>',
    sanitize_html_class( $tag->name ), $atts,
    esc_textarea( $value ), $validation_error );

  return $html;
}


function kameleon_cf7_submit_handler( $tag ) {
	
  $tag = new WPCF7_FormTag( $tag );

  $class = wpcf7_form_controls_class( $tag->type );

  $atts = array();

  $atts['class'] = $tag->get_class_option( $class );
  $atts['class'] .= ' km_cf7-button ';
  $atts['id'] = $tag->get_id_option();
  $atts['tabindex'] = $tag->get_option( 'tabindex', 'int', true );

  $value = isset( $tag->values[0] ) ? $tag->values[0] : '';

  if ( empty( $value ) )
    $value = __( 'Send', 'contact-form-7' );

  $atts['type'] = 'submit';
  $atts['value'] = $value;

  $atts = wpcf7_format_atts( $atts );

  $html = sprintf( '<div class="km_cf7-submit-container">
        <div class="km_cf7-submit-insider">
          <div class="km_cf7-submit-btn-txt km_cf7-btn-txt-r">'.$value.'</div>
          <div class="km_cf7-submit-btn-txt km_cf7-btn-txt-h">'.$value.'</div>
          <div class="km_cf7-btn-bg-r"></div><div class="km_cf7-btn-bg-h"></div>
          <input %1$s />
        </div>
      </div>', $atts );

  return $html;
}
?>