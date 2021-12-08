<?php
/*
	Widget Number 			: 1 
	Widget Name   			: Recent Portfolio
	Widget Specification	: This Widget Displays recent folios title or width thumbnails. 
*/
class KM_recent_portfolios extends WP_Widget{
	
	public function __construct(){
		parent::__construct('KM_recent_portfolios', $name = esc_html__('Kameleon Recent Work','kameleon'),array( 'description' => esc_html__( 'Display recent work (portfolio) with thumbnails' ,'kameleon')) );
	}


	public function widget($args,$instance){//Widget output or Result
		extract( $args );
		$kmwPTitle = $instance['kmwPTitle'];
		$kmwPNumber = $instance['kmwPNumber'];		
		$kmwPThumbnailsRound = $instance['kmwPThumbnailsRound'] ? 'true' : 'false';

  		$postargs=array('posts_per_page'=> intval($kmwPNumber),'post_type'=>'portfolio');

  		$postRow = '';

		$my_query = new WP_Query($postargs);		
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); 
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()) ,'kameleon-small-icon');	
			$thumbnailUrl = $thumb['0'];
				$postRow .='<a class="widg-folio round-'.$kmwPThumbnailsRound.'" href="'.get_the_permalink().'" style="background-image:url('.$thumbnailUrl.')"></a>';								
			endwhile;
		}
		wp_reset_query();
		$titleWidget = '';
		if(trim($kmwPTitle) != "")
			$titleWidget = '<h3>'.$kmwPTitle.'</h3>';


		echo '<div class="kmwP-widget ">'.$titleWidget; 
			echo $postRow; 
		echo '</div>';

	}



	//Form function to submit widget values
	public function form($instance){
		$kmwPTitle = '';
		$kmwPNumber = '';
		$kmwPThumbnailsRound ='';
		if(isset($instance['kmwPTitle']))
			$kmwPTitle = $instance['kmwPTitle'];
		if(isset($instance['kmwPNumber']))
			$kmwPNumber = $instance['kmwPNumber'];
		if(isset($instance['kmwPThumbnailsRound']))
			$kmwPThumbnailsRound = $instance['kmwPThumbnailsRound'];


	?>
		<h4>Title</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwPTitle'); ?>" id="<?php echo $this->get_field_name('kmwPTitle'); ?>" value="<?php echo $kmwPTitle; ?>"/>	

		<h4>Number of Portfolio Works </h4>
		<select name="<?php echo $this->get_field_name('kmwPNumber'); ?>" id="<?php echo $this->get_field_name('kmwPNumber'); ?>" class="widefat" value="<?php echo $kmwPNumber ?>" >
			<?php for($i = 3; $i<= 16; $i++) {	?>	
				<option value="<?php echo $i; ?>" <?php echo ($kmwPNumber==$i)?'selected':''; ?> ><?php echo $i; ?></option>	
				
			<?php } ?>
		</select>
		<h4>Round Thumbnails</h4>
		<label for="kmwPThumbnailsRound">Yes</label>
		<input type="checkbox" name="<?php echo $this->get_field_name('kmwPThumbnailsRound'); ?>" id="<?php echo $this->get_field_name('kmwPThumbnailsRound'); ?>" <?php checked($kmwPThumbnailsRound, 'on'); ?>>
		
		
		
	<?php
	}

	//Function to update teh widget values
	public function update($new_instance,$old){
		$instance['kmwPTitle'] = $new_instance['kmwPTitle'];
		$instance['kmwPNumber'] = $new_instance['kmwPNumber'];
		$instance['kmwPThumbnailsRound'] = $new_instance['kmwPThumbnailsRound'];		
		return $instance;
	}
}

add_action('widgets_init',function(){
	register_widget('KM_recent_portfolios');
});

?>