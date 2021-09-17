<?php $image = get_sub_field( 'image' ); ?>
<div class="container">
	<section class="section section-bandeau w-100"
	<?php if ( $image ) : ?> style="background-image:url(<?php echo esc_url( $image['url'] ); ?>)" <?php endif;?>
	>
		<div class="section-bandeau__content">
			<div class="postion-relative">
				<h3> <?php echo get_sub_field('title') ?></h3>
				<p> <?php echo get_sub_field('text') ?></p>
					<a href="<?php echo get_option('inside_calendly','#') ?>" class="btn btn-custom blue" target="_blank">Je souhaite m'inscrire</a>
			</div>
		</div>
	</section>
</div>