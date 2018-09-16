<?php
session_start();

if(!$_SESSION["login"] || !$_SESSION["senha"]){
    header('Location: index.php');
}


?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>WikiLibras</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="stylesheet" href="css/bootstrap.min.css"> 

        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='style.css' />
        <link rel="stylesheet" type="text/css" href="css/style_me.css">
       
        
        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

        

    </head>


    <body class="home blog">


        <!-- Preloader Gif -->
        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="images/ajax-document-loader.gif" alt="Loading...">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Left Sidebar -->
        <div id="sidebar" class="sidebar">
            <div class="menu-left-part">
                
                <div class="site-info-holder">
                    <h1 class="site-title">WikiLibras</h1>
                    <p class="site-description">
                       Projeto Libras na saúde.
                    </p>
                </div>
                <nav id="header-main-menu">
                    <ul class="main-menu sm sm-clean">
                        <li><a href="index.html" class="current">Página inicial</a></li>
                        <li><a href="perfil.php">Perfil</a></li>
                        <li><a href="contact.html">Configurações</a></li>
                    </ul>
                </nav>
                <footer>
                    <div class="footer-info">
                        © 2018 WikiLibras. <br>  <i class="fa fa-heart"></i>.
                    </div>
                </footer>
            </div>
            <div class="menu-right-part">
                <div class="logo-holder">
                    <a href="index.html">
                        <img src="images/logo.png" alt="Suppablog WP">
                    </a>
                </div>
                <div class="toggle-holder">
                    <div id="toggle">
                        <div class="menu-line"></div>
                    </div>
                </div>
                <div class="social-holder">
                    <div class="social-list">
                        <a href="#"><i class="fa fa-list-ol"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        
                    </div>
                </div>
                <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Home Content -->
        <div id="content" class="site-content">

        <!-- CONTEUDO  -->   


        <div class="full-screen-scroll area_video">
                <ul id="cbp-bislideshow" class="cbp-bislideshow scroll">
                    <li >
                        <article class="entry-holder">
                            <div class="image-slider-wrapper jogo_video">
                                <!-- IMAGEM GIF -->
                                <video  controls>
                                 <source src="videos/voce_tem_alergia_a_algum_medicamento.mp4" type="video/mp4">
                                </video>
                            </div>
                            <h2 class="entry-title">
                                <a href="single.html">Ao que se refere o vídeo?</a>
                            </h2>
                            <div class="info-holder">
                                <div class="cat-links">
                                    <ul>
                                        <li style="width: fit-content;">
                                            <a href="#">Dê sua resposta</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-date published">100 pontos</div>
                            </div>
                            <div class="excerpt"></div>
                            <div class="clear"></div>
                        </article>
                    </li>

                    <li style="background-image: url('demo-images/01.jpg');">
                        <nav class="nav nav-pills nav-justified">
                          <a class="nav-link" href="#"><h4 id="desafios_n">Desafio 1</h4></a>
                          <a class="nav-link" href="#"><?php echo "Bem vindo, ". $_SESSION["login"]."!"; ?></a>
                          

                          <a class="nav-link disabled" href="#"><span class="badge badge-pill badge-primary" id="score_area">Score: 0</span> </a>
                        </nav>
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="list-group respostas_lista">
                                  <a href="#" class="list-group-item list-group-item-action active" id="consulta">
                                    O vídeo fala de consulta
                                  </a>
                                  <a href="#" class="list-group-item list-group-item-action" id="tratamento">Fala de tratamento</a>
                                  <a href="#" class="list-group-item list-group-item-action" id="alergia-a-algum-medicamento">Fala de alergia a algum medicamento</a>
                                  <a href="#" class="list-group-item list-group-item-action" id="diabetes">Pergunta se tem diabetes</a>
                                  <a href="#" class="list-group-item list-group-item-action" id="hipertensao">Pergunta se tem hipertensão</a>
                                </div>

                            </div>
                           
                        </div>
                        <div class="row mt-4 pl-5">
                            
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-success btn-lg btn-responder">Responder</button>
                            </div>
                            
                        </div>
                    </li>
                </ul>
            </div>
            




        <!--Load JavaScript-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script> 


        <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/main.js'></script>

        <!-- meus scripts -->
        
        <script type='text/javascript' src='js/funcoes_interacao.js'></script>
        <script type='text/javascript' src='js/funcoes_dados.js'></script>
    </body>
</html>
