<?php 	
/**
 * Single Portfolio Item
 *
 * @package WordPress
 * @subpackage Kameleon
 * @since Kamelon v1.0
 */
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$post_id = get_the_ID();
	$sb_active = get_post_meta($post_id, 'sidebar_active',true);	
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = get_post_meta($post_id, 'sidebar_position',true);
	}

	$folio_layout = get_post_meta($post_id,'folio_layout',true);
	$folio_link = get_post_meta($post_id,'folio_link',true);
	$folio_client = get_post_meta($post_id,'folio_client',true);
	$folio_social = get_post_meta($post_id,'folio_social',true);
	$folio_related = get_post_meta($post_id,'folio_related',true);
	$folio_video_embed = get_post_meta($post_id,'folio_video_embed',true);
	$folio_gallery_type = get_post_meta($post_id,'folio_gallery_type',true);	
	$folio_pagination = get_post_meta($post_id,'folio_pagination',true);
	$folio_composer = get_post_meta($post_id,'folio_composer',true);
	$folio_info = get_post_meta($post_id,'folio_info',true);
	$folio_unique_titlrbar = get_post_meta($post_id,'titlebar_unique',true);	


	$pn_enabled = (null !== get_post_meta($post_id,'portfolio-pn_enabled',true)) ? get_post_meta($post_id,'portfolio-pn_enabled',true) : $sy_options['portfolio-pn_enabled'] ;
	$pn_stype = (null !== get_post_meta($post_id,'portfolio-pn_stype',true)) ? get_post_meta($post_id,'portfolio-pn_stype',true) : $sy_options['portfolio-pn_stype'] ;
	$modern_look = 0;

	if($folio_unique_titlrbar == 1 || $sy_options['portfolio-titlebar_unique'] == 1){
		$modern_look = ( null !==  get_post_meta(get_the_ID(), "modern_look", true) && $folio_unique_titlrbar == 1 ) ? get_post_meta(get_the_ID(), "modern_look", true) : $sy_options['portfolio-modern_look'];
		
	}
	
	$pn2_full  	 =  (get_post_meta($post_id,'nextprevious_unique' ,true) == 1 && null !== get_post_meta($post_id,'pn_type2_full',true) ) ? get_post_meta($post_id,'pn_type2_full',true) : $sy_options['portfolio-pn_type2_full'] ;
	$pn2_position = (get_post_meta($post_id,'nextprevious_unique' ,true) == 1 && null !== get_post_meta($post_id,'pn_type2_position',true) ) ? get_post_meta($post_id,'pn_type2_position',true) : $sy_options['portfolio-pn_type2_position'] ;

	//For Edge and Wide Previous Next Styling
	if($pn_enabled == 1 && ($pn_stype == 'type_1' || $pn_stype == 'type_3'))
			kameleon_next_previous_wrapper('portfolio',$pn_stype);		

	if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 1 && $pn2_position == 'top')
		kameleon_next_previous_wrapper('portfolio',$pn_stype);

	$social_type = ( null !== get_post_meta(get_the_ID(), "ss_type", true) && get_post_meta(get_the_ID(), "ss_type", true) != "" ) ? get_post_meta(get_the_ID(), "ss_type", true) : $sy_options['post-ss_type'];

?>

