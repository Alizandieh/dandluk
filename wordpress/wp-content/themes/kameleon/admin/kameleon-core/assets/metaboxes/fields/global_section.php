<?php 

class global_section{

	function __construct($values = array(),$elements = array()){
		$this->values = $values;
		$this->elements = $elements ;
	}

	function render(){
		$class = (isset($this->values['class'])) ? $this->values['class'] : 'opt-section-container';
		$id = $this->values['id'];
		$output = '';
		foreach ($this->elements as $elem) {
			if($elem['type'] == 'text'){
				$text = new SayenThemes_Options_text($elem['values']);
				$output .= $text->render(); 
			}
			if($elem['type'] == 'textarea'){
				$textarea = new SayenThemes_Options_textarea($elem['values']);
				$output .= $textarea->render(); 
			}
			if($elem['type'] == 'uploader'){
				$uploader = new SayenThemes_Options_uploader($elem['values']);
				$output .= $uploader->render(); 
			}
			if($elem['type'] == 'uploader_multiple'){
				$uploader_multiple = new SayenThemes_Options_uploader_multiple($elem['values']);
				$output .= $uploader_multiple->render(); 
			}
			if($elem['type'] == 'colorpicker'){
				$colorpicker = new SayenThemes_Options_colorpicker($elem['values']);
				$output .= $colorpicker->render(); 
			}
			if($elem['type'] == 'switcher'){
				$switcher = new SayenThemes_Options_switcher($elem['values']);
				$output .= $switcher->render(); 
			}
			if($elem['type'] == 'number'){
				$number = new SayenThemes_Options_number($elem['values']);
				$output .= $number->render(); 
			}
			if($elem['type'] == 'select'){
				$select = new SayenThemes_Options_select($elem['values']);
				$output .= $select->render(); 
			}
			if($elem['type'] == 'selectmodern'){
				$selectmodern = new SayenThemes_Options_selectmodern($elem['values']);
				$output .= $selectmodern->render(); 
			}
			if($elem['type'] == 'message'){
				$message = new SayenThemes_Options_message($elem['values']);
				$output .= $message->render(); 
			}
			if($elem['type'] == 'distance'){
				$distance = new SayenThemes_Options_distance($elem['values']);
				$output .= $distance->render(); 
			}
			if($elem['type'] == 'background'){
				$background = new SayenThemes_Options_background($elem['values']);
				$output .= $background->render(); 
			}		
			if($elem['type'] == 'slider'){
				$slider = new SayenThemes_Options_slider($elem['values']);
				$output .= $slider->render(); 
			}	
			if($elem['type'] == 'font'){
				$font = new SayenThemes_Options_font($elem['values']);
				$output .= $font->render(); 
			}	
			if($elem['type'] == 'parallax'){
				$parallax = new SayenThemes_Options_parallax($elem['values']);
				$output .= $parallax->render(); 
			}	
					
		}

		echo '<div class="'.$class.'" id="'.$id.'">'.$output.'</div>';


	}

}	

?>