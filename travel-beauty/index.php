<?php
get_header();
the_post();
?>
	<div class="container-blog" data-midnight="bg-header">
		<main>
			<div class="about">
				<h1 id="name"><?php the_author(); ?></h1>
				<?php get_template_part('about'); ?>				
			</div>
			
			<article class="">
<!--				--><?php
//        if ( have_posts() ) : while ( have_posts() ) : the_post();
//            get_template_part('loops/loop');
//        endwhile; else:
//        endif;
//        ?>
                <?php
                $args=array('numberposts' =>6,);
                global $post;
                $custom_posts =get_posts($args);
                foreach($custom_posts as $post) :setup_postdata($post);
                    get_template_part('loops/loop');
                endforeach;
                wp_reset_query();
                ?>
			</article>

		</main>

	</div>
	

<?php
get_footer();
?>