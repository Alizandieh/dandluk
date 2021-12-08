<?php 

class Kameleon_field_global_section{

	function __construct($values = array(),$elements = array()){
		$this->values = $values;
		$this->elements = $elements ;
	}

	function render(){
		$output = '';
		foreach ($this->elements as $elem) {
			if($elem['type'] == 'text'){
				$text = new Kameleon_field_text($elem['values']);
				$output .= $text->render(); 
			}
			if($elem['type'] == 'textarea'){
				$textarea = new Kameleon_field_textarea($elem['values']);
				$output .= $textarea->render(); 
			}
			if($elem['type'] == 'uploader'){
				$uploader = new Kameleon_field_uploader($elem['values']);
				$output .= $uploader->render(); 
			}
			if($elem['type'] == 'uploader_multiple'){
				$uploader_multiple = new Kameleon_field_uploader_multiple($elem['values']);
				$output .= $uploader_multiple->render(); 
			}
			if($elem['type'] == 'colorpicker'){
				$colorpicker = new Kameleon_field_colorpicker($elem['values']);
				$output .= $colorpicker->render(); 
			}
			if($elem['type'] == 'switcher'){
				$switcher = new Kameleon_field_switcher($elem['values']);
				$output .= $switcher->render(); 
			}
			if($elem['type'] == 'number'){
				$number = new Kameleon_field_number($elem['values']);
				$output .= $number->render(); 
			}
			if($elem['type'] == 'select'){
				$select = new Kameleon_field_select($elem['values']);
				$output .= $select->render(); 
			}
			if($elem['type'] == 'selectmodern'){
				$selectmodern = new Kameleon_field_selectmodern($elem['values']);
				$output .= $selectmodern->render(); 
			}
			if($elem['type'] == 'message'){
				$message = new Kameleon_field_message($elem['values']);
				$output .= $message->render(); 
			}
			if($elem['type'] == 'distance'){
				$distance = new Kameleon_field_distance($elem['values']);
				$output .= $distance->render(); 
			}
			if($elem['type'] == 'background'){
				$background = new Kameleon_field_background($elem['values']);
				$output .= $background->render(); 
			}		
			if($elem['type'] == 'slider'){
				$slider = new Kameleon_field_slider($elem['values']);
				$output .= $slider->render(); 
			}			
		}

		echo $output;


	}

}	

?>