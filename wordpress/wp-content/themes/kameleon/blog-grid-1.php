<?php 
/*
	Template Name: Blog Grid 1
*/
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$sb_active = get_post_meta(get_the_ID(),'sidebar_active',true);
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = get_post_meta(get_the_ID(),'sidebar_position',true);
	}	
?>

<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">	
		<div id="km-data" class="center-content" style="overflow: hidden">
			<div class="km-post-loop">	
				<?php 
						$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
						$args = array(
							'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
							'paged'          => $current_page // current page
						);
						query_posts( $args );						 
						$wp_query->is_archive = true;
						$wp_query->is_home = false;
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post();
								get_template_part('templates/post/post','grid_2');		
							endwhile; 
						endif; 					
				?>		
			</div>
			<?php kameleon_pagination(); ?>			
		</div>
		
		<?php if($sb_active == 1){ ?>
			<div id="kameleon-sidebar" >
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>

	</div>
</div>

<?php get_footer();?>