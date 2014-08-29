<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Ecommerce
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->
     <!--  if(is_page_template('products-page.php')){
         echo '<div class="footer-nav collapse navbar-collapse navbar-responsive-collapse">  ';             
    // begin modifications to add footer menu
    wp_nav_menu (
        array (
            'theme_location' => 'footer-nav',
            'container_id' => 'footer-menu'
        ) );
    echo '</div>';
                   }?>-->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
             
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<?php do_action( 'ecommerce_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'ecommerce' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ecommerce' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'ecommerce' ), 'ecommerce', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>