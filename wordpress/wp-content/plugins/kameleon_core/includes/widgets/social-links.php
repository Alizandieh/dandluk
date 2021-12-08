<?php
/*
	Widget Number 			: 1 
	Widget Name   			: Social Links
	Widget Specification	: This Widget Displays a list of social links.
*/
class KM_social_links extends WP_Widget{
	
	public function __construct(){
		parent::__construct('KM_social_links', $name = esc_html__('Kameleon Social Links','kameleon'),array( 'description' => esc_html__( 'Display list of social network links','kameleon' )) );
	}


	public function widget($args,$instance){//Widget output or Result
		extract( $args );
		$kmwSTitle = $instance['kmwSTitle'];
		$kmwSColor = $instance['kmwSColor'];		
		$kmwSBcolor = $instance['kmwSBcolor'];		
		$kmwSBradius = $instance['kmwSBradius'];		
		
		$kmwSFacebook = $instance['kmwSFacebook'];
		$kmwSTwitter = $instance['kmwSTwitter'];
		$kmwSGoogle = $instance['kmwSGoogle'];
		$kmwSYouTube = $instance['kmwSYouTube'];
		$kmwSLinkedIN = $instance['kmwSLinkedIN'];
		$kmwSPinterest = $instance['kmwSPinterest'];
		$kmwSInstagram = $instance['kmwSInstagram'];
		$kmwSGithub = $instance['kmwSGithub'];
		$kmwSTumblr = $instance['kmwSTumblr'];
		$kmwSDribble = $instance['kmwSDribble'];
		$kmwSSoundcloud = $instance['kmwSSoundcloud'];
		$kmwSVimeo = $instance['kmwSVimeo'];
		$kmwSVine = $instance['kmwSVine'];
		$kmwSRss = $instance['kmwSRss'];
		$kmwSReddit = $instance['kmwSReddit'];	
		$kmwSFlickr = $instance['kmwSFlickr'];
		
		$socialArray = array(				
			'<i class="fa fa-facebook"></i>' 	=>			 $kmwSFacebook,							
			'<i class="fa fa-twitter"></i>' 	=>			 $kmwSTwitter,							
			'<i class="fa fa-google-plus"></i>' 	=>			 $kmwSGoogle,							
			'<i class="fa fa-youtube"></i>' 	=>			 $kmwSYouTube,							
			'<i class="fa fa-linkedin"></i>' 	=>			 $kmwSLinkedIN,							
			'<i class="fa fa-pinterest-p"></i>' 	=>			 $kmwSPinterest,							
			'<i class="fa fa-instagram"></i>' 	=>			 $kmwSInstagram,							
			'<i class="fa fa-github"></i>' 	=>			 $kmwSGithub,							
			'<i class="fa fa-tumblr"></i>' 	=>			 $kmwSTumblr,							
			'<i class="fa fa-dribbble"></i>' 	=>			 $kmwSDribble,							
			'<i class="fa fa-soundcloud"></i>' 	=>			 $kmwSSoundcloud,							
			'<i class="fa fa-vimeo-square"></i>' 	=>			 $kmwSVimeo,							
			'<i class="fa fa-vine"></i>' 	=>			 $kmwSVine,							
			'<i class="fa fa-rss"></i>' 	=>			 $kmwSRss,							
			'<i class="fa fa-reddit"></i>' 	=>			 $kmwSReddit,
			'<i class="fa fa-flickr"></i>'		=>			$kmwSFlickr
		);

  		

  		$postRow = '';
	
  		foreach ($socialArray as $key => $value) {
  			if(trim($value) != "")
  				$postRow .= '<a class="kmwSocial-link" href="'.$value.'" target="_blank" style="background-color:'.$kmwSBcolor.';">'.$key.'</a>';
  		}
		
		if(trim($kmwSTitle) != "")
			$titleWidget = '<h3>'.$kmwSTitle.'</h3>';


		echo '<div class="kmwP-widget">'.$titleWidget; 
			echo '<div class="kmwP-social" style="color:'.$kmwSColor.'; border-radius:'.$kmwSBradius.';">'.$postRow; 
		echo '</div></div>';

	}



