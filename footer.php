<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       inside_1.0.0
 */
?>
	</div><!-- #content -->
    <footer class="footer">
      <div class="container">
        <div class="row footer__inner">
       <? if(is_active_sidebar('footer-1')){
      dynamic_sidebar('footer-1');
        } ?>
        </div>
      </div>
    <div class="footer__credits">
      <div class="container">
      <div class="footer__inner">
        <img src="<?php echo get_option('logo_secondary','') ?>" alt="Logo inside">
<div class="d-flex align-items-center justify-content-center">
      © 2021 Inside by everience. Tous droits réservés.
  <?php
        wp_nav_menu( array(
            'theme_location' => 'submenu', // Defined when registering the menu
            'menu_id'        => 'menu-sub',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'footer-menu',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
</div>
      </div>
      </div>
    </div>

    </footer>
    <? wp_footer() ?>
  </body>
</html>
