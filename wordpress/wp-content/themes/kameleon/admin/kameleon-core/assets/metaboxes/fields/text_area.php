<?php 

/**
* This is the text area for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_textarea{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){		
		$value = (isset($this->values['value']) && $this->values['value'] != "" ) ? $this->values['value'] : $this->values['default'];		
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';


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
					<textarea class="full-textarea" type="text" name="'.esc_attr($name).'" >'.esc_attr(stripslashes($value)).'</textarea>
				</div>
			</div>';

	}
}

?>