<?php get_header(); ?>
<div class="row">
<div class="eight columns ">
<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<article class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>



<div class="entry">
<?php the_excerpt(); ?>
<div class="clear"></div>
</div>




</article>
<?php endwhile; ?>



<?php else : ?>

	<h1 class="title">Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>
</div>
<div class="four columns featured-sidebar">
			<?php if ( is_active_sidebar('sidebara') ) : ?>

	

		<?php get_sidebar('sidebara'); ?>

	

	<?php endif ?>
</div>
</div>
<?php get_footer(); ?>