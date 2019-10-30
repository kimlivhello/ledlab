<?php
/**
 * The template for displaying lab member single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ledlab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="lab-member-single" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			$person_title = get_field('person_title');
			$person_photo = get_field('person_photo');
			$person_email = get_field('person_email');
			$person_research_interests = get_field('person_research_interests');
		?>

		<article class="single-lab-member">
			<figure class="single-lab-member-photo">
				<?php if($person_photo) {
					echo wp_get_attachment_image($person_photo, "full");
				} ?>
			</figure>
			<div class="single-lab-member-info">
				<h2><?php the_title(); ?></h2>
				<h3><?php echo $person_title; ?></h3>
				<h4><?php echo $person_email; ?></h4>
				<p><?php echo $person_research_interests; ?></p>
			</div>
		</article>

		<?php endwhile; // End of the loop. ?> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
