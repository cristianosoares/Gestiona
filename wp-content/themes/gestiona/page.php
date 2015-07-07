<?php get_header(); ?>
<?php global $post;?>
<div id="banner-interno" class="container-fluid <?php echo $post->post_name;?>">
	<div class="container text-center">
    	<h1><?php echo get_the_title(); ?></h1>
    </div>
</div><!--banner-interno-->

<section id="page" class="container-fluid">
    <div class="container">
        <div class="row">	
             <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
              
                <?php the_content() ?>
            <?php endwhile; ?>
              
            <?php else : ?>
                <p></p>
            <?php endif ?>
        </div><!--row-->
    </div><!--container-->
</section>
<?php get_footer(); ?>