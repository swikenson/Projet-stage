<?php
/*
Template Name: About
*/
get_header();
$id = 37;
$included_page = get_page( $id );
$content = apply_filters('the_content', $included_page->post_content);
$title = apply_filters('the_title', $included_page->post_title);
?>
	<div class="container-blog" data-midnight="bg-header">
		<main>
			<div class="about">
				<?php
    if (!is_home()){?>
        <h1 id="name"><?php echo $title; ?></h1>
    <?php }
    ?>
				<div class="profil-description">
						<?php
                if (is_home()){
                    echo substr($content, 0,1000).'...[<a href="'.get_page_link($id).'"><i class="fas fa-plus"></i></a>]';
//                    echo '<div><u><a href="'.get_page_link($id).'"><i class="fas fa-plus"></i></a></u></div>';
                }else{
                    echo $content;
                }
            ?>
				</div>
			</div>
			<?php
    if (!is_home()){?>
			<div id="contact">
				<h3>Me contacter</h3>
				<?php
            echo do_shortcode('[contact-form-7 id="127" title="Sans titre"]');
            ?>
			</div>
			<?php }
    ?>
		</main>
	</div>
	<?php
if(!is_home()){
    get_footer();
}
?>