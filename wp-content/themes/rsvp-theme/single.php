<?php get_header(); ?>
<section id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <div class="post-thumbnail">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            </div>
            <h1><?php the_title(); ?></h1>
            <h4>Posted on <?php the_time('F jS, Y') ?></h4>
            <p><?php the_content(); ?></p>
        </article>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, we couldn’t find the post you are looking for.'); ?></p>
    <?php endif; ?>
    <div class="comments">
        <?php comments_template(); ?>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>