<?php
/*
Template Name: Confidential
*/
get_header();
$id = 3;
$included_page = get_page( $id );
$content = apply_filters('the_content', $included_page->post_content);
$title = apply_filters('the_title', $included_page->post_title);
?>
    <div class="container-blog" data-midnight="bg-header">
        <main>
            <div class="about">

                    <h1 id="name"><?php echo $title; ?></h1>

                <div class="profil-description">
                    <?php

                        echo $content;

                    ?>
                </div>
            </div>

        </main>
    </div>
<?php

    get_footer();
