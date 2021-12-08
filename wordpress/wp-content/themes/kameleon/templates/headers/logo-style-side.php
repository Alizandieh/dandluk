<?php 
$main_logo ='';
$main_retlogo = '';
if($h_logo_type == 'normal'){
	$main_logo = $sy_options['sidelogo']['url'];
	$main_retlogo = $sy_options['retsidelogo']['url'];
}else if($h_logo_type == 'transparent'){
	$main_logo = $sy_options['trssidelogo']['url'];
	$main_retlogo = $sy_options['trsretsidelogo']['url'];	
}
?>
<div  class="main-logo-side">	
	<a href="<?php echo esc_url(home_url('/')); ?>">
		<img src="<?php echo esc_url($main_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="default-logo">
		<img src="<?php echo esc_url($main_retlogo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="retina-logo">
	</a>	
</div>