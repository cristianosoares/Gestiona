<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|', true, 'left' ); ?></title>
       
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css" rel="stylesheet">    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  
  <header id="header" class="container">
  	<div class="row">
    	<div id="bar-top" class="col-xs-12">
        	<div class="pull-right">
            	<span class="tel-header">
                	<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-fone-cinza.png">
                	55 11 2062-1441
                </span>
                
            	<div class="face">
                	<a><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-facebook.png"></a>
                </div>
                
                <div class="linkedin">
                	<a><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-linkedin.png"></a>
                </div>
                
            </div><!--pull-righ-->
        </div><!--bar-top-->
    </div><!--row-->
    
    <nav id="nav" class="row">
    	<div id="logo-header" class="col-xs-2">
        	<a><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-gestiona-header.png"></a>
        </div>
        
        <div class="col-xs-10">
            <div class="navbar navbar-default pull-right">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
            
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                    wp_nav_menu( array(
                        'menu'            => 'header',
                        'menu_class'      => 'nav navbar-nav',
                        'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ) );
                ?>
                </div><!-- /.navbar-collapse -->
            </div><!--navbar-->
        </div><!--col-xs-10-->
    </nav>  
  </header>