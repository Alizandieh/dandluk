<?php 

/**
* This is the Image Uploader for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_uploader{
	
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
					<div class="kmb-elem-attr-upload" style="margin-top: 6px">
						<input type="text" name="'.esc_attr($name).'"  value="'.esc_attr($value).'">
						<div class="muploaderbutton" onclick="show_media_uploader(this);">'.__('Upload','kameleon').'</div>
					</div>					
				</div>
			</div>';

	}
}

?>