	//Form function to submit widget values
	public function form($instance){
		$kmwSTitle = '';
		$kmwSColor = '';
		$kmwSBcolor = '';
		$kmwSBradius = '';
		$kmwSFacebook = '';
		$kmwSTwitter = '';
		$kmwSGoogle = '';
		$kmwSYouTube = '';
		$kmwSLinkedIN = '';
		$kmwSPinterest = '';
		$kmwSInstagram = '';
		$kmwSGithub = '';
		$kmwSTumblr = '';
		$kmwSDribble = '';
		$kmwSSoundcloud = '';
		$kmwSVimeo = '';
		$kmwSVine = '';
		$kmwSRss = '';
		$kmwSReddit = '';
		$kmwSFlickr = '';

		if(isset($instance['kmwSTitle']))
			$kmwSTitle = $instance['kmwSTitle'];
		if(isset($instance['kmwSColor']))
			$kmwSColor = $instance['kmwSColor'];
		if(isset($instance['kmwSBcolor']))
			$kmwSBcolor = $instance['kmwSBcolor'];
		if(isset($instance['kmwSBradius']))
			$kmwSBradius = $instance['kmwSBradius'];
		
		if(isset($instance['kmwSFacebook']))
			$kmwSFacebook = $instance['kmwSFacebook'];
		if(isset($instance['kmwSTwitter']))
			$kmwSTwitter = $instance['kmwSTwitter'];
		if(isset($instance['kmwSGoogle']))
			$kmwSGoogle = $instance['kmwSGoogle'];
		if(isset($instance['kmwSYouTube']))
			$kmwSYouTube = $instance['kmwSYouTube'];
		if(isset($instance['kmwSLinkedIN']))
			$kmwSLinkedIN = $instance['kmwSLinkedIN'];
		if(isset($instance['kmwSPinterest']))
			$kmwSPinterest = $instance['kmwSPinterest'];
		if(isset($instance['kmwSInstagram']))
			$kmwSInstagram = $instance['kmwSInstagram'];
		if(isset($instance['kmwSGithub']))
			$kmwSGithub = $instance['kmwSGithub'];
		if(isset($instance['kmwSTumblr']))
			$kmwSTumblr = $instance['kmwSTumblr'];
		if(isset($instance['kmwSDribble']))
			$kmwSDribble = $instance['kmwSDribble'];
		if(isset($instance['kmwSSoundcloud']))
			$kmwSSoundcloud = $instance['kmwSSoundcloud'];
		if(isset($instance['kmwSVimeo']))
			$kmwSVimeo = $instance['kmwSVimeo'];
		if(isset($instance['kmwSVine']))
			$kmwSVine = $instance['kmwSVine'];
		if(isset($instance['kmwSRss']))
			$kmwSRss = $instance['kmwSRss'];
		if(isset($instance['kmwSReddit']))
			$kmwSReddit = $instance['kmwSReddit'];
		if(isset($instance['kmwSFlickr']))
			$kmwSFlickr = $instance['kmwSFlickr'];


	?>
		<h4>Title</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSTitle'); ?>" id="<?php echo $this->get_field_name('kmwSTitle'); ?>" value="<?php echo $kmwSTitle; ?>"/>	
		<h4>Color:ex #ddd</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSColor'); ?>" id="<?php echo $this->get_field_name('kmwSColor'); ?>" value="<?php echo $kmwSColor; ?>"/>
		<h4>Background Color:ex #ddd</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSBcolor'); ?>" id="<?php echo $this->get_field_name('kmwSBcolor'); ?>" value="<?php echo $kmwSBcolor; ?>"/>
		<h4>Border Radius ex:5px</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSBradius'); ?>" id="<?php echo $this->get_field_name('kmwSBradius'); ?>" value="<?php echo $kmwSBradius; ?>"/>
		<h4>Facebook</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSFacebook'); ?>" id="<?php echo $this->get_field_name('kmwSFacebook'); ?>" value="<?php echo $kmwSFacebook; ?>"/>
		<h4>Twitter</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSTwitter'); ?>" id="<?php echo $this->get_field_name('kmwSTwitter'); ?>" value="<?php echo $kmwSTwitter; ?>"/>
		<h4>Google+</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSGoogle'); ?>" id="<?php echo $this->get_field_name('kmwSGoogle'); ?>" value="<?php echo $kmwSGoogle; ?>"/>
		<h4>YouTube</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSYouTube'); ?>" id="<?php echo $this->get_field_name('kmwSYouTube'); ?>" value="<?php echo $kmwSYouTube; ?>"/>
		<h4>LinkedIN</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSLinkedIN'); ?>" id="<?php echo $this->get_field_name('kmwSLinkedIN'); ?>" value="<?php echo $kmwSLinkedIN; ?>"/>
		<h4>Pinterest</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSPinterest'); ?>" id="<?php echo $this->get_field_name('kmwSPinterest'); ?>" value="<?php echo $kmwSPinterest; ?>"/>
		<h4>Instagram</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSInstagram'); ?>" id="<?php echo $this->get_field_name('kmwSInstagram'); ?>" value="<?php echo $kmwSInstagram; ?>"/>
		<h4>Github</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSGithub'); ?>" id="<?php echo $this->get_field_name('kmwSGithub'); ?>" value="<?php echo $kmwSGithub; ?>"/>
		<h4>Tumblr</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSTumblr'); ?>" id="<?php echo $this->get_field_name('kmwSTumblr'); ?>" value="<?php echo $kmwSTumblr; ?>"/>
		<h4>Dribble</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSDribble'); ?>" id="<?php echo $this->get_field_name('kmwSDribble'); ?>" value="<?php echo $kmwSDribble; ?>"/>
		<h4>Soundcloud</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSSoundcloud'); ?>" id="<?php echo $this->get_field_name('kmwSSoundcloud'); ?>" value="<?php echo $kmwSSoundcloud; ?>"/>
		<h4>Vimeo</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSVimeo'); ?>" id="<?php echo $this->get_field_name('kmwSVimeo'); ?>" value="<?php echo $kmwSVimeo; ?>"/>
		<h4>Vine</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSVine'); ?>" id="<?php echo $this->get_field_name('kmwSVine'); ?>" value="<?php echo $kmwSVine; ?>"/>
		<h4>Rss</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSRss'); ?>" id="<?php echo $this->get_field_name('kmwSRss'); ?>" value="<?php echo $kmwSRss; ?>"/>
		<h4>Reddit</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSReddit'); ?>" id="<?php echo $this->get_field_name('kmwSReddit'); ?>" value="<?php echo $kmwSReddit; ?>"/>
		<h4>Flickr</h4>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('kmwSFlickr'); ?>" id="<?php echo $this->get_field_name('kmwSFlickr'); ?>" value="<?php echo $kmwSFlickr; ?>"/>
		
		
		
	<?php
	}

