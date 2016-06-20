<div class="portfolio-modal modal fade" id="<?php echo $post->post_name; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2><?php the_title(); ?></h2>
						<hr class="star-primary">
						<img src="<?php the_post_thumbnail_url() ?>" class="img-responsive img-centered" alt="">
						<?php the_content(); ?>

						<?php
						$res = get_post_custom();
						$filteredRes = [];
						foreach($res as $key => $value) {
							if(strpos($key, '_') === 0) {
								continue;
							}
							$filteredRes[$key] = $value;
						}

						?>

						<ul class="list-inline item-details">
							<?php foreach($filteredRes as $k => $v) : ?>
								<li><?=$k?>:
									<strong><?=$v[0]?></strong>
								</li>
							<?php endforeach; ?>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
