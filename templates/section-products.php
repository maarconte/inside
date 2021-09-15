<section class="section section-products">
	<div class="container">
		<?php if ( get_sub_field('title') ) : ?>
			<h3 class="section-title text-center"><?php echo get_sub_field('title'); ?></h3>
		<?php endif; ?>
		<?php if ( get_sub_field('text') ) : ?>
			<div class="section-text text-center mb-5"><?php echo get_sub_field('text'); ?></div>
		<?php endif; ?>

		<div class="row">
<?php if ( have_rows('product_list') ) : ?>

	<?php while( have_rows('product_list') ) : the_row(); ?>
		<?php $video_checked_values = get_sub_field( 'video' ); ?>
		<?php $video_value = $video_checked_values[0]; ?>
		<div class="col-sm-4">
			<?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>

			<div class="img-wrapper mb-4 <?php echo $video_value  === "true" ? "video" : ""; ?>" <?php echo $video_value === "true" ? 'data-bs-toggle="modal" data-bs-target="#exampleModal"' : null ?>>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
			</div>
			<?php endif; ?>
			    <svg width="0" height="0">
	<clipPath id="svgImage" clipPathUnits="objectBoundingBox" transform="scale(0.0015, 0.0012)">
		<path d="M517.16,731.1l-414.68,62A89.29,89.29,0,0,1,0,704.75V89.29A89.28,89.28,0,0,1,97.51.39l443.7,41a89.28,89.28,0,0,1,80.92,93.95l-29,512.46A89.29,89.29,0,0,1,517.16,731.1Z"></path>
	</clipPath>
</svg>

			<h4><?php the_sub_field('title'); ?></h4>
			<p><?php the_sub_field('text'); ?></p>

					<?php if ( $video_value  === "true" ) : ?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Launch demo modal
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><?php the_sub_field('title'); ?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<?php the_sub_field( 'embed' ); ?>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
		</div>

	<?php endwhile; ?>

<?php endif; ?>

		</div>
	</div>
</section>