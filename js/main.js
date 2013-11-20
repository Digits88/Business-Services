$(function() {


	$(".page section").hide();
	var currentSelection = "";
	
	if(window.location.hash) {

		window.scrollTo(0, 0);

		currentSelection = window.location.hash;
		$("#page-intro-but").fadeIn();

		$("#page-intro").hide();

		$(currentSelection).css('opacity', 0)
		  .slideDown('slow')
		  .animate(
		    { opacity: 1 },
		    { queue: false, duration: 'slow' }
		  );

		  // change the sub-nav to reflect current state

	}
	
	$("#sub-nav a").on("click", function(e) {

		e.preventDefault();

		$("#sub-nav a").removeClass('page-nav-selected');
		$(this).addClass('page-nav-selected');

		if($("#page-intro-but").is(":visible")) {

			// don't do anything
				
		} else {
			$("#page-intro").slideUp('fast')
					  .animate(
					    { opacity: 0 },
					    { queue: false, duration: 'fast',
					    complete: function (){
					    	$("#page-intro-but").css('opacity', 0)
							  .slideDown('fast')
							  .animate(
							    { opacity: 1 },
							    { queue: false, duration: 'fast' }
							  );
					    }

					});
		}
		
		if(currentSelection !== $(this).attr('href')) {

			if(!currentSelection) {
				currentSelection = $(this).attr('href');
				$(currentSelection).css('opacity', 0)
				  .slideDown('slow')
				  .animate(
				    { opacity: 1 },
				    { queue: false, duration: 'slow' }
				  );

				history.replaceState(null, '', $(this).attr('href'));
			
			} else {

				$(currentSelection).slideUp('slow').animate(
				    { opacity: 0 },
				    { queue: false, duration: 'slow' }
				  );
				currentSelection = $(this).attr('href');
				$(currentSelection).css('opacity', 0)
				  .slideDown('slow')
				  .animate(
				    { opacity: 1 },
				    { queue: false, duration: 'slow' }
				  );

				history.replaceState(null, '', $(this).attr('href'));
			}
		}

	});

	$("#page-intro-but").on("click", function(e) {

		e.preventDefault();
		$(this).slideUp('fast')
			  .animate(
			    { opacity: 0 },
			    { queue: false, duration: 'fast',
			    complete: function() {
					$("#page-intro").css('opacity', 0)
						  .slideDown('fast')
						  .animate(
						    { opacity: 1 },
						    { queue: false, duration: 'fast' }
						  );
						 }
				});

		currentSelection = '';
		

		$(".page section").css("display","none");
		$("#sub-nav a").removeClass('page-nav-selected');

		history.replaceState(history.state, '', ' ');

	});

});