$(function() {

	var currentSelection = "";
	
	if(window.location.hash) {

		currentSelection = window.location.hash;

		$('#sub-nav a[href='+currentSelection+']').parent().addClass('page-nav-selected');

		$(currentSelection).slideDown();

		// window.scrollTo(0, 0);

	} else {
		var currentSelection = $('#sub-nav ul li:first-child a').attr('href');
		$(currentSelection).show();
		$('#sub-nav a[href='+currentSelection+']').parent().addClass('page-nav-selected');
		history.replaceState(null, '', currentSelection);
	}
	
	$("#sub-nav a").on("click", function(e) {

		e.preventDefault();

		if(currentSelection && currentSelection !== $(this).attr('href')) {
			newSelection = $(this).attr('href');
			$(currentSelection).slideUp().fadeOut(function(e) {
				currentSelection = newSelection;
				$(currentSelection).slideDown();
			});

			history.replaceState(null, '', currentSelection);

		} else {
			currentSelection = $(this).attr('href');

			// $("#page-intro").hide();
			

			$(currentSelection).slideDown();

			history.replaceState(null, '', currentSelection);
		}
		
		
		$("#sub-nav li.page-nav-selected").removeClass('page-nav-selected');

		$(this).parent().addClass('page-nav-selected');
		
	});

	// $("#page-intro-but").on("click", function(e) {

	// 	e.preventDefault();
	// 	$(this).hide();
	// 	$("#page-intro").show();

	// 	currentSelection = '';
		
	// 	$(".page section").css("display","none");
	// 	$("#sub-nav a.page-nav-selected").removeClass('page-nav-selected');

	// 	history.replaceState(history.state, '', ' ');

	// });

});