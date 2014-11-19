<?php get_header(); ?>
<section id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <article class="post">
	    	<div class="post-thumbnail">
	    		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
	    	</div>
	        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
	        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
	        <p><?php the_excerpt(); ?></p>
	        <a class="moretag" href="<?php the_permalink(); ?>"> Read More</a>
	    </article>
	    <?php endwhile; else: ?>
	    <p><?php _e('Sorry, we couldn’t find the post you are looking for.'); ?></p>
    <?php endif; ?>
    <?php page_navigation(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>