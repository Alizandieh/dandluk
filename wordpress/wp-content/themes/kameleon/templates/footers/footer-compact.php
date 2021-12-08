<?php
	//Compact Footer Styling	
	 $sy_options = kameleon_get_options_name();
?>
<div id="km-footer-content" class="center-content">
	<?php if(isset($sy_options['footer_compact_logo_enable']) && $sy_options['footer_compact_logo_enable'] == 1): ?>
	<div class="km-footer-compact-logo km-footer-compact-section">
		<img src="<?php echo esc_url($sy_options['footer_compact_logo']['url']); ?>" />
	</div>
	<?php endif; ?>	
	
	<?php if(isset($sy_options['footer_compact_social']) && $sy_options['footer_compact_social'] == 1): ?>
	<div class="km-footer-compact-social km-footer-compact-section">
		<?php kameleon_social_links($sy_options['footer_compact_social_array'],'footer_compact'); ?>
	</div>	
	<?php endif; ?>	


	<?php if(isset($sy_options['footer_compact_menu']) && $sy_options['footer_compact_menu'] == 1): ?>
	<div class="km-footer-compact-menu km-footer-compact-section">
		<?php get_template_part('templates/footers/footer','menu'); ?>
	</div>
	<?php endif; ?>	
	
		

</div>