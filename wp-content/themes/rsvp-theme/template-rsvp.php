<?php  
/*
Template Name: RSVP 
*/
?>
<?php get_header(); ?>
<section id="content">



<div class="header">
	
</div>

<div class="video">
<!-- 	<iframe width="420" height="315" src="//www.youtube.com/embed/Ke4sqDd128I?rel=0" frameborder="0" allowfullscreen wmode="Opaque"></iframe> -->

	<span class="yes-mobile"><p><!-- <span>Yes,</span><br/>I&nbsp;will<br/>attend! -->.</p></span>
	<span class="no-mobile"><p><!-- <span>No,</span><br/>I&nbsp;can't<br/>attend. --></p></span>

<!-- <h2>December 5th, 8PM - Bar Italia</h2> -->
	<h3>Please RSVP by December 2nd, So we can plan to entertain you!</h3>
	<p>Need directions? <a href="https://www.google.ca/maps/dir//Neck+of+the+Woods,+College+St,+Toronto,+ON+M6G+1A6/@43.6553881,-79.4123086,18z/data=!4m13!1m4!3m3!1s0x882b34ee417f9da9:0x7dea6f3c6aa42191!2sNeck+of+the+Woods!3b1!4m7!1m0!1m5!1m1!1s0x882b34ee417f9da9:0x7dea6f3c6aa42191!2m2!1d-79.412373!2d43.655392" target="_blank" title="directions">click here</a></p>
</div>

<div class="left">
<span class="close">X</span>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post">
	        <p><?php the_content(); ?></p>
	    </article>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, we couldn’t find the post you are looking for.'); ?></p>
    <?php endif; ?>

</div>

<div class="right">
<span class="close">X</span>
<div class="inner">
<p>For real?!<br/><br/>Fine but you're missing out!</p>
</div>
</div>

</section>
<?php get_footer(); ?>