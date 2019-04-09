<footer data-midnight="bg-header">
	<?php
        echo do_shortcode('[iscwp-grid username="instagram" limit="10" grid=""]');
        ?>
	<div class="footer-description">
		<div class="container">
			<div class="copyright">
				<a href="<?php bloginfo('url'); ?>">
					<?php bloginfo('url'); ?>
					<i class="far fa-copyright"></i>
				</a>
			</div>
			<div class="legal-mentions">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_class' => 'nav-blog',
                    'container' =>false ) ); ?>
<!--                <a href="">Politique de confidentialité</a>-->
			</div>
		</div>			
	</div>
</footer>

</body>
</html>