<?
/**
 * Texte-Image Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       inside_1.0.0
 *
 */
 ?>

  <section class="section section-text-image">

  <div class="container">
    <div class="row">
    <div class="col-sm-6 section-text-image__text animate__animated animate__slideInLeft animate__delay-2s ">
        <div class="section-text-image__text__inner">
            <!-- Title -->
            <?php if(get_sub_field('title') ) : ?>
                   <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
            <?php endif; ?>
           <!-- Title -->
           <!-- Text -->
            <?php if(get_sub_field('text') ) : ?>
              <?php echo get_sub_field('text'); ?>
            <?php endif; ?>
           <!-- Text -->
        </div>
    </div>
    <div class="col-sm-6 section-text-image__image animate__animated animate__slideInRight animate__delay-2s">

        <?php if ( get_sub_field('image') ) : $img = get_sub_field('image'); ?>
        <div class="img-wrapper">
          <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
        <?php endif; ?>
        <svg width="0" height="0">
	<clipPath id="svgImage" clipPathUnits="objectBoundingBox" transform="scale(0.0015, 0.0012)">
		<path d="M517.16,731.1l-414.68,62A89.29,89.29,0,0,1,0,704.75V89.29A89.28,89.28,0,0,1,97.51.39l443.7,41a89.28,89.28,0,0,1,80.92,93.95l-29,512.46A89.29,89.29,0,0,1,517.16,731.1Z"></path>
	</clipPath>
</svg>

    </div>
    </div>

  </div>
 </section>