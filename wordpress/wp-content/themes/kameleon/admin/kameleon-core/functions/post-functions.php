<?php 
/*------------------------------------------------------------------------------------
				
					P R I N T       P O S T       F O R M A T

------------------------------------------------------------------------------------*/
function kameleon_print_post_format($format,$dimensions){
	$sy_options = kameleon_get_options_name();
	switch ($format) {
		//----------------Video Post
		case 'video': ?>
		<?php if (get_post_meta(get_the_ID(),'video_mp4',true) != null ||  get_post_meta(get_the_ID(),'video_webm',true)  != null ): 
			$poster_video = (has_post_thumbnail()) ? 'poster="'.wp_get_attachment_image_src(get_post_thumbnail_id(),$dimensions,true)[0].'"' : '';

		?>
			<video preload="auto" <?php echo esc_attr($poster_video); ?>  controls>
				<?php if (get_post_meta(get_the_ID(),'video_mp4',true) != null): ?>
						<source src="<?php echo esc_url(get_post_meta(get_the_ID(),'video_mp4',true)); ?>" type="video/mp4">
				<?php endif; ?>
				<?php if (get_post_meta(get_the_ID(),'video_webm',true)  != null): ?>
						<source src="<?php echo esc_url(get_post_meta(get_the_ID(),'video_webm',true)); ?>" type="video/webm">
				<?php endif; ?>	
			</video>
			<?php endif;
			 if(get_post_meta(get_the_ID(),'video_embed',true) != null ): 
					 echo '<div class="km-embed-videoWrapper">'.get_post_meta(get_the_ID(),'video_embed',true).'</div>'; 
			 endif;	
		?>			
<?php		
		break;		
		//----------------Audio Post
		case 'audio': ?>
			<?php if (get_post_meta(get_the_ID(),'video_mp3',true) != null): ?>
				<div class="audio-player">			        
			      	 <div class="audio-player-img-c">
				       <?php if(has_post_thumbnail()){ ?>
						<div class="km-pimage-wrapper">
							<?php the_post_thumbnail($dimensions,''); ?>
						</div>
					<?php			
				}
			        ?>
			        	
						<audio class="km-the-audio-player-c" controls="controls" preload="true">
							<source src="<?php echo esc_url(get_post_meta(get_the_ID(),'video_mp3',true)); ?>">
			        	</audio>		        	
			        		
			        </div>
				</div>
			
			<?php 
				endif;	
				if(get_post_meta(get_the_ID(),'audio_embed',true) != null ):
						echo get_post_meta(get_the_ID(),'audio_embed',true);
				endif; 
			?>		
<?php			
		break;
		//----------------Image Post
		case 'image': 
			if(has_post_thumbnail()){ ?>
				<div class="km-pimage-wrapper">
					<?php the_post_thumbnail($dimensions,''); ?>
				</div>
<?php			
			}
		break;

		//----------------Gallery Post
		case 'gallery': 
			if(has_post_thumbnail()){ ?>
				<div class="km-pgallery-wrapper">					
						<?php 
							the_post_thumbnail($dimensions );						
							for ($i=2; $i <= intval($sy_options['thumbnails_number']) ; $i++) { 
								if(MultiPostThumbnails::has_post_thumbnail( 'post', 'featured-image'.$i, get_the_ID())){ 
									MultiPostThumbnails::the_post_thumbnail( 'post', 'featured-image'.$i,NULL,$dimensions, '');
								}
							}	
						?>						
					
				</div>
<?php			
			}
		break;			
		
		//----------------Default Post
		default: 
			if(has_post_thumbnail()){ ?>
				<div class="km-pimage-wrapper">
					<?php the_post_thumbnail($dimensions.' wp-post-image',''); ?>
				</div><?php			
			}
		break;
	}
}




