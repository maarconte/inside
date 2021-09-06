<section class="section section-list">
	<div class="container">
		<h2 class="section-title"><?php the_sub_field( 'title' ); ?>
		</h2>
	<div class="row">
		<?php if ( have_rows( 'item' ) ) : ?>
			<?php while ( have_rows( 'item' ) ) : the_row(); ?>
			<div class="col-sm-4">
				<?php $icon = get_sub_field( 'icon' ); ?>
				<?php if ( $icon ) : ?>
					<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
				<?php endif; ?>
			<h3 class="section-list_title"><?php the_sub_field( 'title' ); ?></h3>
			<p><?php the_sub_field( 'text' ); ?></p>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
	</div>
</section>