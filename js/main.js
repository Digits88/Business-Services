$(function() {

	var currentSelection = "";
	
	if(window.location.hash) {

		window.scrollTo(0, 0);

		currentSelection = window.location.hash;
		$("#page-intro-but").show();

		$("#page-intro").hide();

		$(currentSelection).show();

		$('#sub-nav a[href='+currentSelection+']').addClass('page-nav-selected');

	}
	
	$("#sub-nav a").on("click", function(e) {

		e.preventDefault();
		$("#page-intro-but").show();
		if(currentSelection && currentSelection !== $(this).attr('href')) {
			$(currentSelection).hide();

			  currentSelection = $(this).attr('href');

			$(currentSelection).show();

			history.replaceState(null, '', currentSelection);

		} else {
			currentSelection = $(this).attr('href');

			$("#page-intro").hide();
			

			$(currentSelection).show();

			history.replaceState(null, '', currentSelection);
		}
		
		
		$("#sub-nav a.page-nav-selected").removeClass('page-nav-selected');

		$(this).addClass('page-nav-selected');
		
	});

	$("#page-intro-but").on("click", function(e) {

		e.preventDefault();
		$(this).hide();
		$("#page-intro").show();

		currentSelection = '';
		
		$(".page section").css("display","none");
		$("#sub-nav a.page-nav-selected").removeClass('page-nav-selected');

		history.replaceState(history.state, '', ' ');

	});

});