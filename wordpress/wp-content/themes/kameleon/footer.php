<?php 
	$sy_options = kameleon_get_options_name();
	$footer_enable  = ( (is_page() || is_single()) && null !==  get_post_meta(get_the_ID(), "footer_enable", true) ) ? get_post_meta(get_the_ID(), "footer_enable", true) : $sy_options['footer_enable'];
	
	$footer_width  =( (is_page() || is_single()) && get_post_meta(get_the_ID(), "footer_width", true) && get_post_meta(get_the_ID(), "footer_unique", true)) ? get_post_meta(get_the_ID(), "footer_width", true) : $sy_options['footer_width'];		
	$frame_enable  = ( (is_page() || is_single()) &&  null  !== get_post_meta(get_the_ID(), "frame_enable", true) ) ? get_post_meta(get_the_ID(), "frame_enable", true) : $sy_options['frame_enable'];
	$footer_effect  =( (is_page() || is_single()) && get_post_meta(get_the_ID(), "footer_effect", true) && get_post_meta(get_the_ID(), "footer_unique", true)) ? get_post_meta(get_the_ID(), "footer_effect", true) : $sy_options['footer_effect'];
	$footer_classes = ($footer_effect == 1) ? 'km-frame-bottom km-frame-left km-frame-right' : '';
	
	$footer_type  =( (is_page() || is_single()) && get_post_meta(get_the_ID(), "footer_type", true) && get_post_meta(get_the_ID(), "footer_unique", true)) ? get_post_meta(get_the_ID(), "footer_type", true) : $sy_options['footer_type'];

	$gotop_enable  = ( (is_page() || is_single()) && null !==  get_post_meta(get_the_ID(), "gotop_enable", true) ) ? get_post_meta(get_the_ID(), "gotop_enable", true) : $sy_options['gotop_enable'];



?> 
</div>
</div>

<!-- Wrapper Close !-->
<?php if ($footer_enable == 1){ ?>
	<div id="km-footer" data-footer-width="<?php echo esc_attr($footer_width); ?>" class="<?php echo esc_attr($footer_classes); ?>">
		<?php  
			if($footer_type == 'footer_normal'){
				get_template_part('templates/footers/footer','widget'); 
				if ($sy_options['footer_bottom'] == 1) {
					get_template_part('templates/footers/footer','bottom');
				}				
			}else if($footer_type == 'footer_compact'){
				get_template_part('templates/footers/footer','compact'); 
			}
			if ($sy_options['footer_copyright'] == 1) {
				get_template_part('templates/footers/footer','copyright'); 
			}

		?>	

	</div>
<?php } 
//print($sy_options['custom_js']); 
echo stripcslashes(base64_decode( kameleon_get_single_option_theme('customJS') ));
echo stripcslashes(base64_decode( kameleon_get_single_option_theme('gAnalytics') ));
?>

<?php if($gotop_enable == 1){ ?>
<div id="km-gotop" class="km-frame-bottom" data-position="<?php echo esc_attr($sy_options['gotop_position']); ?>">
	<i class="fa <?php echo esc_attr($sy_options['gotop_icon']); ?>"></i>
</div>
<?php } ?>
<div class="km-dark-overlay" onclick="kameleonEscapePressed();" data-situation="hidden" style="cursor: url(<?php echo get_template_directory_uri().'/images/cursor.png';?>),auto;"></div>



</div>
<!-- The Boss Close !-->
<?php if ($frame_enable == 1): ?>
	<div class="frame-side frame-side-left"></div>
	<div class="frame-side frame-side-right"></div>
	<div class="frame-side frame-side-top"></div>
	<div class="frame-side frame-side-bottom"></div>
<?php endif; ?>



<?php wp_footer(); ?>
</body>
</html>