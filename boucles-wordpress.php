<!--BOUCLE 1-->
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part('loops/loop');
endwhile; else:
endif;
?>
<!--BOUCLE 2-->
<?php
$args=array('numberposts' =>6,);
global $post;
$custom_posts =get_posts($args);
foreach($custom_posts as $post) :setup_postdata($post);
    get_template_part('loops/loop');
endforeach;
wp_reset_query();
?>