/*------------------------------------------------------------------------------------

					    S O C I A L     L I N K      S  H A R E  

------------------------------------------------------------------------------------*/
function kameleon_social_share($link){ ?>
	<a href="http://www.facebook.com/sharer.php?m2w&s=100&u=<?php  echo esc_url($link); ?>" target="_blank" class="facebook">
		<i class="Defaults-km-icon-facebook"></i>
		<span class="ss-tooltip">
			<?php echo esc_html__('Share on Facebook','kameleon'); ?>
		</span>
	</a>
	<a href="https://twitter.com/share?url=<?php echo esc_url($link); ?>" target="_blank" class="twitter">
		<i class="Defaults-km-icon-twitter"></i>
		<span class="ss-tooltip">
			<?php echo esc_html__('Share on Twitter','kameleon'); ?>
		</span>
	</a>
	<a href="https://plus.google.com/share?url=<?php echo esc_url($link); ?>" target="_blank" class="google">
		<i class="Defaults-km-icon-google-plus"></i>
		<span class="ss-tooltip">
			<?php echo esc_html__('Share on Google+','kameleon'); ?>
		</span>
	</a>
	<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($link); ?>" target="_blank" class="linkedin">
		<i class="Defaults-km-icon-linkedin"></i>
		<span class="ss-tooltip">
			<?php echo esc_html__('Share on Linkedin','kameleon'); ?>
		</span>
	</a>
	<a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url($link); ?>" target="_blank" class="pinterest">
		<i class="Defaults-km-icon-pinterest"></i>
		<span class="ss-tooltip">
			<?php echo esc_html__('Share on Pinterest','kameleon'); ?>
		</span>
	</a>
	<a href="http://reddit.com/submit?url=<?php echo esc_url($link); ?>" target="_blank" class="reddit">
		<i class="Defaults-km-icon-reddit"></i>
		<span class="ss-tooltip">
			<?php echo esc_html__('Share on Reddit','kameleon'); ?>
		</span>
	</a>
<?php
}





/*------------------------------------------------------------------------------------
		
					  P O S T     C O M  M E  N T      L A Y O U T S 

------------------------------------------------------------------------------------*/
//Custom Comments Format
function kameleon_custom_comments_simple($comment, $args, $depth){
 $GLOBALS[' comment '] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-container" id="comment-<?php comment_ID(); ?>">
    	<div class="comment-author-vcard">
            <?php echo get_avatar($comment, $size='50' ); ?>    
 		</div>	
 		 <div class="comment-author-info">
        	<span class="comment-athor-name"><?php echo get_comment_author_link(); ?></span>
        	
        	<a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>" class="comment-date">
          		<?php printf(esc_html__('%1$s ','kameleon'), get_comment_date()); ?> 
          	</a> 
          	<span class="comment-edit-link clst-hover"><?php edit_comment_link(esc_html__('Edit ','kameleon'), '   ', ' '); ?></span> 
          	
          	<span class="comment-reply-link clst-hover"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?></span>
          	
          	<?php if ($comment->comment_approved =='0') : ?>
		      	<br/>
		        <em><?php esc_html_e('This Comment is Awaiting Moderation.','kameleon') ?> </em>
		        <br />
	        <?php endif ; ?> 
          	<?php comment_text(); ?> 
        </div>                                      
    </div>
  </li>  

<?php
}

//Custom Comments Format Bubble
function kameleon_custom_comments_bubble($comment, $args, $depth){
 $GLOBALS[' comment '] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-container comment-container-bubble" id="comment-<?php comment_ID(); ?>">
    	<div class="comment-author-vcard-bubble">
            <?php echo get_avatar($comment, $size='50' ); ?>    
 		</div>	
 		 <div class="comment-author-info comment-author-info-bubble">
        	<span class="comment-athor-name"><?php echo get_comment_author_link(); ?></span>
        	
        	<a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>" class="comment-date">
          		<?php printf(esc_html__('%1$s at %2$s','kameleon'), get_comment_date(), get_comment_time()); ?> 
          	</a> 
          	<span class="comment-edit-link clst-hover"><?php edit_comment_link(esc_html__('Edit ','kameleon'), '   ', ' '); ?></span> 
          	
          	<span class="comment-reply-link clst-hover"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?></span>
          	
          	<?php if ($comment->comment_approved =='0') : ?>
		      	<br/>
		        <em><?php esc_html_e('This Comment is Awaiting Moderation.','kameleon') ?> </em>
		        <br />
	        <?php endif ; ?> 
          	<?php comment_text(); ?> 
        </div>                                      
    </div>
  </li>  

<?php
}

