<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<!-- Питання/відповіді -->
<section class="our-faq indent-top-big">
	<div class="container-fluid">
		<div class="row">
			<h2 class="block-title col-12 text-center"><?php echo $args['title'];?></h2>
		</div>
		<div class="row">
			<?php if( $args['question_list'] ):?>
				<div class="accordion col-12" id="accordion-faq">
					<?php foreach( $args['question_list'] as $index => $item ):?>
						<div class="card">
							<div class="card-header">
								<a class="card-link collapsed" data-toggle="collapse" href="#collapseFaq<?php echo $index;?>">
                  <span class="question"><?php echo $item['question'];?></span>
									<span class="indicator">
										<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
										  <path d="M57 25.5L36 46.5L15 25.5" stroke="#181818" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>
								</a>
							</div>
							<div id="collapseFaq<?php echo $index;?>" class="collapse" data-parent="#accordion-faq">
								<div class="card-body">
									<?php echo wpautop( $item['answer'] ) ;?>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			<?php endif;?>
		</div>
	</div>
</section>
