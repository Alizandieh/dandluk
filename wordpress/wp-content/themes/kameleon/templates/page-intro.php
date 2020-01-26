<?php 
$sy_options = kameleon_get_options_name();

$intro_image = get_post_meta(get_the_ID(),'intro_image',true);
$intro_style = get_post_meta(get_the_ID(),'intro_style',true);
if(get_post_meta(get_the_ID(),'intro_featured_en',true) == 1){
	$intro_image = wp_get_attachment_image_src(get_post_thumbnail_id(),true)[0];
}				



?>

<div class="intro-header">
	<div class="intro-bg-img">
		<img src="<?php echo esc_url($intro_image); ?>"/>
	</div>

	<div class="intro-title" data-position="<?php echo esc_attr(get_post_meta(get_the_ID(),'intro_text_pos',true)); ?>">					
		<?php echo get_post_meta(get_the_ID(),'intro_text',true); ?>
	</div>
	<button class="trigger">
		<i class="fa fa-long-arrow-down"></i>
	</button>
	<?php if ($intro_style == 'intro-effect-sliced'): ?>
		<div class="intro-bg-img">
			<img src="<?php echo esc_url($intro_image); ?>"/>
		</div>		
	<?php endif ?>
</div>

<script src="<?php print get_template_directory_uri(); ?>/assets/js/classie.js" type="text/javascript"></script>
<script>	
	//Page Intro Plugin
	(function() {
		var ie = (function(){
			var undef,rv = -1; 
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf('MSIE ');
			var trident = ua.indexOf('Trident/');
			if (msie > 0) {				
				rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
			} else if (trident > 0) {
				var rvNum = ua.indexOf('rv:');
				rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
			}
			return ((rv > -1) ? rv : undef);
		}());
		var keys = [32, 37, 38, 39, 40], wheelIter = 0;
		function preventDefault(e) {
			e = e || window.event;
			if (e.preventDefault)
			e.preventDefault();
			e.returnValue = false;  
		}
		function keydown(e) {
			for (var i = keys.length; i--;) {
				if (e.keyCode === keys[i]) {
					preventDefault(e);
					return;
				}
			}
		}
		function touchmove(e) {
			preventDefault(e);
		}
		function wheel(e) {
			// for IE 
			//if( ie ) {
				//preventDefault(e);
			//}
		}
		function disable_scroll() {
			window.onmousewheel = document.onmousewheel = wheel;
			document.onkeydown = keydown;
			document.body.ontouchmove = touchmove;
		}
		function enable_scroll() {
			window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
		}
		var docElem = window.document.documentElement,
			scrollVal,
			isRevealed, 
			noscroll, 
			isAnimating,
			container = document.getElementById( 'body' ),
			trigger = container.querySelector( 'button.trigger' );
		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}
		
		function scrollPage() {
			scrollVal = scrollY();
			
			if( noscroll && !ie ) {
				if( scrollVal < 0 ) return false;
				// keep it that way
				window.scrollTo( 0, 0 );
			}
			if( classie.has( container, 'notrans' ) ) {
				classie.remove( container, 'notrans' );
				return false;
			}
			if( isAnimating ) {
				return false;
			}
			
			if( scrollVal <= 0 && isRevealed ) {
				toggle(0);
			}
			else if( scrollVal > 0 && !isRevealed ){
				toggle(1);
			}
		}
		function toggle( reveal ) {
			isAnimating = true;
			
			if( reveal ) {
				classie.add( container, 'modify' );
			}
			else {
				noscroll = true;
				disable_scroll();
				classie.remove( container, 'modify' );
			}
			// simulating the end of the transition:
			setTimeout( function() {
				isRevealed = !isRevealed;
				isAnimating = false;
				if( reveal ) {
					noscroll = false;
					enable_scroll();
				}
			}, 1200 );
		}
		// refreshing the page...
		var pageScroll = scrollY();
		noscroll = pageScroll === 0;
		
		disable_scroll();
		
		if( pageScroll ) {
			isRevealed = true;
			classie.add( container, 'notrans' );
			classie.add( container, 'modify' );
		}
		
		window.addEventListener( 'scroll', scrollPage );
		trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
	})();
</script>