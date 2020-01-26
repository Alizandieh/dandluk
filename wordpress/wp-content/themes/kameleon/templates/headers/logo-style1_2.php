<?php 
$main_logo ='';
$main_retlogo = '';
if($h_logo_type == 'normal'){
	$main_logo = $sy_options['logo']['url'];
	$main_retlogo = $sy_options['retlogo']['url'];
}else if($h_logo_type == 'transparent'){
	$main_logo = $sy_options['trslogo']['url'];
	$main_retlogo = $sy_options['trsretlogo']['url'];	
}

if ($sticky_logo == 'normal') {
	$sticky_logo_data = 'data-sticky-logo="'.$sy_options['logo']['url'].'" data-sticky-retlogo="'.$sy_options['retlogo']['url'].'" ';
}else{
	$sticky_logo_data = 'data-sticky-logo="'.$sy_options['trslogo']['url'].'" data-sticky-retlogo="'.$sy_options['trsretlogo']['url'].'" ';
}

$sticky_logo_data .= ' data-logo="'.$main_logo.'"  data-retlogo="'.$main_retlogo.'" ';

?>
<div id="main-logo" class="main-logo" style="<?php echo wp_kses_data($logo_style); ?>" <?php echo wp_kses_data($sticky_logo_data); ?> >	
	<a href="<?php echo esc_url(home_url('/')); ?>">
		<img src="<?php echo esc_url($main_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="default-logo">
		<img src="<?php echo esc_url($main_retlogo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="retina-logo">
	</a>	
</div>