//Custom Comments Format Whide
function kameleon_custom_comments_wide($comment, $args, $depth){
 $GLOBALS[' comment '] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-container comment-container-wide" id="comment-<?php comment_ID(); ?>">
    	<div class="comment-author-vcard-wide">
            <?php echo get_avatar($comment, $size='50' ); ?>    
 		</div>	
 		 <div class="comment-author-info comment-author-info-wide">
        	<span class="comment-athor-name"><?php echo get_comment_author_link(); ?></span>
        	
        	<a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>" class="comment-date">
          		<?php printf(esc_html__('%1$s at %2$s','kameleon'), get_comment_date(), get_comment_time()); ?> 
          	</a> 
          	<span class="comment-edit-link clst-hover"><?php edit_comment_link(esc_html__('Edit ','kameleon'), '   ', ' '); ?></span> 
          	
          	<span class="comment-reply-link clst-hover"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?></span>
          	
          	<?php if ($comment->comment_approved =='0') : ?>
		      	<br/>
		        <em><?php esc_html_e('This Comment is Awaiting Moderation.','kameleon') ?> </em>
		        <br />
	        <?php endif ; ?> 
          	<?php comment_text(); ?> 
        </div>                                      
    </div>
  </li>  

<?php
}


//Custom Comments Modern
function kameleon_custom_comments_modern($comment, $args, $depth){
 $GLOBALS[' comment '] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-container comment-container-modern" id="comment-<?php comment_ID(); ?>">
    	<div class="comment-author-vcard-modern">
            <?php echo get_avatar($comment, $size='50' ); ?>    
 		</div>	
 		<div class="comment-author-info comment-modern-info">
 			<span class="comment-athor-name"><?php echo get_comment_author_link(); ?></span>
        	
        	<a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>" class="comment-date">
          		<?php printf(esc_html__('%1$s ','kameleon'), get_comment_date()); ?> 
          	</a> 
          	<span class="comment-edit-link clst-hover"><?php edit_comment_link(esc_html__('Edit ','kameleon'), '   ', ' '); ?></span> 
          	
          	<span class="comment-reply-link clst-hover"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?></span>          	
 		</div>
 		 <div class="comment-modern-text">        	
          	<?php if ($comment->comment_approved =='0') : ?>
		      	<br/>
		        <em><?php esc_html_e('This Comment is Awaiting Moderation.','kameleon') ?> </em>
		        <br />
	        <?php endif ; ?> 
          	<?php comment_text(); ?> 
        </div>                                      
    </div>
  </li>  

<?php
}


#Custom Comments FOrmat Whatever
function kameleon_custom_comments_Whatever($comment, $args, $depth){
 $GLOBALS[' comment '] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-container comment-container-whatever" id="comment-<?php comment_ID(); ?>">
    	<div class="comment-author-vcard-whatever">
            <?php echo get_avatar($comment, $size='50' ); ?>    
 		</div>	
 		 <div class="comment-author-info comment-author-info-whatever">
        	<span class="comment-athor-name"><?php echo get_comment_author_link(); ?></span>
        	
        	<a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>" class="comment-date">
          		<?php printf(esc_html__('%1$s at %2$s','kameleon'), get_comment_date(), get_comment_time()); ?> 
          	</a> 
          	<span class="comment-edit-link clst-hover"><?php edit_comment_link(esc_html__('Edit ','kameleon'), '   ', ' '); ?></span> 
          	
          	<span class="comment-reply-link clst-hover"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?></span>
          	
          	<?php if ($comment->comment_approved =='0') : ?>
		      	<br/>
		        <em><?php esc_html_e('This Comment is Awaiting Moderation.','kameleon') ?> </em>
		        <br />
	        <?php endif ; ?> 
          	<?php comment_text(); ?> 
        </div>                                      
    </div>
  </li>  

<?php
}



