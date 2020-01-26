<?php 
	include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/top.php'); 
	$kmcf7_myStyles = kameleon_get_single_option('kmcf7_styles'); 	
	//print_r($kmcf7_myStyles);
?>
<div class="kmcf7m-top">
	<div class="kmcf7m-process-container" data-step="1">
		<div class="kmcf7m-process-progress">
			<div class="kmcf7m-process-progress-insider"></div>
		</div>	

		<div class="kmcf7m-process-element kmcf7m-pp-step-1 pps1 pps2 pps3 pps4 pps5 pps6" data-situation="active">
			<!--<div class="kmcf7m-pe-tooltip"><?php echo esc_html__('First Step','kameleon'); ?></div>-->
			<div class="kmcf7m-process-element-insider">
				<div class="kmcf7m-pe-ba"></div>				
			</div>
			<span class="kmcf7m-pe-tit">1</span>
		</div>

		<div class="kmcf7m-process-element kmcf7m-pp-step-2 pps2 pps3 pps4 pps5 pps6" data-situation="noactive" onclick="kmcf7m_go_tostep(2)">
			<div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Style Chooser','kameleon'); ?></div>
			<div class="kmcf7m-process-element-insider">
				<div class="kmcf7m-pe-ba"></div>				
			</div>
			<span class="kmcf7m-pe-tit">2</span>
		</div>

		<div class="kmcf7m-process-element kmcf7m-pp-step-3 pps3 pps4 pps5 pps6" data-situation="noactive" onclick="kmcf7m_go_tostep(3)">
			<div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Form Styler','kameleon'); ?></div>
			<div class="kmcf7m-process-element-insider">
				<div class="kmcf7m-pe-ba"></div>				
			</div>
			<span class="kmcf7m-pe-tit">3</span>
		</div>

		<div class="kmcf7m-process-element kmcf7m-pp-step-4 pps4 pps5 pps6" data-situation="noactive" onclick="kmcf7m_go_tostep(4)">
			<div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Button Type','kameleon'); ?></div>
			<div class="kmcf7m-process-element-insider">
				<div class="kmcf7m-pe-ba"></div>				
			</div>
			<span class="kmcf7m-pe-tit">4</span>
		</div>

		<div class="kmcf7m-process-element kmcf7m-pp-step-5 pps5 pps6" data-situation="noactive" onclick="kmcf7m_go_tostep(5)">
			<div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Button Styler','kameleon'); ?></div>
			<div class="kmcf7m-process-element-insider">
				<div class="kmcf7m-pe-ba"></div>				
			</div>
			<span class="kmcf7m-pe-tit">5</span>
		</div>	
		<div class="kmcf7m-process-element kmcf7m-pp-step-6 pps6" data-situation="noactive" onclick="kmcf7m_go_tostep(6)">
			<div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Save','kameleon'); ?></div>
			<div class="kmcf7m-process-element-insider">
				<div class="kmcf7m-pe-ba"></div>				
			</div>
			<span class="kmcf7m-pe-tit">6</span>
		</div>	
	</div>

	<div class="kmcf7m-top-actions" data-situation="begin">
		<div class="kmcf7m-top-action-begin">
			<div class="kmcf7m-top-act-ele" data-situation="hidden">			
				<div class="kmcf7m-top-act-ele-inp"><input type="text" id="kmcf7m-stylename" placeholder="Style Name" /></div>
				<div class="kmcf7m-top-action-button kmcf7m-ac-btn action blue" data-action="new" data-realicon="+" onclick="kmcf7m_show_input(this);"><div class="kmcf7m-pe-tooltip"><?php echo esc_html__('New Style','kameleon'); ?></div><span>+</span></div>			
			</div>
			<div class="kmcf7m-top-act-ele" data-situation="hidden">
				<div class="kmcf7m-top-act-ele-inp">
					<select id="kmcf7m-mystyles-select">
						<option value="none">Choose from your styles</option>
						<?php 
							if(is_array($kmcf7_myStyles) && !empty($kmcf7_myStyles)): 
								foreach($kmcf7_myStyles as $myStyleID => $myStyle): 
									if($myStyleID != '')
									echo '<option value="'.$myStyleID.'" data-button-css="'.$myStyle['buttonCSS'].'" data-styleid="'.$myStyleID.'" data-stylename="'.$myStyle['styleName'].'"  data-styletype="'.$myStyle['styleType'].'" data-stylebutton="'.$myStyle['styleButton'].'" data-thestyle="'.$myStyle['theStyle'].'">'.$myStyle['styleName'].'</option>';
								endforeach; 
							endif;
						?>
					</select>
				</div>
				<div class="kmcf7m-top-action-button kmcf7m-ac-btn action blue" data-action="edit" data-realicon="<i class='fa fa-pencil'></i>" onclick="kmcf7m_show_input(this);"><div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Edit Style','kameleon'); ?></div><span><i class="fa fa-pencil"></i></span></div>			
			</div>
		</div>
		<div class="kmcf7m-top-action-end">
			<div class="kmcf7m-top-action-button red" onclick="km_cf7_delete_style();"><div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Delete','kameleon'); ?></div><i class="fa fa-trash"></i></div>		
			<div class="kmcf7m-top-action-button full blue" data-begin="no" onclick="km_cf7_save_style('save',this);"><?php echo esc_html__('Save','kameleon'); ?></div>
			<div class="kmcf7m-top-action-button full greysolid" data-begin="yes" onclick="km_cf7_save_style('save',this);"><?php echo esc_html__('Finish','kameleon'); ?></div>
			<div class="kmcf7m-top-action-button full grey" onclick="kmcf7m_actual_situation('begin');"><?php echo esc_html__('Cancel','kameleon'); ?></div>
		</div>
		<div class="kmcf7m-top-act-ele">			
			<div class="kmcf7m-top-action-button red"><div class="kmcf7m-pe-tooltip"><?php echo esc_html__('Watch Tutorial','kameleon'); ?></div><i class="fa fa-book"></i></div>
			<a href="https://www.youtube.com/watch?v=pkGttZmA1Xw" target="_blank"></a>			
		</div>			
	
	</div>
