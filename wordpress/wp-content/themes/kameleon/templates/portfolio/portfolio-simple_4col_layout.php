<?php 
	$folio_classes = "";
	$folio_cat_out = '';
	$folio_categories =  wp_get_object_terms($post->ID, 'km-folio-category'); 
	if(is_array($folio_categories) && sizeof($folio_categories) >= 1):
		foreach ($folio_categories as $folio_cat) {
			$class_name = strtolower(str_replace(' ','-',$folio_cat->name));
			$folio_classes .= " ".$class_name." ";
			$folio_cat_out .= $class_name." / ";
		}
	endif;
?>
<div class="portfolio-simple-4col portfolio-item-hidden portfolio-item <?php echo esc_attr($folio_classes); ?>" >
	<?php sy_portfolio_thumbnail(''); ?>
	<span class="portfolio-simple-info">
		<span class="portfolio-simple-title clst-hover"><?php the_title(); ?></span>
		<span class="portfolio-simple-cats"><?php echo trim($folio_cat_out,'/ '); ?></span>
	</span>
	<a href="<?php esc_url(the_permalink()); ?>" class="link-container"></a>								
</div>