#Function To Display Information About a Post / Date Author / Comment / Categories 
function kameleon_post_information($type = 'all'){
	?>
	<div class="km-post-information">
		<?php if($type != "not-all"): ?>
		<a href="<?php echo esc_url(get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="clst-hover">
			<i class="Defaults-km-icon-calendar"></i>
			<?php the_time(get_option('date_format'));  ?>
		</a>	
		<?php endif; ?>
		<?php if($type != "grid"): ?>	
		<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="clst-hover">
			<i class="Defaults-km-icon-user"></i>
			<?php the_author(); ?>
		</a>
		<a href="<?php esc_url(the_permalink()); ?>">
			<i class="Defaults-km-icon-comment-o"></i>
			<?php echo get_comments_number(get_the_ID()); ?>
		</a>				
		<?php endif; ?>		
		<i class="Defaults-km-icon-tag"></i>
		<?php 					
			$separator = ", ";
			$cat_output = "";
			$categories = get_the_category();
			if($categories):
				foreach($categories as $category) {
					$cat_output .= '<a class="clst-hover" href="' . esc_url(get_category_link($category->term_id)). '">' . ucfirst($category->cat_name) . '</a>'. $separator;
				}
				echo trim($cat_output, $separator);
			endif;
		?>		
	</div>
	<?php
}






/*------------------------------------------------------------------------------------

				  P R I N T      	R E L A T E D		 P O R T S

------------------------------------------------------------------------------------*/
function kameleon_related_posts($post_id){
	$categories = get_the_category();
	if ($categories) {	
		$first_category = $categories[0]->term_id;
		$args=array(
			'tag_in' => array($first_category),
			'post__not_in' => array($post_id),
			'posts_per_page'=>3,
			'ignore_sticky_posts'=>1,
			'post_type'=>'post'
		);

		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {?>

			<div class="single-section-title star-line">
				<?php echo esc_html__('RELATED POSTS','kameleon'); ?>
			</div>
			<div class="related-posts-container"><?php 
				while ($my_query->have_posts()) : $my_query->the_post(); 
				?>	
				<div class="related-post-item" >
					<?php the_post_thumbnail('kameleon-small-thumbnail'); ?>
					<div class="related-post-item-info">
						<h2><?php the_title(); ?></h2>
						<p><?php the_time(get_option('date_format')); ?></p>
					</div>
					<a href="<?php esc_url(the_permalink()); ?>" class="link-container"></a>					
				</div>		
			<?php
			endwhile;
			?>
		</div>
			<?php 
		}
		wp_reset_query();
	}
}




/*------------------------------------------------------------------------------------

				N E X T 	P R E V I O U S    P O S T     P A G I NA T I O N

------------------------------------------------------------------------------------*/
function kameleon_next_previous_post(){
	$nextPost = get_next_post();
	$nextPostOuput = $prevPostOuput = '';	 
	if (isset($nextPost) && $nextPost != null) {
        	$nextPostOuput = '<a href="'.esc_url(get_the_permalink($nextPost->ID)).'" class="km-pn-button km-pn-button-next">
        						<i class="Defaults-km-icon-long-arrow-right"></i>
        					<div class="km-pn-button-inf">'.get_the_post_thumbnail($nextPost->ID,'kameleon-small-icon').''.get_the_title($nextPost->ID).'</div>
        	</a>';        
	}
	
	$prevPost = get_previous_post();
	if (isset($prevPost) && $prevPost != null) {
        	$prevPostOuput = '<a href="'.esc_url(get_the_permalink($prevPost->ID)).'" class="km-pn-button km-pn-button-previous">
        						<i class="Defaults-km-icon-long-arrow-left"></i>
        					<div class="km-pn-button-inf">'.get_the_post_thumbnail($prevPost->ID,'kameleon-small-icon').''.get_the_title($prevPost->ID).'</div>
        	</a>';        
	}

	print $nextPostOuput.' '.$prevPostOuput;
}




?>