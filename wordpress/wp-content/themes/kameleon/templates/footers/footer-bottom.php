<?php 
	$sy_options = kameleon_get_options_name();
?>
<div id="km-footer-bottom-container">
	<div id="km-footer-bottom-content" class="center-content" data-bottom-style="<?php echo esc_attr($sy_options['footer_bottom_style']); ?>">
		<?php	 
			switch ($sy_options['footer_bottom_style']) {
			 	case 'style1':
					get_template_part('templates/footers/footer','menu');
					get_template_part('templates/footers/footer','icons');
					break;
			  	case 'style2':
					get_template_part('templates/footers/footer','menu');
					get_template_part('templates/footers/footer','icons');
					break;	
				case 'style3':
					get_template_part('templates/footers/footer','icons');
					break;	
				case 'style4':
					get_template_part('templates/footers/footer','menu');
					break;
			}
		?>	
	</div>
</div>