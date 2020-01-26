<?php 

/**
* This is the Number for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_number{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){		
		
		$value = (isset($this->values['value']) && $this->values['value'] != "" ) ? $this->values['value'] : 0;		
		$title = (isset($this->values['title'])) ? $this->values['title'] : '';
		$description = (isset($this->values['description'])) ? $this->values['description'] : '';		
		$inputs = (isset($this->values['inputs'])) ? $this->values['inputs'] : array();


		$number_inputs = '';

		foreach ($inputs as $inp) {
			$val = (isset($inp['value']) && $inp['value']!="") ? $inp['value'] : $inp['default'];
			$number_inputs .= '<div class="kmb-elem-2 kmb-elem-nf">
						<span>'.$inp['text'].'</span>
						<div class="sy-number-chooser">
							<div class="sy-number-chooser_but noselect" onclick="admin_minus_number(this);">-</div>
							<input type="number" step="1"  name="'.esc_attr($inp['name']).'" value="'.esc_attr($val).'"  class="input-text qty text" size="4">
							<div class="sy-number-chooser_but noselect" onclick="admin_plus_number(this);">+</div>
						</div>
				</div>';
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
				<div class="kmb-elem-attr-input">'.$number_inputs.'</div>
			</div>';

	}
}

?>