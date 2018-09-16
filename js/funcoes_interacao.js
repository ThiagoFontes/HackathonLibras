jQuery(document).ready(function($) {
	$(".link_pesquisa").click(function(e) {
		/* Act on the event */
		e.preventDefault();
		var link = $(this).attr('href');
		
		location.href=link;
	});
	var cont = 0;
	$("#rank_menu").click(function() {
		/* Act on the event */

		var hidden_login = $("#hidden_login").val();
		
		if(hidden_login !=="erro"){
			location.href = "jogo.php";
		}

		if(cont == 0){
			$(".area_login").show('fast');
			cont++;
		}else{
			$(".area_login").hide();
			cont=0;
		}
		
		
	});


	//login 

	$("#btn-logar").click(function() {
		/* Act on the event */
		var login = $("#username").val();
		var senha = $("#password").val();

		$.ajax({
				beforeSend: function(){
					
				},
				method: "POST",
				
				url:"php/login.php",
				 // Não faz cache
				cache: false,

				data:{username:login,password:senha},

				 // Se enviado com sucesso
				success: function( dados ) {
					if(dados == "ok"){
						location.href = "jogo.php";
					}
					
				},

				error: function(){
					 alert("error login");
				}
		

			});

	});

	//jogo Resposta

	var dados = {
		score:0,
		n_desafio:0,
		videos:["videos/voce_tem_alergia_a_algum_medicamento.mp4","videos/dor_de_cabeca.mp4","videos/voce_tem_diabetes.mp4"]

	}

	$(".respostas_lista a").click(function() {
		/* Act on the event */
		var valor = $(this).attr("id");
		video = dados.n_desafio;

		//alert(video);
		var opcao = $(this);
		$('.respostas_lista a').removeClass('op_errado');
		$('.respostas_lista a').removeClass('active');
		$(this).addClass('active');

		

		$(".btn-responder").click(function() {
			/* Act on the event */
			if(video == 0 && valor == "alergia-a-algum-medicamento"){
				$('.respostas_lista a').removeClass('op_errado');
				$('.respostas_lista a').removeClass('active');
				dados.score +=100;
				dados.n_desafio+=1;
				$("#desafios_n").html("Desafio 2");
				$("#score_area").html("Score: "+dados.score);
				$(".jogo_video").html("<video controls><source src='"+dados.videos[dados.n_desafio]+"' type='video/mp4'></video>");
			}
			else{
				$('.respostas_lista a').removeClass('active');
				opcao.addClass('op_errado');
			}
		});

	});
	
	
});

