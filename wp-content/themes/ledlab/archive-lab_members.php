<?php
/**
 * The template for displaying all single lab members
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ledlab
 */

get_header();
?>

	<div id="lab-members-primary" class="content-area">
        <h1>Lab Members</h1>
		<main id="lab-members-archive" class="site-main">
            <?php query_posts('posts_per_page=-1&post_type=lab_members&order=ASC'); ?>
                    <?php while ( have_posts() ) :
                        the_post();
                        $person_title = get_field('person_title');
                        $person_photo = get_field('person_photo');
                        $person_research_interests = get_field('person_research_interests');
                    ?>
                
                    <article class="lab-member">
                        <a href="<?php the_permalink(); ?>" target="_blank" ?>
                            <figure class="lab-member-image">
                                <?php if($person_photo) {
                                    echo wp_get_attachment_image($person_photo, "full");
                                } ?>
                            </figure>
                        </a>
                        <div class="lab-member-info">
                            <h2 class="lab-member-name"><?php the_title(); ?></h2>
                            <h4 class="lab-member-title"><?php echo $person_title; ?></h4>
                        </div>    
                        
                    </article>

                    <?php endwhile; ?>
                <?php wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>    
<?php get_footer(); ?>