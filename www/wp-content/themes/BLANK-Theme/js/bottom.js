$(function(){

//var elems = $('#flash').find('h3');

$('#flash').cycle({ 
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
      var index = $(this).parent().children().index(this); 
        return (opts.currSlide + 1) * 800;
    },
    delay: -2000, 
    autostop: 1,
    end: function() {  
      delay: -6000;
      $('#flash').hide('slow');
      $('#holder').css('margin-top','40px');
      $('#bg').animate({'height': '544px'},600);
      $('#pauseButton, #resumeButton').hide();  
    }
});


$('.shiatsu li, .menu_sec li').find('a').click(function(){
    $('#flash').cycle('stop');
    $('#flash').hide('slow');
    $('#holder').css('margin-top','40px');
    $('#bg').animate({'height': '544px'},600);
    $('#pauseButton, #resumeButton').hide();
});


  image = $('#back').find('img');
    $(window).bind('resize', function(ev) {
        resize_image(image);
    });
    function resize_image(image) {
    	var ratio = Math.max($(window).width()/image.width(),$(window).height()/image.height());
    	var w_ratio = Math.max($('#all').width()/image.width(),$('#all').height()/image.height());
    	
    	
    	if ($(window).width() > $(window).height()) {
    		image.css({width:image.width()*ratio,height:'auto'});
    	} else {
    		image.css({width:'auto',height:image.height()*ratio});
    	}	
    }
   $all = $('#all'); 
    $(window).bind('resize', function(ev) {
        resize_image($all);
    });
    function resize_image($all) {
    	var ratio = Math.max($(window).width()/$all.width(),$(window).height()/$all.height());
    	var w_ratio = Math.max($('body').width()/$all.width(),$('body').height()/$all.height());
    	
    	
    	if ($(window).width() > $(window).height()) {
    		$all.css({width:$all.width()*ratio,height:'auto'});
    	} else {
    		$all.css({width:'auto',height:$all.height()*ratio});
    	}	
    }

    $('#bg').height($('#container').height());
    
    
      (function($){
        $.fn.extend({
            center: function () {
                return this.each(function() {
                    var left = ($(window).width() - $(this).outerWidth()) / 2;
                    $(this).css({position:'absolute', margin:0, left: (left > 0 ? left : 0)+'px'});
                });
            }
        }); 
    })(jQuery);

    $('#bg').center();
    $('#container').center();
    $(window).bind('resize', function() {
        $('#container').center({transition:300});
        $('#bg').center({transition:300});
    });

  $('ul > li:last-child').css({'margin':'0', 'border': 'none'});
  $('#menu-third-menu').find('a').each(function(){
    if( $(this).attr('title') == 'blank' ) {
      $(this).attr('target', '_blank');
    }
  });
});