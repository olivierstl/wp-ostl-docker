$(document).ready(function() {
  
  // var a = "olivierstell";
  // var b = "@";
  // var c = ".";
  // var d = "fr";
  // var e = "contact";
  // var full = e+b+a+c+d;
  // document.getElementById("mailcontact").innerHTML = full;
  // document.getElementById("mailcontact").href = "mailto:"+full;
  
	$('a[href^="#"]').click(function(){  
		var the_id = $(this).attr("href"); 
		if(the_id != "#" && the_id != "#menu-btn" && the_id != "#menu"){ 
			$('html, body').animate({  
				scrollTop:$(the_id).offset().top  
			}, 'slow'); 
		}
  });
  
  var $window     = $(window);
  var $win_height = (window.innerHeight)*1.1;
  

  $window.on('scroll', showOnScroll);

  function showOnScroll() {
    var $scrolled   = $window.scrollTop();
    var $win_height = (window.innerHeight)*1.1;

    $(".showOnScroll:not(.animated)").each(function () {
      var $offsetTop = $(this).offset().top;

      if ($scrolled + $win_height > $offsetTop) {
        $(this).addClass('animated');
      }
    });
    
    /*if ($('.home-about')) {
      
      if($scrolled > $abouth /3 ) {
        var $blocAlpha = ($scrolled - ($abouth /3)) / ($abouth - ($abouth /3) - ((3* $abouth) /4)) ;
        $('.home-about').css("opacity", 1 - $blocAlpha);
        
      }
    }*/
    
  }

  showOnScroll();

});