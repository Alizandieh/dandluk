<?php 
/*
	Template Name: Portfolio Card 3 Columns Full Width 	
*/
	update_post_meta ( get_the_ID(), 'unique_layout', 1 );
	update_post_meta ( get_the_ID(), 'layout', 'full_width' );
	update_post_meta ( get_the_ID(), 'full_width', 1 );
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$sb_active = get_post_meta(get_the_ID(),'sidebar_active',true);
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = get_post_meta(get_the_ID(),'sidebar_position',true);
	}	
	$folio_per_page = ($sy_options['folio_per_page'] != null ) ? $sy_options['folio_per_page'] : 12;
?>
<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">
		<div id="km-data" class="center-content" style="padding-bottom: 20px; padding-right: 5px; padding-left: 5px; box-sizing: border-box;">
			<?php get_template_part('templates/portfolio/portfolio','filter'); ?>	
			<div class="km-portfolio-loop km-pf-container-simple" data-gutter="25" data-layout="card_3col_layout" data-number="<?php echo esc_attr($folio_per_page); ?>" >	


			</div>
			<div class="ajax-loading-folio"><?php echo kameleon_loader_spinner('style1'); ?></div>
		</div>
		
		<?php if($sb_active == 1){ ?>
			<div id="kameleon-sidebar" >
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>

	</div>
</div>
<?php get_footer();?>