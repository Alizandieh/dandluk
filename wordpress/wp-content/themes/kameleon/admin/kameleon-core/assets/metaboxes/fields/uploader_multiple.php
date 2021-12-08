<?php 

/**
* This is the Multiple Image Uploader for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_uploader_multiple{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){				
		$value = (isset($this->values['value']) && $this->values['value'] != "" ) ? $this->values['value'] : $this->values['default'];		
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';		
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';

		$out_gallery = '';
		if(isset($value) && $value != ""){
			$gallery = explode(',',$value);
			if($gallery){
				for ($i = 0; $i < sizeof($gallery) ; $i++) { 
					$out_gallery .= '<div class="preview_multiple" style="background-image:url('.$gallery[$i].')">
								<div onclick="remove_image(this,\''.esc_js($gallery[$i]).'\')" class="remove_preview_image"><i class="Defaults-km-icon-times"></i></div>
						</div>';
				}	
			}
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
					<div class="kmb-uploader-multiple">
						<input type="hidden" name="'.esc_attr($name).'" class="kmb-uploader-multiple-input" value="'.esc_attr($value).'">
						<div class="muploaderbutton_multiple" onclick="show_media_uploader_multiple(this);"><i class="Defaults-km-icon-plus"></i></div>
						<div class="preview-container">'.$out_gallery.'</div>
					</div>					
				</div>
			</div>';

	}
}

?>