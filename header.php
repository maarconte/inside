<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       inside_1.0.0
 */
?>
<!DOCTYPE html>
<html <? language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <? inside_gtm('head') ?>
    <!--=== OPEN-GRAPH TAGS ===-->
    <? inside_ogtags() ?>
    <!--=== WP HEAD ===-->
    <? wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <? inside_gtm('body') ?>

     <? $custom_logo_id = get_theme_mod('custom_logo','');
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <a class="navbar-brand" href="<?php echo site_url(); ?>">
    <div class="logo" style="background-image: url('<?php if(get_option('logo_secondary','')): echo get_option('logo_secondary',''); else: echo get_template_directory_uri()?>/assets/images/stanlee_logo_texte.png<?php endif; ?>')"></div>
  </a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-content">


        <?php
        wp_nav_menu( array(
            'theme_location' => 'mainmenu', // Defined when registering the menu
            'menu_id'        => 'menu-main',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav ml-auto',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
        <a href="<?php echo get_option('inside_calendly','#') ?>" target="_blank" class="btn btn-custom yellow ms-auto">
          S'inscrire
        </a>
    </div>
  </div>
</nav>
<?php if ( is_home()): ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
<?php endif; ?>
<?php if ( is_front_page()) : ?>
            <header class="page-header page-header_front-page site-header">
              <img class="page-header_logo" src="<?php if($image[0]){ echo $image[0];}?>" alt="<?php echo get_bloginfo('name')?>">
            </header>

<?php elseif ( is_single() || is_singular()) : ?>
            <header class="page-header page-header_front-page site-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
<div class="site-header clip-svg"></div>
            </header>
<?php endif; ?>
<? if (is_archive() || is_category()): ?>
  <header>
    <h1 class="page-title screen-reader-text">
    <?php
				if ( is_day() ) :
					echo get_the_date();
					elseif ( is_month() ) :
						echo get_the_date( _x( 'F Y', 'monthly archives date format', 'stanlee' ) );
					elseif ( is_year() ) :
						echo get_the_date( _x( 'Y', 'yearly archives date format', 'stanlee' ) );
					else :
						single_cat_title();
					endif;
					?>
    </h1>
  </header>
<? endif; ?>
    <div id="content" class="site-content">