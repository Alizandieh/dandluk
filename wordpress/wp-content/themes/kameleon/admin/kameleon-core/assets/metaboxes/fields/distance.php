<?php 

/**
* This is the Margin, Padding & Border Distance for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_distance{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';		
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';
		//Selector Css (Margin / Padding / Border)
		$type = (isset($this->values['selector'])) ? $this->values['selector'] : 'margin';		
		$value = $this->values['value'] ;
		$default =  $this->values['default'];

		$defaults = array(				
			'left' => (isset($default['left'])) ? $default['left'] : '0px' ,
			'right' => (isset($default['right'])) ? $default['right'] : '0px' , 
			'top' => (isset($default['top'])) ? $default['top'] : '0px' ,
			'bottom' => (isset($default['bottom'])) ? $default['bottom'] : '0px' ,

		);

		$options_output = '';
		
		$values = array(
			'left' => ( isset($value[$type.'-left']) ) ? $value[$type.'-left'] : $defaults['left'] ,
			'right' => ( isset($value[$type.'-right']) ) ? $value[$type.'-right'] : $defaults['right'] , 
			'top' => ( isset($value[$type.'-top']) ) ? $value[$type.'-top'] : $defaults['top'] ,
			'bottom' => ( isset($value[$type.'-bottom']) ) ? $value[$type.'-bottom'] : $defaults['bottom'] ,
		);

			

		$output = '';
		$output .= (isset($this->values['left']) && $this->values['left'] == false) ? '' : '<div class="km-dis-con"><i class="fa fa-arrow-left"></i><input type="number" value="'.str_replace('px','',$values['left']).'" min="0" onchange="changeNumberDistance(this);"><input type="hidden" value="'.esc_attr($values['left']).'" class="distance_input" name="'.$name.'['.$type.'-left]'.'" ></div>';
		$output .= (isset($this->values['right']) && $this->values['right'] == false) ? '' : '<div class="km-dis-con"><i class="fa fa-arrow-right"></i><input type="number" value="'.str_replace('px','',$values['right']).'" min="0" onchange="changeNumberDistance(this);"><input type="hidden" value="'.esc_attr($values['right']).'" class="distance_input" name="'.$name.'['.$type.'-right]'.'" ></div>';
		$output .= (isset($this->values['top']) && $this->values['top'] == false) ? '' : '<div class="km-dis-con"><i class="fa fa-arrow-up"></i><input type="number" value="'.str_replace('px','',$values['top']).'" min="0" onchange="changeNumberDistance(this);"><input type="hidden" value="'.esc_attr($values['top']).'" class="distance_input" name="'.$name.'['.$type.'-top]'.'" ></div>';
		$output .= (isset($this->values['bottom']) && $this->values['bottom'] == false) ? '' : '<div class="km-dis-con"><i class="fa fa-arrow-down"></i><input type="number" value="'.str_replace('px','',$values['bottom']).'" min="0" onchange="changeNumberDistance(this);"><input type="hidden" value="'.esc_attr($values['bottom']).'" class="distance_input" name="'.$name.'['.$type.'-bottom]'.'" ></div>';


		if($type == 'border'){
			$defaults['border-color'] = (isset($default['border-color'])) ? $default['border-color'] : ''; 	
			$defaults['border-style'] = (isset($default['border-style'])) ? $default['border-style'] : ''; 	
			
			$values['border-color'] =( isset($value['border-color']) ) ? $value['border-color'] : $defaults['border-color'] ;			
			$values['border-style'] =( isset($value['border-style']) ) ? $value['border-style'] : $defaults['border-style'] ;
			
			$options = array(
				'solid' => 'Solid',
				'dashed' => 'Dashed',
				'dotted' => 'Dotted',
				'double' => 'Double',
				'none' => 'None',						
			) ;

			$options_output .= '<option value="'.$values['border-style'].'">'.ucfirst($values['border-style']).'</option>';
			foreach ($options as $key => $val) {
				$options_output .= '<option value="'.$key.'">'.ucfirst($val).'</option>';
			}
			$output .=	'<div style="width:100%; float:left"><select class="kmb-row-back-type full-select full-select-small" name="'.$name.'[border-style]'.'" >'.
						$options_output
					.'</select>';

			$output .= '<div class="kmb-elem-attr-color  kmb-elem-attr-color-small">
							<input type="text" class="form-control color-picker " name="'.$name.'[border-color]'.'" value="'.esc_attr($values['border-color']).'" />					
						</div></div>';

		}


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