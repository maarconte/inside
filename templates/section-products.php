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
<?php $i = 0 ;?>
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
	<clipPath id="svgImage2" clipPathUnits="objectBoundingBox" transform="scale(0.0021, 0.0021)">
		<path d="M308.13,444.09,81.31,453.43A78.06,78.06,0,0,1,.91,363.68l37-242.94A118.55,118.55,0,0,1,144,20.55L358.23.42C419.87-5.37,470,49.26,459,110.19L415.46,350.63A113.85,113.85,0,0,1,308.13,444.09Z"/>
	</clipPath>
</svg>

			<h4><?php the_sub_field('title'); ?></h4>
			<p><?php the_sub_field('text'); ?></p>

					<?php if ( $video_value  === "true" ) : ?>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" >
							<div class="modal-dialog modal-dialog-centered modal-lg">
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
<?php $i++ ;?>
	<?php endwhile; ?>

<?php endif; ?>

		</div>
	</div>
</section>