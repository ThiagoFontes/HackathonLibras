jQuery(document).ready(function($) {
	/*$("#pesquisa").keyup(function() {
		
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
	*/
	function pegarSinais(){
		$.ajax({
			beforeSend: function(){
				
			},
			method: "POST",
			
			url:"php/listarSinais.php",
			 // Não faz cache
			cache: false,

			dataType: "json",
			 // Se enviado com sucesso
			success: function( dados ) {
				alert(dados);
			},

			error: function(){
				alert("Erro ao listar os sinais");
			}
		

	});
	}
	pegarSinais();
});