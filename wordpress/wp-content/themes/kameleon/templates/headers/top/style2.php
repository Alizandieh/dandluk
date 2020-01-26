<?php 
$sy_options = kameleon_get_options_name();
global $top_options;

?>
<div id="km-header-top-content" class="center-content">
	<div id="km-header-top-info">		
		<?php if ($sy_options['contact_phone'] != ''){ ?><span> <i class="fa fa-mobile km-phone-top"></i><?php echo wp_kses_data($sy_options['contact_phone']); ?></span> <?php } ?>
		<?php if ($sy_options['contact_email'] != ''){ ?><span> <i class="fa fa-envelope-o"></i><?php echo wp_kses_data($sy_options['contact_email']); ?></span> <?php } ?>
	</div>
	<div id="km-header-top-menu">
		<?php 
			$args = array(
				'theme_location'  => 'topheader_menu',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s </ul>',
				'depth'           => 0				
			);
			if (has_nav_menu('topheader_menu')) {
				wp_nav_menu( $args ); 
			}else
			echo "<span class='ass-menu'>Please assign a top header menu on <strong>Appearance/Menus</strong></span>"; 
		?>
	</div>		
</div>