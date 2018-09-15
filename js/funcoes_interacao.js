jQuery(document).ready(function($) {
	$(".link_pesquisa").click(function(e) {
		/* Act on the event */
		e.preventDefault();
		var link = $(this).attr('href');
		
		location.href=link;
	});

	//menu inferior
	
	
	
});