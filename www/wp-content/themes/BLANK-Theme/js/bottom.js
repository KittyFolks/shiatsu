jQuery(function(){

//var elems = jQuery('#flash').find('h3');

jQuery('#flash').cycle({ 
    fx:      'all',
    randomizeEffects: true, 
    cssBefore:{  
        opacity: 0,
        top: 50,  
    }, 
    animIn: {  
        opacity: 1,
        left: 0, 
    }, 
    animOut: { 
        opacity: 0, 
        left: 1000,   
        top: 100 
    }, 
    timeoutFn: function (curr, next, opts, isForward) {
      var index = jQuery(this).parent().children().index(this); 
        return (opts.currSlide + 1) * 800;
    },
    delay: -2000, 
    autostop: 1,
    end: function() {  
      delay: -6000;
      jQuery('#flash').hide('slow');
      jQuery('#holder').css('margin-top','40px');
      jQuery('#bg').animate({'height': '544px'},600);
      jQuery('#pauseButton, #resumeButton').hide();  
    }
});


jQuery('.shiatsu li, .menu_sec li').find('a').click(function(){
    jQuery('#flash').cycle('stop');
    jQuery('#flash').hide('slow');
    jQuery('#holder').css('margin-top','40px');
    jQuery('#bg').animate({'height': '544px'},600);
    jQuery('#pauseButton, #resumeButton').hide();
});


  image = jQuery('#back').find('img');
    jQuery(window).bind('resize', function(ev) {
        resize_image(image);
    });
    function resize_image(image) {
    	var ratio = Math.max(jQuery(window).width()/image.width(),jQuery(window).height()/image.height());
    	var w_ratio = Math.max(jQuery('#all').width()/image.width(),jQuery('#all').height()/image.height());
    	
    	
    	if (jQuery(window).width() > jQuery(window).height()) {
    		image.css({width:image.width()*ratio,height:'auto'});
    	} else {
    		image.css({width:'auto',height:image.height()*ratio});
    	}	
    }
   jQueryall = jQuery('#all'); 
    jQuery(window).bind('resize', function(ev) {
        resize_image(jQueryall);
    });
    function resize_image(jQueryall) {
    	var ratio = Math.max(jQuery(window).width()/jQueryall.width(),jQuery(window).height()/jQueryall.height());
    	var w_ratio = Math.max(jQuery('body').width()/jQueryall.width(),jQuery('body').height()/jQueryall.height());
    	
    	
    	if (jQuery(window).width() > jQuery(window).height()) {
    		jQueryall.css({width:jQueryall.width()*ratio,height:'auto'});
    	} else {
    		jQueryall.css({width:'auto',height:jQueryall.height()*ratio});
    	}	
    }

    jQuery('#bg').height(jQuery('#container').height());
    
    
      (function(jQuery){
        jQuery.fn.extend({
            center: function () {
                return this.each(function() {
                    var left = (jQuery(window).width() - jQuery(this).outerWidth()) / 2;
                    jQuery(this).css({position:'absolute', margin:0, left: (left > 0 ? left : 0)+'px'});
                });
            }
        }); 
    })(jQuery);

    jQuery('#bg').center();
    jQuery('#container').center();
    jQuery(window).bind('resize', function() {
        jQuery('#container').center({transition:300});
        jQuery('#bg').center({transition:300});
    });

  jQuery('ul > li:last-child').css({'margin':'0', 'border': 'none'});
  jQuery('#menu-third-menu').find('a').each(function(){
    if( jQuery(this).attr('title') == 'blank' ) {
      jQuery(this).attr('target', '_blank');
    }
  });
});