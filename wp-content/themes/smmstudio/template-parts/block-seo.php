<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<!-- SEO блок -->
<section class="seo-block indent-bottom-big">
	<div class="container-fluid">
		<div class="row">
			<h2 class="block-title col-12 text-center"><?php echo $args['title'];?></h2>
		</div>
		<div class="row">
			<div class="content col-12">
				<?php echo wpautop( $args['text'] );?>
			</div>
		</div>
	</div>
</section>