<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<!-- Давай дружити -->
<section class="be_friends indent-top-big indent-bottom-big">
	<div class="container-fluid">
		<div class="row">
			<h2 class="block-title col-12 text-center"><?php echo $args['title'];?></h2>
		</div>
		<div class="row">
			<?php if( $args['image_list'] ):?>
				<?php foreach( $args['image_list'] as $item ):?>
					<div class="content col-lg-3">
						<img
						   class="lazy"
						   data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
						   alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
						>
					</div>
				<?php endforeach;?>
			<?php endif;?>

		</div>
	</div>
</section>
