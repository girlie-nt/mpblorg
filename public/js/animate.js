(function($){
	$(window).load(function() {
		function isElementInViewport(el) {
		  // special bonus for those using jQuery
		  if (typeof jQuery === "function" && el instanceof jQuery) {
		    el = el[0];
		  }
		  var rect = el.getBoundingClientRect();
		  return (
		    (rect.top <= 0
		      && rect.bottom >= 0)
		    ||
		    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
		      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
		    ||
		    (rect.top >= 0 &&
		      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
		  );
		}

		var igo = 0 
		$(this).scroll(function(){
			if(isElementInViewport($('.highlight-video'))){
				if(igo == 0){
					$('.animated').addClass('fadeIn');
					igo =1;
				}
			}else{
				$('.animated').removeClass('fadeIn');
				igo = 0;
			}
		})

	});
})(jQuery);