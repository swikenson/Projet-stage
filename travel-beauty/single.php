<?php
get_header();
the_post();
?>
	<div class="container-blog" data-midnight="bg-header">
		<main>
			<article class="article-single">
				<div class="date-single">
					<span>Publié le : <?php echo get_the_date(); ?></span>
				</div>
                <div class="date-single">
                    <span>Dans la catégorie : <?php the_category(' | '); ?></span>
                </div>
				<div class="title-single">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="img-single">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>
				<div class="content-single">
					<?php the_content(); ?>
				</div>
				
				<!-- POUR AFFICHER MON WIDGET ----->
			</article>
			<div class="comment_post">
				<?php comments_template(); ?>
			</div>

		</main>

	</div>
    <div class="prev_next_article">
        <?php previous_post_link('%link'); ?>
        <?php next_post_link('%link'); ?>
    </div>
	<?php
get_footer();
?>