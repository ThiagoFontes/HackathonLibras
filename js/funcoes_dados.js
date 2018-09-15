jQuery(document).ready(function($) {
	function pegar_links_iniciais(){
		var search = "";
		$.ajax({
				beforeSend: function(){
					
				},
				method: "GET",
				
				url:"php/searchSinais.php",
				 // Não faz cache
				cache: false,

				data:{search:search},

				dataType: "json",
				 // Se enviado com sucesso
				success: function( dados ) {
					$("#content_lista_pesquisa").html("");
					var cont = 5;
					for(var i = 0; i<dados.sinais.length; i++ ){

						$("#content_lista_pesquisa").append('<article id="post-2" class="blog-item-holder"><div class="entry-content relative"><div class="content-1170 center-relative"><h2 class="entry-title"><a href="visualizar.php?p='+dados.sinais[i].pt_title+'" class="link_pesquisa">'+dados.sinais[i].pt_title+'</a></h2><div class="cat-links"><ul><li><a href="#">'+dados.sinais[i].category+'</a></li></ul></div><div class="entry-date published">Veja o vídeo ilustrativo</div><div class="clear"></div></div></div></article>');
						if(cont == 0){
							break;
						}
						cont--;

					}
					
				},

				error: function(){
					
					 M.toast({html: 'Pesquisa não encontrada!', classes: 'rounded'});
				}
		

			});

	}pegar_links_iniciais();
	$("#pesquisa").keyup(function() {
		
		var search = $(this).val();

			$.ajax({
				beforeSend: function(){
					
				},
				method: "GET",
				
				url:"php/searchSinais.php",
				 // Não faz cache
				cache: false,

				data:{search:search},

				dataType: "json",
				 // Se enviado com sucesso
				success: function( dados ) {
					$("#content_lista_pesquisa").html("");
					for(var i = 0; i<dados.sinais.length; i++ ){

						$("#content_lista_pesquisa").append('<article id="post-2" class="blog-item-holder"><div class="entry-content relative"><div class="content-1170 center-relative"><h2 class="entry-title"><a href="visualizar.php?p='+dados.sinais[i].pt_title+'" class="link_pesquisa">'+dados.sinais[i].pt_title+'</a></h2><div class="cat-links"><ul><li><a href="#">'+dados.sinais[i].category+'</a></li></ul></div><div class="entry-date published">Veja o vídeo ilustrativo</div><div class="clear"></div></div></div></article>');
						
					}
					
				},

				error: function(){
					
					 M.toast({html: 'Pesquisa não encontrada!', classes: 'rounded'});
				}
		

			});


		
	});
	
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
				
				for(var i = 0; i<dados.sinais.length; i++ ){
					$(".content_labels").append("<span><a href=\"visualizar.php?p="+dados.sinais[i].pt_title+"\" class=\"link_pesquisa\">"+dados.sinais[i].pt_title+"</a></span>");
					
				}
				
			},

			error: function(){
				alert("Erro ao listar os sinais");
			}
		

	});
	}
	pegarSinais();
});