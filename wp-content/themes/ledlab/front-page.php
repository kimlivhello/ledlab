<?php

/* Template Name: FrontPage */ 
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ledlab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="font-page" class="site-main">

			<div class="home-page-title">
				<?php the_title() ?>
			</div>

			<div class="home-page-image">
				<?php while ( have_posts() ) : the_post();
						$home_page_image = get_field('home_page_image');
							if($home_page_image) {
								echo wp_get_attachment_image($home_page_image, "full");
							}
					endwhile; 
				?>
			</div>

			<div class="home-page-text">
				<?php while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
