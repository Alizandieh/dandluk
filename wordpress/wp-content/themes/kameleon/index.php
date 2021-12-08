<?php 	
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$sb_active = $sy_options['sidebar_home_active'];
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = $sy_options['sidebar_home_position'];
	}	
?>

<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">
		<div id="km-data" class="center-content">
			<?php get_template_part('templates/post/post','loop') ?>		
		</div>
		
		<?php if($sb_active == 1){ ?>
			<div id="kameleon-sidebar" >
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>

	</div>
</div>




<?php get_footer();?>