<?
/**
 * Carousel Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       inside_1.0.0
 *
 */
 ?>

  <section class="section section-carousel">
      <div class="container">
          <!-- Title -->
    <?php if(get_sub_field('title') ) : ?>
        <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
    <?php endif; ?>
    <!-- Title -->
          <?php $images = get_sub_field('images'); ?>
          <?php if($images): $i =0; $y =0; ?>
          <div class="slider_3">
              <!-- Carrousel -->
               <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php  $i++; endforeach;?>
              <!-- Carrousel -->
          </div>

          <?php endif; ?>
      </div>
 </section>