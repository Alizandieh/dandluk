<?php
$sy_options = kameleon_get_options_name();
//Getting the activated menu style & Cheking if this page has a different menu header
$header_v  = ( (is_single() || is_page() ) && get_post_meta(get_the_ID(), 'header_unique', true) == 1 ) ? get_post_meta(get_the_ID(), 'header_v', true) : $sy_options['header_v'];

$top_options = sy_topheader_style($header_v);
 
$header_top_style = 'height: '.$top_options['height'].'px; line-height: '.$top_options['height'].'px; background-color: '.$top_options['background'] .'; color: '.$top_options['color'].'; ';


 if ($top_options['active'] != "" && $top_options['active'] == 1) { ?>
	<div id="km-header-top" style="<?php echo wp_kses_data($header_top_style); ?>" data-top-style="<?php echo esc_attr($top_options['style']); ?>"   data-menu-style="<?php echo esc_attr($top_options['menu_style']); ?>" >
		<?php	 
			switch ($top_options['style']) {
			 	case 'style1':
					get_template_part('templates/headers/top/style1');
					break;
			  	case 'style2':
					get_template_part('templates/headers/top/style1');
					break;	
				case 'style3':
					get_template_part('templates/headers/top/style2');
					break;	
				case 'style4':
					get_template_part('templates/headers/top/style2');
					break;
				case 'style5':
					get_template_part('templates/headers/top/style3');
					break;
				case 'style6':
					get_template_part('templates/headers/top/style3');
					break;								  		
			}
		?>		
	</div>
<?php	}  	?>