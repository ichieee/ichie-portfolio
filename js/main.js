$(document).ready(function(){
	$('#gallery .photos li a').on('click', function(){
		var category = $(this).text().toLowerCase();
		console.log('test');

		$('ul#gallery-photos li').each (function(){
			if(!$(this).hasClass(category)){
				$(this).hide().addClass('hidden');
			} else {
				$(this).fadeIn('slow').removeClass('hidden');
			}
		});
		return false;
	});

	$('#gallery-photos li').on('mouseenter', function(){
		// Get data attribue values
		var title = $(this).children().data('title');
		var desc = $(this).children().data('desc');

		// Validation
		if(desc == null){
			desc ='Click To Enlarge';
		}

		if(title == null){
			title == '';
		}

		// Create overlay div
		$(this).append('<div class="overlay"></div>');

		// Get the overlay div
		var overlay = $(this).children('.overlay');

		// Add html to overlay
		overlay.html('<h3>'+title+'</h3><p>'+desc+'</p>');

		//Fade overlay
		overlay.fadeIn(800);
	});

	// Mouseleave overlay
	$('#gallery-photos li').on('mouseleave' , function(){
		// Create overlay div
		$(this).append('<div class="overlay"></div>');

		// Get the overlay div
		var overlay = $(this).children('.overlay');	

		//Fadeout overlay
		overlay.fadeOut(500);	

	});

});