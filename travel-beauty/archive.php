<?php
get_header();
?>
	<div class="container-blog" data-midnight="bg-header">
		<h2 class="archive-title">Tous les articles de la catégorie : <span><?php the_archive_title(); ?></span></h2>
		<main>
				
			<article class="">
				<?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part('loops/loop');
        endwhile; else:
        endif;
        ?>
<!--                --><?php
//                $args=array('numberposts' =>6,);
//                global $post;
//                $custom_posts =get_posts($args);
//                foreach($custom_posts as $post) :setup_postdata($post);
//                    get_template_part('loops/loop');
//                endforeach;
//                wp_reset_query();
//                ?>
			</article>
			<div class="navigation"><?php bongo_wp_pagination(); ?></div>

		</main>

	</div>
	

<?php
get_footer();
?>