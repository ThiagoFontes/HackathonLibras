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

        <link rel="stylesheet" href="css/materialize.min.css">

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


    <body class="single-post">

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
                        <a href="#"><i class="fa fa-gamepad"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        
                    </div>
                </div>
                <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Single Content -->
        <div id="content" class="site-content center-relative">
            
            <div class="single-post-wrapper content-1070 center-relative">

                <article class="center-relative">
                    <h1 class="entry-title" style="text-transform: uppercase;">
                        I like to reinvent myself
                    </h1>
                    <div class="post-info content-660 center-relative">
                        <div class="cat-links">
                            <ul>
                                <li><a href="#">Lorem </a></li>
                            </ul>
                        </div>
                        <div class="entry-date published">Setembro 09, 2018</div>
                        <div class="clear"></div>
                    </div>

                    <div class="entry-content">
                        <div class="image-slider-wrapper">
                                <!-- IMAGEM GIF -->
                                <video  controls>
                                 
                                </video>
                            </div>
                            <div class="clear"></div>
                        <div class="content-wrap content-660 center-relative">
                           <!--  <p>Now when I had mastered the language of this water and had come to know every trifling feature that bordered the great river as familiarly as I knew the letters of the alphabet, I had made a valuable acquisition.</p>
                            <br> -->
                            <div class="clear"></div>
                        </div>
                        
                </article>
            </div>
            <<input type="hidden" id="titulo_artigo" value="<?php echo $_GET['p'] ?>">
        </div>



        <!--Load JavaScript-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/materialize.min.js"></script>
            
        <script type="text/javascript">
             jQuery(document).ready(function($) {
                
                var pt_title = $("#titulo_artigo").val();            
               
               

                $.ajax({
                    beforeSend: function(){
                       
                    },
                    method: "GET",
                    
                    url:"php/getSinal.php",
                     // Não faz cache
                    cache: false,

                    data:{pt_title:pt_title},


                    dataType: "json",
                     // Se enviado com sucesso
                    success: function( dados ) {
                        
                        $('.entry-title').html(dados.pt_title); 
                        $('.cat-links ul li').html("<a href=\"#\">"+dados.category+"</a>");  
                        $('.image-slider-wrapper video').html("  <source src=\""+dados.gif_url+"\" type=\"video/mp4\">");                 
                        
                    },

                    error: function(){
                        alert("error");
                         M.toast({html: 'Pesquisa não encontrada!', classes: 'rounded'});
                    }
            

                });

            });
        </script>

        <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
    </body>
</html>
