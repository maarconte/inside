
	<div class="section section-newsletter">
		<div class="container">
			<div class="card">
				<?php if ( get_sub_field('title') ) : ?>
					<h3><?php echo get_sub_field('title'); ?></h3>
				<?php endif; ?>
				<?php if ( get_sub_field('text') ) : ?>
					<p><?php echo get_sub_field('text'); ?></p>
				<?php endif; ?>

				<!-- Contact form -->
					<?php $form = get_sub_field('formulaire');?>
					<?php if($form) : ?>
						<?php echo $form; ?>
					<?php endif; ?>
    			<!-- Contact form -->
			</div>
		</div>
	</div>

