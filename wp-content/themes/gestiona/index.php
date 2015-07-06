<?php get_header(); ?>

<div id="banner" class="container hidden-xs">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      
        <div class="item active">
          <div class="col-xs-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-image.jpg"></div>
          <div class="banner-content col-xs-5">
          	<h1>Conhecimento</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat metus orci. Duis semper porta posuere. Donec eu maximus ex. Morbi nec magna vestibulum, tincidunt ipsum ac, interdum arcu.</p>
          </div><!--banner-content-->
        </div><!--item-->
        
        <div class="item">
          <div class="col-xs-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-image.jpg"></div>
          <div class="banner-content col-xs-5">
          	<h1>Conhecimento</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat metus orci. Duis semper porta posuere. Donec eu maximus ex. Morbi nec magna vestibulum, tincidunt ipsum ac, interdum arcu.</p>
          </div><!--banner-content-->
        </div><!--item-->
        
      </div><!--carousel-inner-->
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon  icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon  icon-next" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
</div><!--banner-->

<div id="fomento" class="container-fluid">
	<div class="container">
    	<div class="row">
        	<div id="fomento-title" class="center-block">
                <h2><span>Fomento à<br></span>Inovação</h2>
                <p>Boas ideias devem sair do papel<br>e a Gestiona vai ter ajudar.</p>
            </div><!--fomento-title-->
        </div><!--row-->
        
    	<div id="fomento-list" class="row">
        
        	<div class="fomento-single col-sm-6 col-lg-3">
            	<span class="fomento-single-ico"></span>
                
            	<div class="fomento-single-content">
                	<h3>Lei do bem</h3>
                	<p>Realiza pesquisa e desenvolvimento de inovação tecnológica? A Lei 11.196/05, conhecida também como Lei do bem, pode se encaixar perfeitamente para seu projeto ser custeado por incentivos fiscais.</p>
                </div><!--fomento-single-content-->
            </div><!--fomento-single-->
            
            <div class="fomento-single col-sm-6 col-lg-3">
            	<span class="fomento-single-ico"></span>
                
            	<div class="fomento-single-content">
                	<h3>Inovar Auto</h3>
                	<p>Produz, comercializa ou investe no mercado automobilístico? A Inovar Auto apoia o desenvolvimento em diversas áreas relacionadas ao mercado. Do desenvolvimento tecnológico a proteção do meio ambiente.</p>
                </div><!--fomento-single-content-->
            </div><!--fomento-single-->
            
            <div class="fomento-single col-sm-6 col-lg-3">
            	<span class="fomento-single-ico"></span>
                
            	<div class="fomento-single-content">
                	<h3>Lei de<br>informática</h3>
                	<p>Investimentos em Pesquisa e Desenvolvimento para as áreas de hardware e automação? A Lei de Informática apoia setores de tecnologia que atuam nesta área.</p>
                </div><!--fomento-single-content-->
            </div><!--fomento-single-->
            
            <div class="fomento-single col-sm-6 col-lg-3">
            	<span class="fomento-single-ico"></span>
                
            	<div class="fomento-single-content">
                	<h3>Captação<br>de Recursos</h3>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti. Vivamus porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                </div><!--fomento-single-content-->
            </div><!--fomento-single-->
            
        </div><!--row-->
        
        <div class="row text-center">
        	<a class="ver-mais-branco"><span class="ico-plus-branco"></span> ver mais</a>
        </div><!--row-->
    </div><!--container-->
</div><!--fomento-->

<div id="contato-home" lang="container-fluid">
	<div class="container">
    	<div class="row text-center">
        	<div>
            	<p>Nossos consultores estão prontos para lhe atender</p>
                <a class="botao">Aguardamos seu contato</a>
            </div>
        </div>
    </div>
</div><!--contato-home-->

<div id="mais-gestiona" class="container-fluid">
    <div class="container">
        <div class="row">
            <div id="mais-gestiona-title" class="center-block">
                <h2><span>Mais<br></span>Gestiona</h2>
                <p>Outros serviços essenciais<br>para você e seu negócio!</p>
            </div>
        </div><!--row-->
        
        <div id="mais-gestiona-list" class="row">
            <div class="col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-offset-2 mais-gestiona-single">
                <span class="mais-gestiona-thumb"></span>
                <h3>Gestão de Conhecimento</h3>
            </div><!--mais-gestiona-single-->
            
            <div class="col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-offset-1 mais-gestiona-single">
                <span class="mais-gestiona-thumb"></span>
                <h3>Gestão Financeira</h3>
            </div><!--mais-gestiona-single-->
            
            <div class="col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-offset-1 mais-gestiona-single">
                <span class="mais-gestiona-thumb"></span>
                <h3>Educação Corporativa</h3>
            </div><!--mais-gestiona-single-->
            
            <div class="clearfix"></div>
        </div><!--mais-gestiona-list-->
        
        <div class="row text-center">
            <a class="ver-mais-cinza"><span class="ico-plus-cinza"></span> ver mais</a>
        </div><!--row-->
    </div><!--container-->
</div><!--mais-gestiona-->

<div id="conhecimento" class="container-fluid">
	<div class="container">
    	<div class="row">
        	<div id="conhecimento-title" class="center-block">
                <h2>Conhecimento<br><span>Blog e Biblioteca</span></h2>
                <p>Notícias, artigos, documentos<br>e downloads ao seu alcance.</p>
            </div>
        </div><!--row-->
        
        <div id="conhecimento-list" class="row">
        
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
        	<div class="col-sm-6 col-md-4 col-lg-3">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
            <div class="col-md-4 visible-md">
            	<div class="conhecimento-singel">
                    <span>Blog / Artigo</span>
                    <h4>Lorem Ipsum Dolor Sit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis interdum mollis. Suspendisse potenti...
    porta, nisi eget ultricies rutrum, metus urna consequat justo, ut ornare dolor mi.</p>
                    <a>+ ver mais</a>
                </div><!--conhecimento-singel-->
            </div><!--col-sm-6 col-md-4 col-lg-3-->
            
            
        </div><!--conhecimento-list-->
        
        <div class="row text-center">
            <a class="ver-mais-cinza"><span class="ico-plus-cinza"></span> ver mais</a>
        </div><!--row-->
    </div><!--container-->
</div><!--conhecimento-->
<?php get_footer(); ?>