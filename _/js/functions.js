// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function ($) {

	/* trigger when page is ready */
	$(document).ready(function (){

	

	});

}(window.jQuery || window.$));


/**
 * Responsive Menu
 */
!function ($) {

$(function () {
  // Slide Toggle responsive menu button
  $("#show-nav-prime").click(function(){
    $(".micromenu .nav-prime").toggle('fast', 'swing', function() {

    }).addClass("clearfix");
    $("#show-nav-prime").toggleClass('active');
  });

  // On the macro menu, make sure things can't go off the screen
  $("nav.macromenu ul.nav-prime li ul").hide();

  $("nav.macromenu ul.nav-prime li").hoverIntent( 
    function () {
      var sub = $(this).find('ul:first');
      if (sub != null) {
        sub.stop().slideDown('fast', function(){ $(this).css('overflow','visible') });

        var pos = sub.position();
        var off = sub.offset(); 
        var wid = sub.width(); 
        var lim = $(window).width(); 

        if (off != null) {
          if ( off.left + wid > lim) {
            $(this).find('ul:first').css({
              left: -wid + $(this).width() + 'px'
            });
          }
        }
      }
    }, 
    function () {
      var sub = $(this).find('ul:first');
      if (sub != null) {
        sub.stop().slideUp('fast');
      }
    }
  );

  $("nav.macromenu ul.nav-prime li ul li").hoverIntent( 
    function () {
      var sub = $(this).find('ul:first');
      if (sub != null) {
        sub.css('display', 'none').stop().slideDown('fast', function(){ $(this).css('overflow','visible') });

        var pos = sub.position();
        var off = sub.offset(); 
        var wid = sub.width(); 
        var lim = $(window).width(); 

        if (off != null) {
          //var subWidChange = 0; //amount by which subsessive sub uls are going to have their width reduced
          if ( off.left + wid > lim) { 
            // sub.css({left: -wid+subWidChange+'px', top: '5px', width: $(this).width() - subWidChange +'px', 'min-width': $(this).width() - subWidChange +'px'});
            // sub.css({width: $(this).width() - subWidChange +'px', 'min-width': $(this).width() - subWidChange +'px'});
            sub.css({left: -wid+'px', top: '5px'});
          }
        }
      }
    },
    function () {
      var sub = $(this).find('ul:first');
      if (sub != null) {
        sub.stop().slideUp('fast');
      }
    }
  );



});

}(jQuery);