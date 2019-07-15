(function($){
	$(window).load(function() {
		$('.carousel').carousel({
  			interval: 5000
 		});
		$('.playerdesc').each(function(){
			var btn="" ;
			var str = $(this).find('p').html();
			var newstr = shorten(str,400);
			if(str.length > 400)
				btn = '<br><button class="btn readmore" style="background-color: #094cb1;">Read More</button>';

			newstart= newstr.length;
			appendth = '<span class="moretext d-none">'+str.substr(newstart, str.length)+'</span>';
			$(this).find('p').html(' ');
			$(this).find('p').append(newstr+appendth+btn);
		});

		$('.countdown').each(function(){
		  	var $this = $(this), finalDate = $(this).data('countdown');
			console.log(finalDate);
		  	$this.countdown(finalDate, function(event) {
		    	$this.html(event.strftime('%D days %H:%M:%S'));
		  	});

		})
   	});

	$(document).on('click','.team_name', function(){
		$('.teamdiv').not(this).removeClass('d-content').addClass('d-none');
		$('.photodiv').not(this).removeClass('d-content').addClass('d-none');
		$('#'+$(this).data('target')).addClass('d-content');
		$('#'+$(this).data('photo')).addClass('d-content');
	});

	$(document).on('click','.readmore', function(){
		console.log('sud');
		if($(this).siblings('.moretext').hasClass('d-none')){
			$(this).siblings('.moretext').removeClass('d-none').addClass('d-content');
			$(this).text('Read Less');
		}else{
			$(this).siblings('.moretext').removeClass('d-content').addClass('d-none');
			$(this).text('Read More');
		}
	});

	function shorten(str, maxLen, separator = '<br>') {
		var newstr;
	  if (str.length <= maxLen) return str;
	  newstr = str.substr(0, str.lastIndexOf(separator, maxLen));
	  if(newstr.length < 250)
	  	newstr = str.substr(0, str.lastIndexOf(' ', maxLen));
	  return newstr;
	}


})(jQuery);