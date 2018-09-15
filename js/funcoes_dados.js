jQuery(document).ready(function($) {
	$("#pesquisa").keyup(function() {
		/* Act on the event */
		var valor = $(this).val();

		$.ajax({
			beforeSend: function(){
				
			},
			method: "POST",
			
			url:"",
			
 
			 // Os dados do form
			data: { valor:valor },


			 // Não faz cache
			cache: false,
				
			 
			dataType: "json",

			 // Se enviado com sucesso
			success: function( dados ) {},

			error: function(){
				alert("Erro na pesquisa");
			}
		

	});
	
});