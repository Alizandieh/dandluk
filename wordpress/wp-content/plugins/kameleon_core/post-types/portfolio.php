<?php 

/*------------------------------------------------------------------------------------
						
						REGISTER NEW POST TYPE ==> PORTFOLIO  

------------------------------------------------------------------------------------*/

//Init
add_action( 'after_setup_theme', 'create_portfolio_type' );
function create_portfolio_type() {
	register_post_type( 'portfolio',
	    array(
	      'labels' => array(
	        'name' => esc_html__( 'Portfolios' ,'Kameleon'),
	        'singular_name' => esc_html__( 'Portfolio' ,'Kameleon'),
	        'add_new'            => esc_html__( 'Add New' ,'Kameleon'),
		    'add_new_item'       => esc_html__( 'Add New Portfolio' ,'Kameleon'),
		    'edit_item'          => esc_html__( 'Edit Portfolio' ,'Kameleon'),
		    'new_item'           => esc_html__( 'New Portfolio' ,'Kameleon'),
		    'all_items'          => esc_html__( 'All Portfolios' ,'Kameleon'),
		    'view_item'          => esc_html__( 'View Portfolio' ,'Kameleon'),
		    'search_items'       => esc_html__( 'Search Portfolio Projects' ,'Kameleon'),
		    'not_found'          => esc_html__( 'No portfolio found' ,'Kameleon'),
		    'not_found_in_trash' => esc_html__( 'No Portfolios found in the Trash' ,'Kameleon'), 
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Portfolios'
	      ),

	    'public' => true,
	    'menu_icon'   => 'dashicons-art',
	    'has_archive' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'query_var' => true,
	    'rewrite' => array( 
	    	'slug' => 'portfolio',
	    	'with_front' => true,
	    	'feeds' => true,
	    	'pages' => true
	    ),  
	    'can_export' => true,
	    'supports' => array(
	      	'title',
	        'editor',	      
	        'thumbnail',
	        'excerpt',
	        'comments',
	        'revisions'
	       )	
	    )
	);
	
	/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============              NEW POST TYPE           ============== 
   ==                                                              ==
   ==                                                              ==
	\* ================================================================== */



// Initialize New Taxonomy Labels For Kameleon Porfolio Categories
	$category_labels = array(
	    'name' => _x( 'Categories', 'taxonomy general name' ,'Kameleon'),
	    'singular_name' => _x( 'Category', 'taxonomy singular name' ,'Kameleon'),
	    'search_items' =>  esc_html__( 'Search Types' ,'Kameleon'),
	    'all_items' => esc_html__( 'All Categories' ,'Kameleon'),
	    'parent_item' => esc_html__( 'Parent Category' ,'Kameleon'),
	    'parent_item_colon' => esc_html__( 'Parent Category:' ,'Kameleon'),
	    'edit_item' => esc_html__( 'Edit Categories' ,'Kameleon'),
	    'update_item' => esc_html__( 'Update Category' ,'Kameleon'),
	    'add_new_item' => esc_html__( 'Add New Category' ,'Kameleon'),
	    'new_item_name' => esc_html__( 'New Category Name' ,'Kameleon'),
	  );


// Custom taxonomy for Project Categories
	register_taxonomy('km-folio-category',array('portfolio'), array(
	    'hierarchical' => true,
	    'labels' => $category_labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
	    'rewrite' => array( 'slug' => 'km-folio-category' ),
	  ));

// Initialize New Taxonomy Labels For Kameleon Porfolio tags
	$tag_labels = array(
	    'name' => _x( 'Tags', 'taxonomy general name' ,'Kameleon'),
	    'singular_name' => _x( 'Tag', 'taxonomy singular name' ,'Kameleon'),
	    'search_items' =>  esc_html__( 'Search Types' ,'Kameleon'),
	    'all_items' => esc_html__( 'All Tags' ,'Kameleon'),
	    'parent_item' => esc_html__( 'Parent Tag' ,'Kameleon'),
	    'parent_item_colon' => esc_html__( 'Parent Tag:' ,'Kameleon'),
	    'edit_item' => esc_html__( 'Edit Tags' ,'Kameleon'),
	    'update_item' => esc_html__( 'Update Tag' ,'Kameleon'),
	    'add_new_item' => esc_html__( 'Add New Tag' ,'Kameleon'),
	    'new_item_name' => esc_html__( 'New Tag Name' ,'Kameleon'),
	  );



// Custom taxonomy for Project Tags
	register_taxonomy('km-folio-tag',array('portfolio'), array(
	    'hierarchical' => false,
	    'labels' => $tag_labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
	    'rewrite' => array( 'slug' => 'km-folio-tag' ),
	  ));



// Initialize New Taxonomy Labels For Kameleon Porfolio Skills
	$tag_labels = array(
	    'name' => _x( 'Skills', 'taxonomy general name' ,'Kameleon'),
	    'singular_name' => _x( 'Skill', 'taxonomy singular name' ,'Kameleon'),
	    'search_items' =>  esc_html__( 'Search Types' ,'Kameleon'),
	    'all_items' => esc_html__( 'All Skills' ,'Kameleon'),
	    'parent_item' => esc_html__( 'Parent Skill' ,'Kameleon'),
	    'parent_item_colon' => esc_html__( 'Parent Skill:' ,'Kameleon'),
	    'edit_item' => esc_html__( 'Edit Skills' ,'Kameleon'),
	    'update_item' => esc_html__( 'Update Skill' ,'Kameleon'),
	    'add_new_item' => esc_html__( 'Add New Skill' ,'Kameleon'),
	    'new_item_name' => esc_html__( 'New Skill Name' ,'Kameleon'),
	  );



	// Custom taxonomy for Project Skills
	register_taxonomy('km-folio-skill',array('portfolio'), array(
	    'hierarchical' => true,
	    'labels' => $tag_labels,
		'show_ui' => true,
	    'query_var' => true,
	    'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
	    'rewrite' => array( 'slug' => 'km-folio-skill' ),
	));
}


