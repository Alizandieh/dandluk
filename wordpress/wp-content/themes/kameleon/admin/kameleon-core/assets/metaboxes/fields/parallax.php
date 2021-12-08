<?php 

/**
* This is the Parallax for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_parallax{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';		
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';		
		$value = $this->values['value'] ;
		$default =  $this->values['default'];		
		$output = $options_output  = '';
		$parallax_options = array(
			'yes' => 'Yes','no' => 'No'
		);	

		$defaults = array(				
			'parallax-active' =>  (isset($default['parallax-active'])) ? $default['parallax-active'] : '' ,		
			'parallax-speed' =>  (isset($default['parallax-speed'])) ? $default['parallax-speed'] : '' ,		
		);

		$values = array(
			'parallax-active' =>  (isset($value['parallax-active'])) ? $value['parallax-active'] : $default['parallax-active'] ,
			'parallax-speed' =>  (isset($value['parallax-speed'])) ? $value['parallax-speed'] : $default['parallax-speed'] 
		);

		$output .= '<div class="kmb-afterinfo" title="Parallax Speed"><div class="kmb-elem-attr-number kmb-elem-attr-number-small" title="Parallax Speed">
						<input type="number" class="form-control" step="any" name="'.$name.'[parallax-speed]'.'" value="'.esc_attr($values['parallax-speed']).'" />
					</div></div>';

		//Font Style
		$options_output .= '<option value="'.$values['parallax-active'].'">'.ucfirst($values['parallax-active']).'</option>';
		foreach ($parallax_options as $key => $val) {
			$options_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<div class="kmb-afterinfo" title="Enable Parallax"><select class="kmb-row-back-type full-select full-select-smaller" name="'.$name.'[parallax-active]'.'" >'.
					$options_output
		.'</select></div>';

		

		

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