<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">
		<?php 
			if(have_posts()): the_post(); 
			$categories =  wp_get_object_terms($post_id, 'km-folio-category'); 
			$tags = wp_get_object_terms($post_id, 'km-folio-tag'); 
			$skills =  wp_get_object_terms($post_id, 'km-folio-skill'); 	
	 	?>
		<article id="km-data" class="center-content single-portfolio-data" data-folio-layout="<?php echo esc_attr($folio_layout); ?>">	
			<?php if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 0 && $pn2_position == 'top')
					kameleon_next_previous_wrapper('portfolio',$pn_stype);
			?>
			<?php if($modern_look  != 1): ?>
				<div id="km-portfolio-gall">
					<?php 
										
						if(trim($folio_video_embed) == "" && $folio_gallery_type == 'normal-slider'){
							sy_portfolio_thumbnail('',true); 
						}

						if(trim($folio_video_embed) == "" && $folio_gallery_type == 'thumbnails'){
							sy_portfolio_thumbnail_icon(''); 
						}
						
						if(trim($folio_video_embed) != ""){
							echo '<div class="km-embed-videoWrapper">'.$folio_video_embed.'</div>'; 
						}
						if(trim($folio_video_embed) == "" && $folio_gallery_type == 'none'){
							sy_portfolio_image(); 
						}
					?>
					<?php if(isset($folio_social) && $folio_social ==1 && $folio_layout != 'bottom'): 
							if($social_type == 'wide'): ?>
						<div id="km-single-share" class="social-share-bg soc-sha-li" style="margin-top: 20px;">
							<?php kameleon_social_share(get_the_permalink()); ?>
						</div>
					<?php 
						elseif ($social_type == 'modern'):
							echo kameleon_social_share_box_p("post");
						endif;
					endif; ?>
				</div>
			<?php endif; ?>
			
			<div id="km-portfolio-information">
				<div id="km-portfolio-content" data-visual="<?php echo esc_attr($folio_composer); ?>">
					<?php the_content(); ?>
				</div>
				
				<?php if($folio_info == 1){ ?>
					<?php if($folio_composer == 1){ ?>
						<div id="km-portfolio-content">
							<?php echo get_the_excerpt(); ?>				
						</div>		
					<?php } ?>
				<div id="km-portfolio-data">	
					<?php if($folio_link != ''): ?>
						<div class="km-p-data-item">
							<div class="km-p-data-title">
								<div><?php echo esc_html__('Project Link','kameleon'); ?></div>
							</div>
							<div class="km-p-data-info">
								<a class="clst-hover" href="<?php echo esc_url($folio_link); ?>"><?php echo esc_html__('Visit Project','kameleon'); ?></a>
							</div>
						</div>
					<?php endif;  


					if(is_array($categories) && sizeof($categories) >= 1): ?>
						<div class="km-p-data-item">
							<div class="km-p-data-title">
								<div><?php echo esc_html__('Categories','kameleon'); ?></div>
							</div>
							<div class="km-p-data-info">
								<?php foreach ($categories as $cat) {
									echo '<a class="clst-hover" href="'.esc_url(get_term_link($cat)).'" target="_blank">'.$cat->name.'</a>';
								}?>
							</div>
						</div>
					<?php endif; 
					if (is_array($skills) && sizeof($skills) >= 1): ?>
						<div class="km-p-data-item">
							<div class="km-p-data-title">
								<div><?php echo esc_html__('Skills Involved','kameleon'); ?></div>
							</div>
							<div class="km-p-data-info">
								<?php foreach ($skills as $skill) {
									echo '<a class="clst-hover" href="'.esc_url(get_term_link($skill)).'" target="_blank">'.$skill->name.'</a>';
								}?>
							</div>
						</div>
					<?php endif; 
						if($folio_client != ""): ?>	
							<div class="km-p-data-item">
								<div class="km-p-data-title">
									<div><?php echo esc_html__('Client','kameleon'); ?></div>
								</div>
								<div class="km-p-data-info">
									<?php echo  wp_kses_data($folio_client); ?>
								</div>
							</div>
					<?php endif; ?>

				</div>

				<?php } ?>

				<?php if(isset($folio_social) && $folio_social ==1 && $folio_layout == 'bottom'): 
					if($social_type == 'wide'):?>
					<div id="km-single-share" class="social-share-bg soc-sha-li">
						<?php kameleon_social_share(get_the_permalink()); ?>
					</div>
				<?php 
						elseif ($social_type == 'modern'):
							echo kameleon_social_share_box_p("post");
						endif;
					 endif; 
				?>
			</div>			
			<?php if($folio_related == 1): ?>
				<div class="related-p-title star-line">
					<?php echo esc_html__('RELATED PROJECTS','kameleon') ?>
				</div>	
				<div id="km-portfolio-related" class="related-p-slider">
					<?php related_porjects($post_id); ?>
				</div>
			<?php endif; ?>
			<?php 
				if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 0 && $pn2_position == 'bottom')
					kameleon_next_previous_wrapper('portfolio',$pn_stype);
			?>
		</article>	
		
		<?php endif;
			 if($sb_active == 1){ ?>
				<div id="kameleon-sidebar" >
					<?php get_sidebar(); ?>
				</div>
		<?php } ?>

	</div>
</div>
<?php 
	if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 1 && $pn2_position == 'bottom')
		kameleon_next_previous_wrapper('portfolio',$pn_stype);
 ?>
<?php get_footer();?>