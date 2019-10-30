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
		<main id="press-article-single" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();

                $article_title = get_field('article_title');
                $article_link = get_field('article_link');
                $article_image = get_field('article_image');

            ?>
            
            <article class="press-article">
                <figure class="press-article-image">
                    <a href="<?php echo $article_link; ?>" target="_blank">
                        <?php if($article_image) {
                            echo wp_get_attachment_image($article_image, "full");
                        } ?></a>
                </figure>
                
                <h4 class=><a href="<?php echo $article_link; ?>" target="_blank">
                    <?php echo $article_title; ?></a>
                </h4>
            </article>

            <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>