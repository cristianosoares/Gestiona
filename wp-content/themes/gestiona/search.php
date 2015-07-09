<?php
/*
 * The template for displaying Search Results pages
 */

get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=665151493561930";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
<div id="banner-interno" class="container-fluid">
	<div class="container text-center">
    	<h1><?php echo $total_results; ?></h1>
    </div>
</div><!--banner-interno-->
<section id="page" class="container-fluid blog-front">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-9">
            	<ul id="categories-parent">
                	<li><a data-id="0" class="active">todos</a></li>
				<?php
                    $args = array(
                              'orderby' => 'name',
                              'parent' => 0,
                              'hide_empty' => 0
                            );
                    $categoriesIDs = array();// Armazena ids das categorias. Para pegar seus "filhos" logo abaixo
                    $categories = get_categories( $args );
                    
                    foreach ( $categories as $category ) {
                        echo '<li><a data-id="'.$category->term_id.'">' . $category->name . '</a></li>';
                        $categoriesIDs[] = $category->term_id;
                        
                    }
                    ?>
               </ul>  <!--categories-parent--> 
               <ul id="categories-child">
                <?php //onclick="cat_ajax_get(\''.$cat->term_id.' \')
                    foreach ( $categoriesIDs as $categorieID ) {
                    $args = array(
                          'orderby' => 'name',
                          'parent' =>  $categorieID,
                          'hide_empty' => 0
                      );
					  
					  echo '<li data-child="'.$categorieID.'"><a data-id="'.$categorieID.'" class="active">todos</a></li>';
					  
                      $categories = get_categories( $args );
						foreach ( $categories as $category ) {
							echo '<li data-child="'.$categorieID.'"><a data-id="'.$category->term_id.'">' . $category->name . '</a></li>';
						}
                    }
                    ?>
               </ul>
               <div class="clearfix"></div>
            </div><!--col-xs-9-->
            <div class="col-sm-3"><?php get_search_form(); ?></div>
            <div class="clearfix"></div>
            <hr>
        </div><!--row-->
        
        <div class="row">	
        	<div class="col-md-8">            
               <div id="post-list" class="row">
                <?php 
                $args = array (
                    'cat' => 0,
                    'posts_per_page' => 10,
                    'offset'         =>0,
                    'order' => 'DESC'
                );				
                $posts = get_posts( $args );
                foreach ( $search as $post ) { ?>
                        <div class="col-sm-6 post-single">
                        <?php
                            //verifica e coloca thumb
                            if ( has_post_thumbnail( $post->ID ) ) {
                                
                                echo get_the_post_thumbnail( $post->ID, 'thumb-conhecimento',array( 'class' => 'img-responsive' ) );
                            }
                        ?>
                        <div class="post-single-content">
                            <span class="post-list-cat">
                            <?php 
                                $permalinkName = "+ ver mais";
                                
                                foreach((get_the_category($post->ID)) as $category) {
                                    if(get_cat_name( $category->category_parent  ) == "Biblioteca"){
                                        $permalinkName = "download";
                                    } 
                                    echo get_cat_name( $category->category_parent  ).' / '.$category->cat_name;
                                }
                             ?>
                             </span>
                             
                            <h2><?php echo get_the_title($post->ID); ?></h2>
                            <?php echo apply_filters('the_content', substr( $post->post_content, 0, 200) ); ?>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="post-saiba-mais"><?php echo $permalinkName; ?></a>
                        </div><!--post-single-content-->
                    </div><!--post-single-->
                <?php } ?>
               </div><!--post-list-->
            </div><!--col-xs-8-->
            <?php get_sidebar(); ?>
        </div><!--row-->
    </div><!--container-->
</section>

<?php get_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('#categories-child li').hide();
		$("#categories-parent li a").click(function(e) {
			var id = $(this).attr('data-id');
			
			$("#categories-parent li a").removeClass('active');
			$(this).addClass('active');
			
			$("#categories-child li a").removeClass('active');
			$('#categories-child li a[data-id="'+id+'"]').addClass('active');
			
			GetPost(id,0);			
			
			$('#categories-child li').hide();
			$('#categories-child li[data-child="'+id+'"]').show();
		});
		$("#categories-child li a").click(function(e) {
			var id = $(this).attr('data-id');
			
			$("#categories-child li a").removeClass('active');
			$(this).addClass('active');
			
			GetPost(id,0);			
		});
	});
	
	function GetPost(idpost, offset){
		var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); //must echo it ?>';
		jQuery.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {"action": "load-filter", cat: idpost, off:offset },
			success: function(response) {
				jQuery("#post-list").html(response);
				return false;
			}
		});
	}
</script>