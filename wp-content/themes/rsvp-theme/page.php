<?php get_header(); ?>
<section id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post">
	        <h1><?php the_title(); ?></h1>
	        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
	        <p><?php the_content(); ?></p>
	    </article>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, we couldn’t find the post you are looking for.'); ?></p>
    <?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>