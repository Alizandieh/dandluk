<?php 
	$folio_classes = "";
	$folio_cat_out = '';
	$folio_categories =  wp_get_object_terms($post->ID, 'km-folio-category');
	$skills =  wp_get_object_terms($post->ID, 'km-folio-skill'); 	

	if(is_array($folio_categories) && sizeof($folio_categories) >= 1):
		foreach ($folio_categories as $folio_cat) {
			$class_name = strtolower(str_replace(' ','-',$folio_cat->name));
			$folio_classes .= " ".$class_name." ";
			$folio_cat_out .= $class_name." / ";
		}
	endif;
?>
<div class="portfolio-card-2col portfolio-card-item portfolio-item-hidden portfolio-item <?php echo esc_attr($folio_classes); ?>" >	
	<a href="<?php the_permalink(); ?>"><?php sy_portfolio_thumbnail(''); ?></a>	
	
	<div class="portfolio-card-info portfolio-card-info-hidden" data-sit="hidden">
		<a href="<?php the_permalink(); ?>" class="pc-title clst-hover"><?php the_title(); ?></a>
		
		<div class="pc-show">
			<?php echo kameleon_hamburger_icon('2',"","pc_showinfo(this)","pc_show_icon"); ?>
		</div>
		
		<span class="portflio-card-cat"><?php echo trim($folio_cat_out,'/ '); ?></span> 
		<div class="portflio-card-text">
			...
			<div class="card-date-by">
				<div>
					<?php echo esc_html__('Created By :','kameleon'); ?>
					<span><?php the_author(); ?></span>
				</div>
				<div>
					<?php
						if (is_array($skills) && sizeof($skills) >= 1): 
							echo esc_html__('Skills :','kameleon'); 
							foreach ($skills as $skill) {
								echo '<a class="clst-hover" href="'.get_term_link($skill).'" target="_blank">'.$skill->name.'</a>';
							}
						endif;	
					?>
				</div>	

			</div>
		</div>
	</div>
</div>