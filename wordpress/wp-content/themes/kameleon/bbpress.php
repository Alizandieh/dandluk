<?php 	
	//BBpress Home Page
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$sb_active = $sy_options['sidebar_bbpress_active'];	
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = $sy_options['sidebar_bbpress_position'];
	}

	
?>

<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">
		<div id="km-data" class="center-content">
			<?php 
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif;
			?>
		</div>
		
		<?php if($sb_active == 1){ ?>
			<div id="kameleon-sidebar" >
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>

	</div>
</div>


<?php get_footer();?>