//add_post_type_support( 'portfolio', 'post-formats' );



/*------------------------------------------------------------------------------------

				 P R I N T      P O R T F O L I O     T H U M B N A I L S  

------------------------------------------------------------------------------------*/
function sy_portfolio_thumbnail($dimensions,$isgal=false){
	
	if(has_post_thumbnail()){ ?>
		<div class="km-pgallery-wrapper">			
			<?php 
				the_post_thumbnail($dimensions);						
				if($isgal == true){
					$gallery = get_post_meta(get_the_ID(),'folio_gallery',true);					
					if(isset($gallery) && $gallery != ""){
						$gallery = explode(',',$gallery);
						if($gallery){
							for ($i = 0; $i < sizeof($gallery) ; $i++) { 
								echo '<img src="'.esc_url($gallery[$i]).'" class="'.$dimensions.'" alt="'.esc_attr(get_the_title()).'"/>';
							}	
						}
					}
					
				}
			?>									
		</div>
<?php			
	}
}




/*------------------------------------------------------------------------------------

		P R I N T      P O R T F O L I O     T H U M B N A I L S    I C O N S

------------------------------------------------------------------------------------*/
function sy_portfolio_thumbnail_icon($dimensions){

	if(has_post_thumbnail()){ ?>
		<div class="km-pgallery-icons">			
			<div class="km-pgallery-icons-active">
				<div class="km-gallery-image" data-image="image-gal-first" data-active="true">
					<?php the_post_thumbnail($dimensions);	?>					
				</div>
				<?php
					$gallery = get_post_meta(get_the_ID(),'folio_gallery',true);					
					if(isset($gallery) && $gallery != ""){
						$gallery = explode(',',$gallery);
						if($gallery){
							for ($i = 0; $i < sizeof($gallery) ; $i++) { 
								echo '<div class="km-gallery-image" data-active="false" data-image="image-gal-'.$i.'"><img src="'.esc_url($gallery[$i]).'" class="'.$dimensions.'" alt="'.esc_attr(get_the_title()).'"/></div>';
							}	
						}
					}
				?>					
			</div>
			<div class="km-pgallery-icons-galls">
				<?php 
					$gallery = get_post_meta(get_the_ID(),'folio_gallery',true);
					$thumbnailUrl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
					echo '<div class="km-pgallery-icon" data-icon="image-gal-first" onclick="kameleon_portfolio_icon_chooser(this);">
								<img src="'.esc_url(image_url_size($thumbnailUrl,'100x100')).'"  alt="'.esc_attr(get_the_title()).'" />
						</div>';
					
					if(isset($gallery) && $gallery != ""){
						$gallery = explode(',',$gallery);
						if($gallery){
							for ($i = 0; $i < sizeof($gallery) ; $i++) { 
								echo '<div class="km-pgallery-icon" data-icon="image-gal-'.$i.'" onclick="kameleon_portfolio_icon_chooser(this);">
										<img src="'.esc_url(image_url_size($gallery[$i],'100x100')).'" alt="'.esc_attr(get_the_title()).'"  />
									</div>';
							}	
						}
					}
				?>									
			</div>
		</div>
<?php			
	}
}

