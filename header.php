<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fontawsome -->

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
<header role="">
	<div class="header-container">
        <div class="nav-button">
            <span class="hamburger"><i class="fa fa-bars"></i></span>
            <span class="cross"><i class="fa fa-times"></i></span>
        </div>
		<div id="rs">
			<span><a href=""><i class="fab fa-instagram"></i></a></span>
			<span><a href=""><i class="fab fa-twitter-square"></i></a></span>
			<span><a href=""><i class="fab fa-linkedin"></i></a></span>
		</div>
        <div class="menu">
            <?php wp_nav_menu( array(
                'theme_location' => 'main',
                'menu_class' => 'nav-blog',
                'container' =>false ) ); ?>
        </div>

	</div>	
	
</header>
<?php if (!is_home()) {
    echo'<div class="return"><a href="'; bloginfo('url');
    echo '"><i class="fas fa-reply-all"></i> Revenir à l\'accueil</a></div>';
} ?>
