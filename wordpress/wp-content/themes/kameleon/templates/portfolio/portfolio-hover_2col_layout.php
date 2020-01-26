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
<div class="portfolio-hover-2col effect-lily portfolio-item-hidden portfolio-item <?php echo esc_attr($folio_classes); ?>" >
	<span class="km-hover-overlay"></span>
	<?php sy_portfolio_thumbnail(''); ?>
	<div class="figcaption">			
		<div>
			<h2><?php the_title(); ?></h2>
			<p><?php echo trim($folio_cat_out,'/ '); ?></p>
		</div>
	</div>
	<a href="<?php esc_url(the_permalink()); ?>" class="link-container"></a>								
</div>