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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

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
    </div>
  </div>
</nav>
<?php if ( is_home()): ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
<?php endif; ?>
<?php if ( is_front_page()) : ?>
            <header class="page-header page-header_front-page">
              <img class="page-header_logo" src="<?php if($image[0]){ echo $image[0];}?>" alt="<?php echo get_bloginfo('name')?>">

                <!-- <img class="clip-svg" src="//localhost:3000/wp-content/uploads/2021/08/MicrosoftTeams-image.jpg" alt="<?php // echo get_bloginfo('name')?>"> -->
<div class="site-header clip-svg"></div>
                <svg width="0" height="0">
                  <clipPath id="svgClip" clipPathUnits="objectBoundingBox" class="svg-clip">
                    <path d="M16.91,0,.23,313c-4.36,82,53.12,152.94,130,160.5l713,70.12c84.11,8.27,156.7-62.1,156.7-151.88V0Z"></path>
                  </clipPath>
                </svg>
            </header>

<?php elseif ( is_single() || is_singular()) : ?>
            <header class="page-header page-header_front-page">
            <h1 class="page-title"><?php the_title(); ?></h1>
<div class="site-header clip-svg"></div>
                <svg width="0" height="0">
                  <clipPath id="svgClip" clipPathUnits="objectBoundingBox" class="svg-clip">
                    <path d="M16.91,0,.23,313c-4.36,82,53.12,152.94,130,160.5l713,70.12c84.11,8.27,156.7-62.1,156.7-151.88V0Z"></path>
                  </clipPath>
                </svg>
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