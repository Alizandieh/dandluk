(function($) {
    "use strict";
    

    $(document).ready(function(){    
        var folioWrapper = $(".km-portfolio-loop");
    	//Masonry Porftolio
        var options = {
            transitionDuration:0,
            masonry:{                
                itemSelector: '.portfolio-item',
                percentPosition: true,
                //columnWidth: '.portfolio-item',          
                gutter : parseInt($(".km-portfolio-loop").attr('data-gutter'))                   
            }
        };

        imagesLoaded(folioWrapper,function(){
            folioWrapper.isotope(options);  
            folioWrapper.css({'opacity':'1'});
        });
    	 

    	$(".km-porfolio-filter").find('.km-filter-link').click(function(){
    		var thisLink = $(this);
            var style_class = $(".km-porfolio-filter").attr('data-active-style');
    		$(".km-filter-link").removeClass(style_class);
    		thisLink.addClass(style_class);
    		var folioCategory = thisLink.attr("data-filter");    		
    		folioWrapper.find('.portfolio-item:not('+folioCategory+')').addClass('portfolio-item-hidden');	
    		folioWrapper.find(folioCategory).removeClass('portfolio-item-hidden').addClass('portfolio-item-shown'); 
    		folioWrapper.isotope({filter:folioCategory,transitionDuration:0});    		
    	});

        //Trigger Portfolio Filter Links
        $(".km-porfolio-trigger").click(function(){
             var parent = $(this).parent('.km-porfolio-filter');
             if(parent.attr('data-active') == 'false'){
                parent.attr('data-active','true');
                $(this).html('<i class="fa fa-filter"></i>');
             }else if(parent.attr('data-active') == 'true'){
                parent.attr('data-active','false');
                $(this).html('<i class="fa fa-th"></i>');
             }

        }); 
        
    	

    	//Loop Loading
    	var page = 1;
        var loading = true;
        var $window = $(window);        
        var portfolioPerPage = $(".km-portfolio-loop").attr('data-number');
        var folioLayout = $(".km-portfolio-loop").attr('data-layout');
        var load_posts = function(){             
                $.ajax({
                    type       : "POST",
                    data       : {folios_number : portfolioPerPage, page: page,portfolio_layout:folioLayout,action:"kameleonLoadMorePortfolios"},
                    dataType   : "html",
                    url        : kameleondir.ajax_handler,
                    beforeSend : function(){
                        if(page != 1){
                             jQuery(".ajax-loading-folio").fadeIn(200);
                        }
                    },
                    success    : function(data){  
                        var $data = $(data);                        
                        if($data.length){
                            $data.hide();
                            folioWrapper.isotope().append($data).isotope('appended',$data).isotope('layout');
                            $data.show();
    						jQuery(".ajax-loading-folio").fadeOut(200);
                            loading = false;
                            //folioWrapper.find('.portfolio-item').removeClass('portfolio-item-hidden').addClass('portfolio-item-shown'); 
                            $(".portfolio-item").bind('inview', function(isInView) {
                              if (isInView) 
                                $(this).removeClass('portfolio-item-hidden').addClass('portfolio-item-shown');                                 
                              else
                                $(this).unbind('inview');                              
                            });
                            imagesLoaded(folioWrapper,function(){
                                folioWrapper.isotope(options);  
                                folioWrapper.css({'opacity':'1'});
                            });                           
                        } else {
                            jQuery(".ajax-loading-folio").fadeOut(200);                            
                        }
                    },
                    error     : function(jqXHR, textStatus, errorThrown) {
                        jQuery(".ajax-loading-folio").fadeOut(200);
                        folioWrapper.append('<div style="text-align:center; font-weight:bolder; color:red;">Sorry something went wrong !!!</div>');
                    }
            });
        }

        load_posts();
        $window.scroll(function() {
            var content_offset = folioWrapper.offset();
            if(!loading && ($window.scrollTop() +
                $window.height()) > (folioWrapper.scrollTop() +
                folioWrapper.height() + content_offset.top)) {
                    loading = true;
                    page++;
                    load_posts();
            }
           
                
        });

       

});

})( jQuery );
