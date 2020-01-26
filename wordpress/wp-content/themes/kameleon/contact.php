<?php 
/*
	Template Name: Contact us 1
	This is a Simple Contact Template 
*/
$sy_options = kameleon_get_options_name();

//Code That Will Handle The Message Sending to The Admin
//The Message Return Messages	
$missing_arguments = esc_html__('Please provide all your information.','kameleon');
$message_sent = esc_html__('Thanks! Your message has been sent succefully.','kameleon');


$isOkToSend = true;
$isMissingArguments = false;
$isEmailSent = false;

if(isset($_POST["action"]) && trim($_POST["action"]) == "message" ): 
 
 	if(isset($_POST['fullName'] , $_POST['email'], $_POST['message'])):
 		//Check All The provided Information name/email/message
 		if(trim($_POST['fullName']) == "" || trim($_POST['email']) == "" || trim($_POST['message']) == ""){
 			$isOkToSend = false;
 			$isMissingArguments = true;
 		}
 	

		//user posted variables
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$message = $_POST['subject']."\n".$_POST['message'];
		

		if($isOkToSend):	 
			$to = get_option('admin_email');
			$subject = "Someone sent a message from ".get_bloginfo('name');
			$headers = 'From: '. $email . "\r\n" .
			'Reply-To: ' . $email . "\r\n";
			wp_mail($to, $subject, strip_tags($message), $headers);
			$isEmailSent = true;
		endif;	
 	
 	endif;
endif;
$contact_address = $sy_options['contact_address'];
$contact_gmap_zoom = $sy_options['contact_gmap_zoom'];
$contact_gmap = $sy_options['contact_gmap'];
//Getting The Header
get_header();	
?>
	
	<?php if($contact_gmap == 1): ?>
		<div class="km-contact-us-map">
			<iframe frameborder="0" style="border:0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo esc_attr($contact_address); ?>&z=<?php echo esc_attr($contact_gmap_zoom); ?>&output=embed"></iframe>
		</div>
	<?php endif; ?>	
	<div id="km-content" >
		<div id="km-checker" >
			<div id="km-data" class="center-content">	
				<div id="contact-us-form">
					<div id="contact-response">
						<?php //When Message is Sent 
							if($isEmailSent):
						?>
							<div class="km-alert-box km-alert-green">
								<div class="km-alert-box-text"><?php echo esc_html($message_sent); ?></div>
								<a class="km-alert-box-close" onclick="close_alert(this)";>
									<i class="fa fa-times"></i>
								</a>	
							</div>
						<?php endif; ?>					
						<?php //When Message is NOT Sent 
							if($isMissingArguments):
						?>
							<div class="km-alert-box km-alert-red">
								<div class="km-alert-box-text"><?php echo esc_html($missing_arguments); ?></div>
								<a class="km-alert-box-close" onclick="close_alert(this)";>
									<i class="fa fa-times"></i>
								</a>	
							</div>
						<?php endif; ?>		
					</div>

					<form  method="post" action="">		
					    <div id="contact-us-inputs">
					       <div class="input-half-width-container material-container">
					        	<input id="fullName" type="text" placeholder="<?php echo esc_html__('Full Name *','kameleon'); ?>" name="fullName" class="input-half-width" onfocus="material_input(this);" />
					      		<hr class="hr-bottom" />
					       </div>
					       <div class="input-half-width-container input-last material-container">
					        	<input id="email" type="email" placeholder="<?php echo esc_html__('Email *','kameleon'); ?>" name="email" class="input-half-width" onfocus="material_input(this);" />					       	
					       		<hr class="hr-bottom" />
					       </div>
					       <div class="input-full-width-container material-container">
					        	<input id="url" type="text" placeholder="<?php echo esc_html__('Subject','kameleon'); ?>" name="subject" class="input-full-width" onfocus="material_input(this);" />
					       		<hr class="hr-bottom" />
					       </div>
					       <div class="textarea-full-width-container material-container">
					    		<textarea name="message" id="message" placeholder="<?php echo esc_html__('Write Message...','kameleon'); ?>" class="textarea-full-width" onfocus="material_input(this);"></textarea>					        	
					      		<hr class="hr-bottom" />
					       </div>
					    	<input type="hidden" name="action" value="message">			
					    </div>
							
					    <p class="form-submit">
					    	<input type="submit" value="<?php echo esc_html__('SEND MESSAGE','kameleon'); ?>" class="submit-form">
					    </p>
					</form>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>			
	
<?php 
	//Getting The Footer
	get_footer();
?>