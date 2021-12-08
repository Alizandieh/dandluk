<?php 	
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$post_id = get_the_ID();
	$sb_active = get_post_meta($post_id, 'sidebar_active',true);	
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = get_post_meta($post_id, 'sidebar_position',true);
	}
	$about_author = get_post_meta($post_id,'about_author',true);
	$social_share = get_post_meta($post_id,'social_share',true);
	$related_posts = get_post_meta($post_id,'related_posts',true);
	
	$pn_enabled = ( null !== get_post_meta($post_id,'post-pn_enabled',true) ) ? get_post_meta($post_id,'post-pn_enabled',true) : $sy_options['post-pn_enabled'] ;
	$pn_stype = (null !== get_post_meta($post_id,'post-pn_stype',true) ) ? get_post_meta($post_id,'post-pn_stype',true) : $sy_options['post-pn_stype'] ;
	
	$pn2_full  	 =  (get_post_meta($post_id,'nextprevious_unique' ,true) == 1 && null !== get_post_meta($post_id,'pn_type2_full',true) ) ? get_post_meta($post_id,'pn_type2_full',true) : $sy_options['post-pn_type2_full'] ;
	$pn2_position = (get_post_meta($post_id,'nextprevious_unique' ,true) == 1 && null !== get_post_meta($post_id,'pn_type2_position',true) ) ? get_post_meta($post_id,'pn_type2_position',true) : $sy_options['post-pn_type2_position'] ;

	$modern_look = ( null !== get_post_meta(get_the_ID(), "modern_look", true) && get_post_meta(get_the_ID(), "titlebar_unique", true) == 1 && get_post_meta(get_the_ID(), "titlebar_active", true) == 1 ) ? get_post_meta(get_the_ID(), "modern_look", true) : $sy_options['post-modern_look'];
	


	$social_type = ( null !== get_post_meta(get_the_ID(), "ss_type", true) && get_post_meta(get_the_ID(), "ss_type", true) != "" ) ? get_post_meta(get_the_ID(), "ss_type", true) : $sy_options['post-ss_type'];


	//For Edge and Wide Previous Next Styling
	if($pn_enabled == 1 && ($pn_stype == 'type_1' || $pn_stype == 'type_3'))
			kameleon_next_previous_wrapper('post',$pn_stype);		

	if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 1 && $pn2_position == 'top')
		kameleon_next_previous_wrapper('post',$pn_stype);
?>
<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">	
		<?php 	
			if(have_posts()): the_post();	
				$categories = get_the_category(); $tags = get_the_tags();
	 	?>
		<article id="km-data" class="center-content single-post-data">			
			<?php
				if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 0 && $pn2_position == 'top')
					kameleon_next_previous_wrapper('post',$pn_stype);

					if(!has_post_format('quote')): 	
						if($modern_look  != 1):
							switch(true) {
								case has_post_format('video'):
									kameleon_print_post_format('video','kameleon-large-thumbnail');
									break;
								case has_post_format('audio'):
									kameleon_print_post_format('audio','kameleon-large-thumbnail');					
									break;
								case has_post_format('gallery'):
									kameleon_print_post_format('gallery','kameleon-large-thumbnail');					
									break;
								case has_post_format('quote'):
									kameleon_print_post_format('quote','kameleon-large-thumbnail');					
									break;
								default:
									kameleon_print_post_format('image','kameleon-large-thumbnail');	
								break;					
						}
			
			?>		
			
			<div id="km-single-tit-info">
				<h2 id="km-single-title"><?php the_title(); ?></h2>	
				<div id="km-single-info">
					<a href="<?php echo esc_url(get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="clst-hover">
						<i class="fa fa-calendar"></i>
						<?php the_time(get_option('date_format'));  ?>
					</a>					
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="clst-hover">
						<i class="fa fa-user"></i>
						<?php the_author(); ?>
					</a>
					<i class="fa fa-tag"></i>
					<?php 					
						$separator = ", ";
						$cat_output = "";
						if($categories):
							foreach($categories as $category) {
								$cat_output .= '<a class="clst-hover" href="' . esc_url(get_category_link($category->term_id)). '">' . ucfirst($category->cat_name) . '</a>'. $separator;
							}
							echo trim($cat_output, $separator);
						endif;
					?>		
				</div>				
			</div>
			<?php endif; ?>

			<div id="km-single-content">
				<?php the_content(); 
				wp_link_pages(); ?> 
				<div id="single-tags" class="single-tag-cat">
					<?php 	
						$separator = ", ";										
						$outputTag = "" ;
						if($tags):
							echo 'Tags : ';
							foreach($tags as $tag) {
								$outputTag .= '<a class="clst-hover" href="' . esc_url(get_tag_link($tag->term_id)). '">' . ucfirst($tag->name) . '</a>'. $separator;
							}
							echo trim($outputTag, $separator);
						endif;	
					?>
				</div>
			</div>
			<?php endif; 
				if(has_post_format('quote')): 
					get_template_part('templates/post/post','quote');
				endif; 
			?>		
			
			<?php 
				if(isset($social_share) && $social_share ==1): 
					if($social_type == 'wide'):
			?>
				<div id="km-single-share" class="social-share-bg soc-sha-li">
					<?php kameleon_social_share(get_the_permalink()); ?>
				</div>
			<?php 
					elseif ($social_type == 'modern'):
						echo kameleon_social_share_box_p("post");
					endif;
				endif;				
				if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 0 && $pn2_position == 'bottom')
					kameleon_next_previous_wrapper('post',$pn_stype);
			?>
			
			<?php if(isset($about_author) && $about_author ==1): ?>
				<div id="single-about-author">
					<div id="single-athour-avatar">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
					</div>
					
					<div id="single-author-name-description">						
						<a id="single-author-name" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>						
						<span id="single-author-description">
							<?php  echo get_the_author_meta('description'); ?>  
						</span>
					</div>
				</div>
			<?php endif; ?>
			
			<?php if(isset($related_posts) && $related_posts==1): ?>
					<?php echo kameleon_related_posts($post_id); ?>
			<?php endif; ?>	

			<div id="single-comments-list">
				<?php comments_template(); ?>
			</div>
		
		</article>
		
		<?php endif;
			 if($sb_active == 1){ ?>
				<div id="kameleon-sidebar">
					<?php get_sidebar(); ?>
				</div>
		<?php } ?>
	</div>
</div>
<?php 
	if($pn_enabled == 1 && $pn_stype == 'type_2' && $pn2_full == 1 && $pn2_position == 'bottom')
		kameleon_next_previous_wrapper('post',$pn_stype);
 ?>

<?php get_footer();?>