<?php get_header()?>
<div class="row">
	<div class="eight columns">
		
		
		<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<article class="post featured row" id="post-<?php the_ID(); ?>">
<div class="twelve columns">
	<div class="row">
<div class="title two columns mobile-one">
<h1><i class="foundicon-page"></i></h1>
</div>
<div class="ten columns mobile-three"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

</div>
</div>

<div class="row">
<div class="entry twelve columns">
 
 <?php the_excerpt(); ?>

</div>
</div>
</div>
</article>
<?php endwhile; ?>

<?php else : ?>

	<h1 class="title">Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
	</div>
	<div class="four columns featured-sidebar">
		<?php if ( is_active_sidebar('sidebara') ) : ?>
	
		<?php get_sidebar('sidebara'); ?>
	
	<?php endif ?>
	</div>
</div>
<?php get_footer()?>
