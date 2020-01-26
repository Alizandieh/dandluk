<?php 
//Kameleon (Maker / Designer & Builder) Fields Bundle
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/global_section.php');
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/colorpicker.php');
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/slider.php');
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/distance.php');
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/select.php');
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/message.php');

//Function To Print The Element Section
Function kameleon_preint_field_section($title, $description, $element){
	$outPut = '';
	$outPut ='<div class="km-builder-section">
				<div class="km-builder-title">
					<h3>'.$title.'</h3>
					<span>'.$description.'</span>
				</div>
				<div class="km-builder-element">
					<div class="km-builder-element-insider">
						'.$element.'
					</div>
				</div>
			</div>	';

	return $outPut;
}


?>