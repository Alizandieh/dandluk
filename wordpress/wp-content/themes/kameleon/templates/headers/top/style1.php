<?php 
global $top_options;
$sy_options = kameleon_get_options_name();
?>
<div id="km-header-top-content" class="center-content">
	<div id="km-header-top-info">		
		<?php if ($sy_options['contact_phone'] != ''){ ?><span> <i class="fa fa-mobile km-phone-top"></i><?php echo wp_kses_data($sy_options['contact_phone']); ?></span> <?php } ?>
		<?php if ($sy_options['contact_email'] != ''){ ?><span> <i class="fa fa-envelope-o"></i><?php echo wp_kses_data($sy_options['contact_email']); ?></span> <?php } ?>
	</div>
	<div id="km-header-top-social-icons">
		<?php $header_toptype = kameleon_top_header_type(); kameleon_social_links($sy_options[$header_toptype['header_v'].'_social_array'],$header_toptype['top_scheme']); ?>
	</div>		
</div>