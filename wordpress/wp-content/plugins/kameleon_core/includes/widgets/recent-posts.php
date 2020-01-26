<?php
/*
	Widget Number 			: 1 
	Widget Name   			: Recent Posts
	Widget Specification	: This Widget Displays recent posts title or width thumbnails. 
*/
class KM_recent_posts extends WP_Widget{
	
	public function __construct(){
		parent::__construct('KM_recent_posts', $name = esc_html__('Kameleon Recent Posts','kameleon'),array( 'description' => esc_html__( 'Display recent posts with thumbnails','kameleon' )) );
	}


	public function widget($args,$instance){//Widget output or Result
		extract( $args );
		$kmwPTitle = $instance['kmwPTitle'];
		$kmwPNumber = $instance['kmwPNumber'];
		$kmwPTextColor = $instance['kmwPTextColor'];
		$kmwPTextBorderColor = $instance['kmwPTextBorderColor'];
  		$kmwPThumbnails = $instance['kmwPThumbnails'] ? 'true' : 'false';
  		$kmwPThumbnailsRound = $instance['kmwPThumbnailsRound'] ? 'true' : 'false';
  		$postargs=array('posts_per_page'=> intval($kmwPNumber));

  		$postRow = '';

		$my_query = new WP_Query($postargs);		
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); 
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()) ,'kameleon-small-icon');	
			$thumbnailUrl = $thumb['0'];
				
				if($kmwPThumbnails == 'true')
					$postRow .= $this->printWithThumbnail(get_the_title(),get_the_time("F jS, Y"),$thumbnailUrl,get_the_permalink(),$kmwPThumbnailsRound);
				if($kmwPThumbnails == 'false')
					$postRow .= $this->printWithSimple(get_the_title(),get_the_time("F jS, Y"),get_the_permalink());
			
			endwhile;
		}
		wp_reset_query();
		$titleWidget = '';
		if(trim($kmwPTitle) != "")
			$titleWidget = '<h3>'.$kmwPTitle.'</h3>';


		echo '<div class="kmwP-widget" style="color:'.$kmwPTextColor.'; border-color:'.$kmwPTextBorderColor.';">'.$titleWidget; 
			echo $postRow; 
		echo '</div>';

	}

	public function printWithThumbnail($title,$date,$thumb,$link,$round){
		$thumbPrint = '';
		if($thumb)
			$thumbPrint = '<a href="'.$link.'" class="kmwP-thumb round-'.$round.'" style="background-image:url('.$thumb.')"></a>';
		return '<div  class="kmwP-row kmwP-row-image">
					'.$thumbPrint.'
					<div class="kmwP-info">
						<a href="'.$link.'" class="kmwP-title clst-hover">'.$title.'</a>
						<span class="kmwP-date"><i class="fa fa-calendar-o"></i>'.$date.'</span>
					</div>
				</div>';	
	}

	public function printWithSimple($title,$date,$link){
		return '<div class="kmwP-row">
					<div class="kmwP-info">
						<a href="'.$link.'" class="kmwP-title clst-hover">'.$title.'</a>
						<span class="kmwP-date"><i class="fa fa-calendar"></i>'.$date.'</span>
					</div>
				</div>';	
	}

	//Form function to submit widget values
	public function form($instance){
		$kmwPTitle = '';
		$kmwPNumber = '';
		$kmwPTextColor = '';
		$kmwPThumbnails = '';
		$kmwPTextBorderColor = '';
		$kmwPThumbnailsRound ='';
		if(isset($instance['kmwPTitle']))
			$kmwPTitle = $instance['kmwPTitle'];
		if(isset($instance['kmwPNumber']))
			$kmwPNumber = $instance['kmwPNumber'];
		if(isset($instance['kmwPTextColor']))
			$kmwPTextColor = $instance['kmwPTextColor'];
		if(isset($instance['kmwPTextBorderColor']))
			$kmwPTextBorderColor = $instance['kmwPTextBorderColor'];
		if(isset($instance['kmwPThumbnails']))
			$kmwPThumbnails = $instance['kmwPThumbnails'];
		if(isset($instance['kmwPThumbnailsRound']))
			$kmwPThumbnailsRound = $instance['kmwPThumbnailsRound'];

	?>
		<h4>Title</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwPTitle'); ?>" id="<?php echo $this->get_field_name('kmwPTitle'); ?>" value="<?php echo $kmwPTitle; ?>"/>	

		<h4>Number of Posts </h4>
		<select name="<?php echo $this->get_field_name('kmwPNumber'); ?>" id="<?php echo $this->get_field_name('kmwPNumber'); ?>" class="widefat" value="<?php echo $kmwPNumber ?>" >
			<?php for($i = 3; $i<= 8; $i++) {	?>	
				<option value="<?php echo $i; ?>" <?php echo ($kmwPNumber==$i)?'selected':''; ?> ><?php echo $i; ?></option>	
				
			<?php } ?>
		</select>
		<h4>Text Color</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwPTextColor'); ?>" id="<?php echo $this->get_field_name('kmwPTextColor'); ?>" value="<?php echo $kmwPTextColor; ?>"/>	
		<h4>Text Border Color</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwPTextBorderColor'); ?>" id="<?php echo $this->get_field_name('kmwPTextBorderColor'); ?>" value="<?php echo $kmwPTextBorderColor; ?>"/>		
		<h4>Include Thumbnails</h4>
		<label for="kmwPThumbnails">Yes</label>
		<input type="checkbox" name="<?php echo $this->get_field_name('kmwPThumbnails'); ?>" id="<?php echo $this->get_field_name('kmwPThumbnails'); ?>" <?php checked($kmwPThumbnails, 'on'); ?>>
		<h4>Round Thumbnails</h4>
		<label for="kmwPThumbnailsRound">Yes</label>
		<input type="checkbox" name="<?php echo $this->get_field_name('kmwPThumbnailsRound'); ?>" id="<?php echo $this->get_field_name('kmwPThumbnailsRound'); ?>" <?php checked($kmwPThumbnailsRound, 'on'); ?>>
		
		
	<?php
	}

	//Function to update teh widget values
	public function update($new_instance,$old){
		$instance['kmwPTitle'] = $new_instance['kmwPTitle'];
		$instance['kmwPNumber'] = $new_instance['kmwPNumber'];
		$instance['kmwPTextColor'] = $new_instance['kmwPTextColor'];
		$instance['kmwPTextBorderColor'] = $new_instance['kmwPTextBorderColor'];
		$instance['kmwPThumbnails'] = $new_instance['kmwPThumbnails'];
		$instance['kmwPThumbnailsRound'] = $new_instance['kmwPThumbnailsRound'];
		return $instance;
	}
}

add_action('widgets_init',function(){
	register_widget('KM_recent_posts');
});

?>