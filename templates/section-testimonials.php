<?
/**
 * Testimonials Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       inside_1.0.0
 *
 */
 ?>

  <section class="section section-testimonials">
        <div class="container">
              <?php
              $args = array(
              'post_type' => 'testimonials'
              );
               $the_query = new WP_Query($args);
              if ($the_query->have_posts() ): $i = 0; $y = 0; ?>

                    <!-- Title -->
                        <?php if(get_sub_field('title') ) : ?>
                              <h2 class="section__title mb-5"><?php echo get_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <!-- Title -->
                    <div id="carouselTestimonials" class="section-testimonials__carousel carousel slide" data-ride="carousel">

                          <div class="carousel-inner">
                                <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                                <div class="carousel-item section-testimonials__carousel_item <?php if($y == 0) {echo 'active';} ?>">
                                      <!-- Job -->
                                      <?php if (get_field('quote') ) : ?>
                                            <p class="quote"> <?php echo get_field('quote'); ?></p>
                                      <?php endif; ?>
                                      <!-- Job -->
                                      <!-- Auteur -->
                                            <p class="author"><?php the_title()?></p>
                                      <!-- Auteur -->
                                </div>
                                <?php $y++ ; endwhile;?>
                              </div>

                          <a class="carousel-control-prev" data-bs-target="#carouselTestimonials" role="button" data-bs-slide="prev">
                                <i class="fas fa-chevron-left fa-2x" aria-hidden="true"></i>
                          </a>
                          <a class="carousel-control-next" data-bs-target="#carouselTestimonials" role="button" data-bs-slide="next">
                                <i class="fas fa-chevron-right fa-2x" aria-hidden="true"></i>
                          </a>
                    </div>
                <?php endif; wp_reset_query(); ?>


                  <?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) : ?>
				<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="btn btn-custom blue"><?php echo esc_html( $link['title'] ); ?></a>
			<?php endif; ?>
        </div>
 </section>