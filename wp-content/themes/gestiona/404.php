<?php get_header(); ?>
<?php global $post;?>
<div id="banner-interno" class="container-fluid <?php echo $post->post_name;?>">
	<div class="container text-center">
    	<h1>Página não encontrada!</h1>
    </div>
</div><!--banner-interno-->

<section id="page" class="container-fluid">
    <div class="container">
        <div class="row text-center">	
            <p>Desculpe. Não foi possível encontrar o que você estáva procurando.</p>
        </div><!--row-->
    </div><!--container-->
</section>
<?php get_footer(); ?>