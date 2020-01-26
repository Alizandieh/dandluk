<?php 

/**
* This is the Select Modern Options for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_selectmodern{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){		
		$value = (isset($this->values['value']) && $this->values['value'] != "" ) ? $this->values['value'] : $this->values['default'];		
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';
		$options = (isset($this->values['options'])) ? $this->values['options'] : array();
		$id = (isset($this->values['id'])) ? $this->values['id'] : '';

		$required = (isset($this->values['required'])) ? $this->values['required'] :  array();	
		$dataRequired = "";
		if(!empty($required)){
			$requiredArray = kameleon_overlay_section($required);
			$dataRequired ='data-required="'.esc_attr($requiredArray).'"';
		}

		$options_output = '';		
		foreach ($options as $key => $val) {			
			$options_output .= '<div class="sy-sl-choice" onclick="switchSySelectChooser(this);" data-value="'.esc_attr($key).'" data-name="'.esc_attr($val).'" >'.$val.'</div>';
		}

		$output =  '<div class="kmb-elem-attr" '.$dataRequired.'>
				<div class="kmb-elem-overlay"></div>
				<div class="kmb-elem-attr-name-desc">
					<h4>'.$title.'</h4>
					<span>'.$description.'</span>
				</div>
				<div class="kmb-elem-attr-input">
					<div class="sy-sl-wrap noselect" >
						<div class="sy-sl-top" onclick="switchSySelect(this,event);" data-situation="closed">
							<div class="sy-sl-selected">';
		
		if($value != null && $value != 'none' && array_key_exists($value,$options)){			
			$output .= ''.$options[$value].'';
		}

		
		$output .='</div><div class="sy-sl-iconDrop"><i class="Defaults-km-icon-caret-right"></i></div>								
						</div>
						
						<div class="sy-sl-choices">
							<input type="hidden" name="'.esc_attr($name).'" value="'.esc_attr($value).'" id="'.$id.'">
							'.$options_output.'
						</div>
					</div>
				</div>
			</div>';
	return $output;		
	}
}

?>