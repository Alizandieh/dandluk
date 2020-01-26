<?php
/* Kameleon Theme
* Comments Template & Comment Form
*/
$sy_options = kameleon_get_options_name();
?>

<?php /*Checking if The Post Has Any Comments*/ 
if(have_comments() && get_comments_number() != 0 ): ?>
<div id="the-comment-list">
	<div class="single-section-title star-line"><?php echo esc_html__('Comments','kameleon'); ?></div>
	<ul class="first-ul">	
		<?php 
			//Check for the comment Layout design			
			$postCommentLayout = get_post_meta(get_the_ID(),'comment_layout',true);			
			switch ($postCommentLayout) {
				case '1':
					wp_list_comments('callback=kameleon_custom_comments_simple'); 
					break;
				case '2':
					wp_list_comments('callback=kameleon_custom_comments_bubble'); 
					break;
				case '3':
					wp_list_comments('callback=kameleon_custom_comments_modern'); 
					break;	
				case '4':
					wp_list_comments('callback=kameleon_custom_comments_Whatever'); 
					break;	
				case '5':
					wp_list_comments('callback=kameleon_custom_comments_wide'); 
					break;	
				default:
					wp_list_comments('callback=kameleon_custom_comments_simple'); 
					break;					
			}
			

		?>
	</ul>	
	<div id="km-comments-nav">
		<div class="previous-link"><?php previous_comments_link(); ?></div>
		<div class="next-link"><?php next_comments_link(); ?></div>
	</div>

</div>

<?php endif; 
if ( comments_open() ) : ?>
<div id="single-post-comment">
<h3 class="single-section-title star-line" style="margin-bottom: 50px;"><?php echo esc_html__('Leave a comment ','kameleon'); ?></h3>
<?php 
//Post Comment Form
 $comment_args = array( 'title_reply'=>'',
						'comment_field' => '<div id="single-post-comment-textarea"><textarea id="comment" placeholder="'.esc_html__("Comment Text...","kameleon").'" name="comment" aria-required="true"></textarea></div>',
						'fields' => apply_filters( 'comment_form_default_fields', array(
								'author' =>'<div id="single-post-comment-inputs"><input id="author" name="author" placeholder="'.esc_html__("Name *","kameleon").'" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"/>',   
		    					'email'  =>'<input id="email" name="email" type="text" placeholder="'.esc_html__("Email *","kameleon").'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />',
							    'url'    =>'<input id="url" name="url" type="text" placeholder="'.esc_html__("Website","kameleon").'" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" /></div>', 
						    ) ),
					    
					    'comment_notes_after' => '',
					    'label_submit'=>esc_html__('Post comment',"kameleon"),
				);

comment_form($comment_args);
?>
</div>
<?php endif; ?>