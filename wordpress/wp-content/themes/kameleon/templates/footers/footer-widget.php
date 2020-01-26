<?php $sy_options = kameleon_get_options_name(); ?>
<div id="km-footer-content" class="center-content">
	<?php 
		//Normal Footer Styling
		//Displaying The Footer Columns & Widgets Areas
		if($sy_options['footer_columns'] >= 1){
			echo '<div class="footer-column" id="footer-column-1">'; dynamic_sidebar('kameleon-footer-1'); echo '</div>';
		}
		if($sy_options['footer_columns'] >= 2){
			echo '<div class="footer-column" id="footer-column-2"> '; dynamic_sidebar('kameleon-footer-2'); echo '</div>';
		}
		if($sy_options['footer_columns'] >= 3){
			echo '<div class="footer-column" id="footer-column-3">'; dynamic_sidebar('kameleon-footer-3'); echo '</div>';
		}
		if($sy_options['footer_columns'] >= 4){
			echo '<div class="footer-column" id="footer-column-4">'; dynamic_sidebar('kameleon-footer-4'); echo '</div>';
		}
	?>
</div>