function sy_portfolio_image(){
	if(has_post_thumbnail()){ ?>
		<div class="km-pimage-wrapper">
			<?php the_post_thumbnail('',''); ?>
		</div>
<?php
	}
}


//CHANGE THE THUMBNAIL SIZE USING THE IMAGE URL
function image_url_size($url,$size){
	$image_info = pathinfo($url);
	return $image_info['dirname'].'/'.$image_info['filename'].'-'.$size.'.'.$image_info['extension'];
}


/*------------------------------------------------------------------------------------

				P R I N T      	R E L A T E D		 P O R T F O L I O     

------------------------------------------------------------------------------------*/
function related_porjects($post_id){
	$categories =wp_get_object_terms(get_the_ID(), 'km-folio-category'); 
	if ($categories) {	
		$first_category = $categories[0]->term_id;
		$args=array(
			'tag_in' => array($first_category),
			'postesc_html__not_in' => array($post_id),
			'posts_per_page'=>4,
			'ignore_sticky_posts'=>1,
			'post_type'=>'portfolio'
		);

		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); 
			?>	
			<div class="effect-lily related-p" >
				<div class="km-hover-overlay"></div>
				<?php the_post_thumbnail('kameleon-small-thumbnail'); ?>
				<div class="figcaption">
					<div>
						<h2><?php the_title(); ?></h2>
						<p><?php the_time("F jS, Y"); ?></p>
					</div>
				</div>	
				<a href="<?php esc_url(the_permalink()); ?>" class="link-container"></a>									
			</div>		
			<?php
			endwhile;	
		}
		wp_reset_query();
	}
}



/*------------------------------------------------------------------------------------
			
				N E X T 	P R E V I O U S    PORTFOLIO     P A G I N A T I O N

------------------------------------------------------------------------------------*/
function sy_next_previous_portfolio(){
	$nextPost = get_next_post();
	$nextPostOuput = $prevPostOuput = '';	 
	if (isset($nextPost) && $nextPost != null) {
        	$nextPostOuput = '<a href="'.get_the_permalink($nextPost->ID).'" class="km-pn-button km-pn-button-next">
        						<i class="fa fa-long-arrow-right"></i>
        					<div class="km-pn-button-inf">'.get_the_post_thumbnail($nextPost->ID,'small-icon').''.get_the_title($nextPost->ID).'</div>
        	</a>';        
	}
	
	$prevPost = get_previous_post();
	if (isset($prevPost) && $prevPost != null) {
        	$prevPostOuput = '<a href="'.get_the_permalink($prevPost->ID).'" class="km-pn-button km-pn-button-previous">
        						<i class="fa fa-long-arrow-left"></i>
        					<div class="km-pn-button-inf">'.get_the_post_thumbnail($prevPost->ID,'small-icon').''.get_the_title($prevPost->ID).'</div>
        	</a>';        
	}

	echo $nextPostOuput.' '.$prevPostOuput;
}


?>