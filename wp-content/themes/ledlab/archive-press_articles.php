<?php
/**
 * The template for displaying all single press articles
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ledlab
 */

get_header();
?>

	<div id="primary" class="content-area">
        <h1>Press</h1>
		<main id="press-archive" class="site-main">

        <?php query_posts('posts_per_page=-1&post_type=press_articles'); ?>
                <?php while ( have_posts() ) :
                    the_post();
                    $article_title = get_field('article_title');
                    $article_link = get_field('article_link');
                    $article_image = get_field('article_image');
                ?>
            
                <article class="press-article">
                    <a href="<?php echo $article_link; ?>" target="_blank">
                        <figure class="press-article-image">
                            <?php if($article_image) {
                                echo wp_get_attachment_image($article_image, "medium");
                            } ?>
                        </figure>
                    </a>
                    <h4 class="press-article-link">
                        <a href="<?php echo $article_link; ?>" target="_blank"><?php the_title(); ?></a>
                    </h4>
                
                </article>

                <?php endwhile; ?>
            <?php wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>