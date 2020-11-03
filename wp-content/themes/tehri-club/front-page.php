<?php

/**
 * File functions.php for theme tehri-club
 *
 * @package tehri-club
 */

get_header();
?>

<div class="w-100p px-6 mx-auto justify-content-center" id="blogs-listing">
	<div class="row">
		<div class="col-xs-12">
			<div class="masonary">
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
				?>
						<div class="item w-100p p-0">
							<div class="blog-entry rounded-6 w-100p p-3 m-0">
								<img class="w-100p rounded-6" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" />
							</div>
						</div>
				<?php 	}
				}
				?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
