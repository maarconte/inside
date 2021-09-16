<?php $image = get_sub_field( 'image' ); ?>
<div class="container">
	<section class="section section-bandeau"
	<?php if ( $image ) : ?> style="background-image:url(<?php echo esc_url( $image['url'] ); ?>)" <?php endif;?>
	>
		<div class="section-bandeau__content">
			<div class="postion-relative">
				<h3> <?php echo get_sub_field('title') ?></h3>
				<p> <?php echo get_sub_field('text') ?></p>
				<?php $link = get_sub_field( 'link' ); ?>
					  <?php if ( $link ) : ?>
						  <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="btn btn-custom blue"><?php echo esc_html( $link['title'] ); ?></a>
					  <?php endif; ?>
			</div>
		</div>
	</section>
</div>