	//Function to update teh widget values
	public function update($new_instance,$old){
		$instance['kmwSTitle'] = $new_instance['kmwSTitle'];
		$instance['kmwSColor'] = $new_instance['kmwSColor'];		
		$instance['kmwSBcolor'] = $new_instance['kmwSBcolor'];		
		$instance['kmwSBradius'] = $new_instance['kmwSBradius'];		
		$instance['kmwSFacebook'] = $new_instance['kmwSFacebook'];
		$instance['kmwSTwitter'] = $new_instance['kmwSTwitter'];
		$instance['kmwSGoogle'] = $new_instance['kmwSGoogle'];
		$instance['kmwSYouTube'] = $new_instance['kmwSYouTube'];
		$instance['kmwSLinkedIN'] = $new_instance['kmwSLinkedIN'];
		$instance['kmwSPinterest'] = $new_instance['kmwSPinterest'];
		$instance['kmwSInstagram'] = $new_instance['kmwSInstagram'];
		$instance['kmwSGithub'] = $new_instance['kmwSGithub'];
		$instance['kmwSTumblr'] = $new_instance['kmwSTumblr'];
		$instance['kmwSDribble'] = $new_instance['kmwSDribble'];
		$instance['kmwSSoundcloud'] = $new_instance['kmwSSoundcloud'];
		$instance['kmwSVimeo'] = $new_instance['kmwSVimeo'];
		$instance['kmwSVine'] = $new_instance['kmwSVine'];
		$instance['kmwSRss'] = $new_instance['kmwSRss'];
		$instance['kmwSReddit'] = $new_instance['kmwSReddit'];
		$instance['kmwSFlickr'] = $new_instance['kmwSFlickr'];

		return $instance;
	}
}

add_action('widgets_init',function(){
	register_widget('KM_social_links');
});

?>