<?php 

/**
* This is the Background for the Admin Panel You can call it using this construct class
* 
*/
class SayenThemes_Options_background{
	
	function __construct($values = array()){
		$this->values = $values;
	}

	function render(){
		$title = (isset($this->values['title'])) ? $this->values['title'] : 'No Title is given';
		$description = (isset($this->values['description'])) ? $this->values['description'] : 'No Description is given';		
		$name = (isset($this->values['name'])) ? $this->values['name'] : '';		
		$value = $this->values['value'] ;
		$default =  $this->values['default'];
		$repeat_output = $position_output  = $attachment_output = $size_output = '';
		$defaults = array(				
			'background-color' =>  (isset($default['background-color'])) ? $default['background-color'] : '' ,
			'background-image' =>  (isset($default['background-image'])) ? $default['background-image'] : '' ,
			'background-repeat' =>  (isset($default['background-repeat'])) ? $default['background-repeat'] : '' ,
			'background-position' =>  (isset($default['background-position'])) ? $default['background-position'] : '' ,
			'background-size' =>  (isset($default['background-size'])) ? $default['background-size'] : '' ,
			'background-attachment' =>  (isset($default['background-attachment'])) ? $default['background-attachment'] : '' ,			
		);

		$values = array(
			'background-color' =>  (isset($value['background-color'])) ? $value['background-color'] : $default['background-color'] ,
			'background-image' =>  (isset($value['background-image'])) ? $value['background-image'] : $default['background-image'] ,
			'background-repeat' =>  (isset($value['background-repeat'])) ? $value['background-repeat'] : $default['background-repeat'] ,
			'background-position' =>  (isset($value['background-position'])) ? $value['background-position'] : $default['background-position'] ,
			'background-size' =>  (isset($value['background-size'])) ? $value['background-size'] : $default['background-size'] ,
			'background-attachment' =>  (isset($value['background-attachment'])) ? $value['background-attachment'] : $default['background-attachment'] ,
		);

			
		$output = '';	
		
		$repeat_options = array(
			'no-repeat' => 'No Repeat',
			'repeat' => 'Repeat All',
			'repeat-x' => 'Repeat Horizontally',
			'repeat-y' => 'Repeat Vertically',
			'inherit' => 'Inherit',
			'initial' => 'Initial',						
		) ;		
		$repeat_output .= '<option value="'.esc_attr($values['background-repeat']).'">'.ucfirst($values['background-repeat']).'</option>';
		foreach ($repeat_options as $key => $val) {
			$repeat_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<select class="kmb-row-back-type full-select full-select-back" name="'.$name.'[background-repeat]'.'" >'.
					$repeat_output
				.'</select>';


		$position_options = array(
			'left top' => 'left top',
			'left center' => 'left center',
			'left bottom' => 'left bottom',
			'right top' => 'right top',
			'right center' => 'right center',
			'right bottom' => 'right bottom',
			'center top' => 'center top',
			'center center' => 'center center',
			'center bottom' => 'center bottom',
		) ;		
		$position_output .= '<option value="'.$values['background-position'].'">'.ucfirst($values['background-position']).'</option>';
		foreach ($position_options as $key => $val) {
			$position_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<select class="kmb-row-back-type full-select full-select-back" name="'.$name.'[background-position]'.'" >'.
					$position_output
				.'</select>';
				

		$size_options = array(
			'cover' => 'Cover',
			'contain' => 'Contain',
			'inherit' => 'Inherit',			
		) ;		
		$size_output .= '<option value="'.$values['background-size'].'">'.ucfirst($values['background-size']).'</option>';
		foreach ($size_options as $key => $val) {
			$size_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<select class="kmb-row-back-type full-select full-select-back" name="'.$name.'[background-size]'.'" >'.
					$size_output
				.'</select>';
				


		$attachment_options = array(
			'scroll' => 'Scroll',
			'fixed' => 'Fixed',
			'inherit' => 'Inherit',			
		) ;		
		$attachment_output .= '<option value="'.$values['background-attachment'].'">'.ucfirst($values['background-attachment']).'</option>';
		foreach ($attachment_options as $key => $val) {
			$attachment_output .= '<option value="'.esc_attr($key).'">'.ucfirst($val).'</option>';
		}
		$output .=	'<select class="kmb-row-back-type full-select full-select-back" name="'.$name.'[background-attachment]'.'" >'.
					$attachment_output
				.'</select>';
				



		$output .= '<div class="kmb-elem-attr-color kmb-elem-attr-color-small">
						<input type="text" class="form-control color-picker " name="'.$name.'[background-color]'.'" value="'.esc_attr($values['background-color']).'" />
					</div>
					<div class="kmb-elem-attr-upload kmb-elem-attr-upload-small">
						<input type="text" name="'.$name.'[background-image]'.'"  value="'.esc_attr($values['background-image']).'">
						<div class="muploaderbutton" onclick="show_media_uploader(this);">'.esc_html__('Upload','kameleon').'</div>
					</div>';



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