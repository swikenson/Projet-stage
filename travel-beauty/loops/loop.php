<div class="article-blog">
	<div class="img-post" style="">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	</div>
	<div class="content-post">
		<div class="date">
			<span>Publié le : <?php echo get_the_date(); ?></span>
		</div>
        <div class="beauty">
            <span>Dans la catégorie : <?php the_category(' | '); ?></span>
        </div>
		<div class="title">
			<h3><?php the_title(); ?></h3>
		</div>
		<div class="content">
			<p><?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>"><u>Lire l'article</u></a></p>
		</div>
		<div class="comments">
			<!-- <a href="">Laissez un commentaire</a> -->
		</div>
	</div>
</div>				