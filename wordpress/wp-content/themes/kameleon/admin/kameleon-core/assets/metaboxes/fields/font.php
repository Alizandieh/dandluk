<?php 

/**
* This is the Font for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_font{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';		
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';		
		$value = $this->values['value'] ;
		$default =  $this->values['default'];		
		$output = $color_output = $style_output  = $size_output = $spacing_output = $weight_output = $transform_output = '';

		$defaults = array(				
			'font-color' =>  (isset($default['font-color'])) ? $default['font-color'] : '' ,
			'font-size' =>  (isset($default['font-size'])) ? $default['font-size'] : '' ,
			'font-weight' =>  (isset($default['font-weight'])) ? $default['font-weight'] : '' ,
			'font-style' =>  (isset($default['font-style'])) ? $default['font-style'] : '' ,			
			'font-spacing' =>  (isset($default['font-spacing'])) ? $default['font-spacing'] : '' ,			
			'font-transform' =>  (isset($default['font-transform'])) ? $default['font-transform'] : '' ,			
		);

		$values = array(
			'font-color' =>  (isset($value['font-color'])) ? $value['font-color'] : $default['font-color'] ,
			'font-size' =>  (isset($value['font-size'])) ? $value['font-size'] : $default['font-size'] ,
			'font-weight' =>  (isset($value['font-weight'])) ? $value['font-weight'] : $default['font-weight'] ,
			'font-style' =>  (isset($value['font-style'])) ? $value['font-style'] : $default['font-style'] ,
			'font-spacing' =>  (isset($value['font-spacing'])) ? $value['font-spacing'] : $default['font-spacing'] ,
			'font-transform' =>  (isset($value['font-transform'])) ? $value['font-transform'] : $default['font-transform'] ,
		);


		$weight_options = array(
			'normal' => 'Normal', '100' => '100','200' => '200','300' => '300','400' => '400','500' => '500',
			'600' => '600','700' => '700','800' => '800','900' => '900','bolder' => 'Bolder','bold' => 'Bold',			
		);

		$style_options = array(
			'normal' => 'Normal','italic' => 'Italic','oblique' => 'Oblique','initial' => 'Initial'
		);

		$transform_options = array(
			'initial' => 'Initial','inherit' => 'Inherit','capitalize' => 'Capitalize','uppercase' => 'Uppercase','lowercase' => 'Lowercase','none' => 'None',
		);

		//Font Style
		$style_output .= '<option  value="'.$values['font-style'].'">'.ucfirst($values['font-style']).'</option>';
		foreach ($style_options as $key => $val) {
			$style_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<div class="kmb-afterinfo" title="Font Style"><select class="kmb-row-back-type full-select full-select-smaller" name="'.$name.'[font-style]'.'" >'.
					$style_output
		.'</select></div>';

		//Font Weight		
		$weight_output .= '<option  value="'.$values['font-weight'].'">'.ucfirst($values['font-weight']).'</option>';
		foreach ($weight_options as $key => $val) {
			$weight_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<div class="kmb-afterinfo" title="Font Weight"><select class="kmb-row-back-type full-select full-select-smaller" name="'.$name.'[font-weight]'.'" >'.
					$weight_output
		.'</select></div>';

		//Font Transform
		$transform_output .= '<option  value="'.$values['font-transform'].'">'.ucfirst($values['font-transform']).'</option>';
		foreach ($transform_options as $key => $val) {
			$transform_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<div class="kmb-afterinfo" title="Text Transform"><select class="kmb-row-back-type full-select full-select-smaller" name="'.$name.'[font-transform]'.'" >'.
					$transform_output
		.'</select></div>';

		$output .= '<div class="kmb-afterinfo" title="Text Color"><div class="kmb-elem-attr-color kmb-elem-attr-color-small">
						<input type="text" class="form-control color-picker " name="'.$name.'[font-color]'.'" value="'.esc_attr($values['font-color']).'" />
					</div></div>
					<div class="kmb-afterinfo" title="Font Size"><div class="kmb-elem-attr-number kmb-elem-attr-number-small">
						<input type="number" class="form-control" name="'.$name.'[font-size]'.'" value="'.esc_attr($values['font-size']).'" />
					</div></div>
					<div class="kmb-afterinfo" title="Letter Spacing"><div class="kmb-elem-attr-number kmb-elem-attr-number-small">
						<input type="number" class="form-control" name="'.$name.'[font-spacing]'.'" value="'.esc_attr($values['font-spacing']).'" />
					</div></div>';

		$required = (isset($this->values['required'])) ? $this->values['required'] :  array();	
		$dataRequired = "";
		if(!empty($required)){
			$requiredArray = kameleon_overlay_section($required);
			$dataRequired ='data-required="'.esc_attr($requiredArray).'"';
		}

		return '<div class="kmb-elem-attr" '.$dataRequired.'>
					<div class="kmb-elem-attr-name-desc">
						<h4>'.$title.'</h4>
						<span>'.$description.'</span>
					</div>
					<div class="kmb-elem-attr-input">
						'.$output.'
					</div>
				</div>';

	}
}

?>