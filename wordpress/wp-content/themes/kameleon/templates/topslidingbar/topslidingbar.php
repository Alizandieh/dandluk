<?php 
	$sy_options = kameleon_get_options_name();
	$slidingbar_active  =( is_page() || is_single()) ? get_post_meta(get_the_ID(), "slidingbar_active", true) : $sy_options['slidingbar_active'];
	//Getting The Icons
	$icon_style = $sy_options['slidingbar_button_icon'];

	$show_icon = array(
		'arrow' => 'fa fa-arrow-down',
		'minus' => 'fa fa-plus',
		'chevron' => 'fa fa-chevron-down',
	);	

	$hide_icon = array(
		'arrow' => 'fa fa-arrow-up',
		'minus' => 'fa fa-minus',
		'chevron' => 'fa fa-chevron-up',
	);	
?> 

<?php if ($slidingbar_active == 1): ?>
	<div id="km-sb">		
		<div id="km-slidingbar" data-slidingbar-width="<?php echo esc_attr($sy_options['slidingbar_width']); ?>" class="km-slidingbar-hidden">
			<div id="km-slidingbar-content" class="center-content">
				<?php 
					//Displaying The slidingbar Columns & Widgets Areas
					if($sy_options['slidingbar_columns'] >= 1){
						echo '<div class="slidingbar-column" id="slidingbar-column-1">'; dynamic_sidebar('kameleon-slidingbar-1'); echo '</div>';
					}
					if($sy_options['slidingbar_columns'] >= 2){
						echo '<div class="slidingbar-column" id="slidingbar-column-2"> '; dynamic_sidebar('kameleon-slidingbar-2'); echo '</div>';
					}
					if($sy_options['slidingbar_columns'] >= 3){
						echo '<div class="slidingbar-column" id="slidingbar-column-3">'; dynamic_sidebar('kameleon-slidingbar-3'); echo '</div>';
					}
					if($sy_options['slidingbar_columns'] >= 4){
						echo '<div class="slidingbar-column" id="slidingbar-column-4">'; dynamic_sidebar('kameleon-slidingbar-4'); echo '</div>';
					}
				?>
			</div>	
		</div>
	</div>	
		<div id="km-slidingbar-buttonshow" onclick="toggleSlidingBar(this);" data-situation="hidden" data-position='<?php echo esc_attr($sy_options['slidingbar_button_position']); ?>' data-icon-show="<?php echo esc_attr($show_icon[$icon_style]); ?>" data-icon-hide="<?php echo esc_attr($hide_icon[$icon_style]); ?>">
			<i class="<?php echo wp_kses_data($show_icon[$icon_style]); ?>"></i>	
		</div>
<?php endif ?>