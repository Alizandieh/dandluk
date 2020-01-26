<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============       COMPOSER NEW PARAM TYPES       ============== 
   ==                                                              ==
   ==                                                              ==
\* ================================================================== */

/*------------------------------------------------
        Number Spinner Field
------------------------------------------------*/
if(is_plugin_active('js_composer/js_composer.php')) {  

  if(function_exists('add_shortcode_param')){
    add_shortcode_param( 'sy_number', 'sy_number_field' );
    add_shortcode_param( 'sy_fontsize', 'sy_fontsize_field' );
    add_shortcode_param( 'sy_distance', 'sy_distance_field' );
    add_shortcode_param( 'sy_search', 'sy_item_search' );
    add_shortcode_param( 'sy_multiple_select', 'sy_multiple_select_field' );    
  }

  if(function_exists('vc_add_shortcode_param')){
    vc_add_shortcode_param( 'sy_number', 'sy_number_field' );
    vc_add_shortcode_param( 'sy_fontsize', 'sy_fontsize_field' );
    vc_add_shortcode_param( 'sy_distance', 'sy_distance_field' );
    vc_add_shortcode_param( 'sy_search', 'sy_item_search' );
    vc_add_shortcode_param( 'sy_multiple_select', 'sy_multiple_select_field' );
      
  }

  function sy_number_field( $settings, $value ) {
     return '<div class="my_param_block">'
               .' <div class="sy-number-chooser sy-num-vc">
                    <div class="sy-number-chooser_but noselect" onclick="admin_minus_number(this);">-</div>
                    <input type="number" step="1" class="wpb_vc_param_value  wpb-textinput ' .
                       esc_attr( $settings['param_name'] ) . ' ' .
                       esc_attr( $settings['type'] ) . '_field input-text qty text"  size="4" name="'.esc_attr( $settings['param_name'] ).'" value="'. esc_attr( $value ) .'"   />
                    <div class="sy-number-chooser_but noselect" onclick="admin_plus_number(this);">+</div>
                  </div>
              </div>'; 
  }


  function sy_fontsize_field( $settings, $value ) {
      $dependency = $output = $outputElements = '';
      $elements = $settings['elements'];
      $defaults = ( is_array($settings['defaults']) ) ? $settings['defaults'] : array() ;
      
      $arrayValues = array();
      $arrayValues['font-size'] = ( array_key_exists('font-size',$defaults) ) ? $defaults['font-size'] : ''; 
      $arrayValues['letter-spacing'] = ( array_key_exists('letter-spacing',$defaults) ) ? $defaults['letter-spacing'] : '';
      $arrayValues['line-height'] = ( array_key_exists('line-height',$defaults) ) ? $defaults['line-height'] : '';

      $realValues = explode(";", $value); 
      foreach($realValues as $singleValue ){
        $actualValueName = explode(":",$singleValue);
        $arrayValues[$actualValueName[0]] = str_replace('px','',$actualValueName[1]); 
      }

      //Starts The Output of The Element
      $theValue = '';
      foreach($elements as $elemName => $elemValue){
          $outputElements .= '<div class="sy-fonts-elem"><span>'.$elemName.'</span><input type="number" data-name="'.$elemValue.'" value="'.$arrayValues[$elemValue].'" onchange="km_change_fontinput(this);" onkeyup="km_change_fontinput(this);" /></div>';
          if($arrayValues[$elemValue] != '')
            $theValue .= $elemValue.':'.$arrayValues[$elemValue].'px;';          
      }
      $output .= '<div class="sy-fonts-container" '.$dependency.'>'.$outputElements.
        '<input type="hidden" name="'.$settings['param_name'].'" class="wpb_vc_param_value km-fonts-value '.$settings['param_name'].' '.$settings['type'].'_field" value="'.$theValue.'" />';
      $output .='</div>';
      return $output;      
  }


function sy_distance_field( $settings, $value ) {
      $dependency = '';
      $positions = $settings['positions'];
      $distance = $settings['distance'];
      $defaults = ( is_array($settings['defaults']) ) ? $settings['defaults'] : array() ;
      
      $arrayValues = array();
      $arrayValues['top'] = ( array_key_exists('top',$defaults) ) ? $defaults['top'] : '0px'; 
      $arrayValues['bottom'] = ( array_key_exists('bottom',$defaults) ) ? $defaults['bottom'] : '0px';
      $arrayValues['left'] = ( array_key_exists('left',$defaults) ) ? $defaults['left'] : '0px';
      $arrayValues['right'] = ( array_key_exists('right',$defaults) ) ? $defaults['right'] : '0px'; 
      $arrayValues['width'] = ( array_key_exists('width',$defaults) ) ? $defaults['width'] : '0px'; 
      $arrayValues['through'] = ( array_key_exists('through',$defaults) ) ? $defaults['through'] : '0px'; 

      $allDistances = explode(";", $value);              
      $marginValue = '';        
      foreach($allDistances as $singleDistance ){
        $actualDistance = explode(":",$singleDistance);
        $actualPos = explode("-",$actualDistance[0]);
        if($distance.'-'.$actualPos[1] == $actualDistance[0])
          $arrayValues[$actualPos[1]] = $actualDistance[1];          
      }

      $inputHtml = '';
      
      $theValue = '';
      foreach($positions as $key => $position){
        $inputHtml .= $key.' <input type="text" style="width:50px;padding:3px" data-distance-name="'.$distance.'" data-posdistance="'.$position.'" value="'.$arrayValues[$position].'" class="km-'.$distance.'-inputs" onkeyup="km_change_distanceinput(this);"/> &nbsp;&nbsp;';
        $theValue .=  $distance.'-'.$position.':'.$arrayValues[$position].';';
      }

      $html = '<div class="ultimate-margins" '.$dependency.'>
            <input type="hidden" name="'.$settings['param_name'].'" class="wpb_vc_param_value km-'.$distance.'-value '.$settings['param_name'].' '.$settings['type'].'_field" value="'.$theValue.'" />';
      $html .= $inputHtml;      
      $html .= '</div>';
      return $html;
  }

 function sy_item_search( $settings, $value ) {
    $arrayValue = explode('/', $value);
    $title = "";
    if(is_array($arrayValue) && isset($arrayValue[1]))
      $title = $arrayValue[1];    
    
    return '<div class="sy-sitem-search">
                <input type="hidden" name="'. $settings['param_name'].'" class="wpb_vc_param_value sy-sitem-sid" value="'.$value.'"/>          
                <input type="text" name="" class="sy-sitem-sinput" value="'.$title.'" onkeydown="sy_item_composer_search(this,\''.$settings['item_type'].'\');"/>
                <div class="sy-sitem-result"></div>
            </div>'; 
}

function sy_multiple_select_field( $settings, $value ) {
      $choices = $settings['values'];
      $choices_output = '';
      $arrayValues = explode(',',$value);
      foreach ($choices as $choice) {      
        if(in_array($choice, $arrayValues))
          $choices_output .='<option value="'.$choice.'" selected>'.ucfirst($choice).'</option>';
        else
          $choices_output .='<option value="'.$choice.'">'.ucfirst($choice).'</option>';
      }
       return '<div class="sy-sitem-select-multiple">
       <input class="km-multiple-select-val wpb_vc_param_value" name="'.$settings['param_name'].'" type="hidden" value="'.$value.'"/>
       <select class="km-multiple-select" onchange="kameleon_multiple_select_change(this);" multiple>'.$choices_output.'</select>              
            </div>'; 
    }


}
?>