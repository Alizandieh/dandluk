(function($) {
    "use strict";

     $(document).ready(function(){
     	var postWrapper = jQuery('.km-post-loop');
    	//Masonry Porftolio
        var options = {
            itemSelector: '.km-grid-masonry',
            transitionDuration:0,
            percentPosition: true,
            masonry: {	
				columnWidth: '.km-grid-masonry',			
				gutter: 25
			}
        };

        imagesLoaded(postWrapper,function(){
            postWrapper.isotope(options);  
            postWrapper.css({'opacity':'1'});
        });
     });


})( jQuery );