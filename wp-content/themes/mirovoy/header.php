<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Mirovoy Experience</title>

    <link rel="icon" href="<?php echo get_bloginfo('template_url') ?>/img/favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->

    <!-- WE NEED TO MAKE THAT FOR THE ROUTES -->
    <!-- <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- SAYING TO WORDPRESS "THIS IS THE HEAD"-->
    <?php wp_head();?>
  </head>

  <body class="home">
  	<!-- Preloader -->
  	<div id="preloaders">
  		<div class="premix-table">
  			<div class="premix-table-cell">
  				<div class="bar-c">
  					<div id="bar-1" class="bar"></div>
  					<div id="bar-2" class="bar"></div>
  					<div id="bar-3" class="bar"></div>
  					<div id="bar-4" class="bar"></div>
  					<div id="bar-5" class="bar"></div>
  					<div id="bar-6" class="bar"></div>
  					<div id="bar-7" class="bar"></div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<!-- Premix Body Start -->
  	<!-- Premix Header Start -->
  	<div id="main_menu_fixed"></div>
  	<header class="premix-main-menu-area">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-2 col-sm-3 col-xs-6">
  					<div class="logo">
  						<a href="index.html"><img src="<?php echo get_bloginfo('template_url')?>/img/logo.png" alt=""></a>
  					</div> <!-- .logo End -->
  				</div>
  				<div class="col-md-10 col-sm-9 col-xs-6 premix-menu-section">
  					<div class="premix-menu">
  						<ul>
                <li><?php wp_list_pages( '&title_li=' ); ?></li>
  						</ul>

  					</div> <!-- .premix-menu End -->
  					<div class="premix-menu premix-mobile-menu">
  						<ul class="slimmenu">
  							<li><?php wp_list_pages( '&title_li=' ); ?></li>
  						</ul>
  					</div> <!-- .premix-menu End -->
  				</div>
  			</div>
  		</div>
  		<progress value="0" id="premix-progressBar" class="premix-single">
  			<div class="premix-progress-container">
  				<span class="premix-progress-bar"></span>
  			</div>
  		</progress>
  	</header>