</div>


<div class="kmcf7m-container">	
	<div class="kmcf7m-left kmcf7m-des-section">		
		<div class="km-builder-element-container">								
			
			<div class="km-builder-style-f km-builder-cr-element kmcf7m-ele1" data-situation="shown">
				<div class="km-builder-style-first-title">
					<span><?php echo esc_html__('Create a New Style or Edit an Existing One!','kameleon'); ?></span>
				</div>
			</div>
			
			<div class="km-builder-style-chooser km-builder-cr-element kmcf7m-ele2" data-situation="hidden">
				<div class="km-builder-style-title"><?php echo esc_html__('Choose a style for the contact form!','kameleon'); ?></div>				
				<?php 
					$styletypes = kameleon_cf7_styletypes();
					foreach ($styletypes as $styleTypeName => $styleType) {
						?>
							<div class="km-builder-style-element styletype" data-situation="none" data-stylename="<?php echo $styleTypeName; ?>" onclick="km_cf7_style_type_chooser(this)" data-defaultstyle="<?php echo $styleType['defaultStyle']; ?>">
								<span><?php echo $styleTypeName; ?></span>
							</div>
						<?php 
					}
				?>
			</div>
			<div class="km-builder-form-styler km-builder-cr-element kmcf7m-ele3" data-situation="hidden">
			
			</div>
			<div class="km-builder-button-chooser km-builder-cr-element kmcf7m-ele4" data-situation="hidden">
				<div class="km-builder-style-title"><?php echo esc_html__('Choose a style for the submit form Button!','kameleon'); ?></div>
				<?php 
					$buttontypes = kameleon_cf7_buttontypes();
					foreach ($buttontypes as $buttonTypeName => $buttonType) {
						?>
							<div class="km-builder-style-element buttontype" data-situation="none" data-buttonname="<?php echo $buttonTypeName; ?>" onclick="km_cf7_button_type_chooser(this)">
								<span><?php echo $buttonType['name']; ?></span>
							</div>
						<?php 
					}
				?>
			</div>
			<div id="kmcf7-button-styler-form" class="km-builder-button-styler km-builder-cr-element kmcf7m-ele5" data-situation="hidden">
				<?php 
					kmcf7_buttonStylerSection();
				 ?>			
			</div>
			<div class="km-builder-form-save km-builder-cr-element kmcf7m-ele6" data-situation="hidden">
				<div class="kmcf7m-form-save-button kmcf7m-button blue" data-begin="no" onclick="km_cf7_save_style('save',this);"><?php echo esc_html__('Save Form Style','kameleon'); ?></div>
				<div class="kmcf7m-form-save-message"><?php echo esc_html__('You can now save the form style.You can also modify this style later!','kameleon'); ?><br/><?php echo esc_html__('This style is ready to be used in Visual Composer.','kameleon'); ?></div>
			</div>
		
		</div>
	</div>

	<div class="kmcf7m-right kmcf7m-des-section" id="kmcf7m-right">
		<div class="kmcf7m-form-title">
			<div class="km-color-container-small">
				<div class="km-color-tooltip">
					<?php echo esc_html__('This will not be applied on the final result','kameleon').'<br/>'.esc_html__('It\'s just for simulation purpose!','kameleon'); ?>
				</div>
				<input class="color-picker" value="#fff" onchange="kameleon_change_bg_color(this,'#kmcf7m-right');" />
			</div>
			<?php echo esc_html__('Form Live Preview','kameleon'); ?><span id="kmcf7m-curentstyle"></span>
		</div>
		<div class="kameleon-cf7-container" id="kameleon-cf7-container" data-style-name=""  data-style="qaswara" data-button-style="qaswara" style="">			
			<div class="km_cf7-input-container">
				<input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required km_cf7-input" id="kmcf7-first-name" aria-required="true" aria-invalid="false" onfocus="km_cf7_designer_focus_plugin(this)" onblur="km_cf7_designer_blur_plugin()">
				<label class="km_cf7-label" for="kmcf7-first-name" data-content="Full Name">
					<span class="km_cf7_label-content" data-content="Full Name">Full Name</span>
				</label>
			</div>			

			<div class="km_cf7-input-container">
				<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required km_cf7-input" id="kmcf7-email" aria-required="true" aria-invalid="false" onfocus="km_cf7_designer_focus_plugin(this)" onblur="km_cf7_designer_blur_plugin()">
				<label class="km_cf7-label" for="kmcf7-email" data-content="Email">
					<span class="km_cf7_label-content" data-content="Email">Email</span>
				</label>
				
			</div>

			<div class="km_cf7-input-container cf7area km_cf7-textarea-container">
				<textarea class="wpcf7-form-control wpcf7-textarea km_cf7-input km_cf7-textarea" aria-invalid="false" onfocus="km_cf7_designer_focus_plugin(this)" onblur="km_cf7_designer_blur_plugin()" id="kmcf7-message"></textarea>		
				<label class="km_cf7-label" for="kmcf7-message" data-content="Message">
					<span class="km_cf7_label-content" data-content="Message">Message</span>
				</label>
			</div>
			<div class="km_cf7-submit-container">
				<div class="km_cf7-submit-insider">
					<input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit km_cf7-button">
					<div class="km_cf7-submit-btn-txt km_cf7-btn-txt-r">Send Message</div>
					<div class="km_cf7-submit-btn-txt km_cf7-btn-txt-h">Send Message</div>
					<div class="km_cf7-btn-bg-r"></div><div class="km_cf7-btn-bg-h"></div>
				</div>
			</div>
			


		</div>
	</div>
</div>
<style type="text/css">
	body{overflow-x: hidden; overflow-y: scroll;} #footer-upgrade{display: none;}
</style>