
<?php get_header(); ?>
<div class="row">
<div class="eight columns ">
<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article class="post" id="post-<?php the_ID(); ?>">

<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<!--<div class="postmeta">
		<span class="author">Skrevet af <?php the_author(); ?> </span>
		<span class="clock"> Udgivet <?php the_time('M - j - Y'); ?></span>
</div>-->


<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>

<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>Sider: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>


<!--<div class="singleinfo">
<span class="categori">Kategorier: <?php the_category(', '); ?> </span>
</div>-->


</article>

<?php comments_template(); ?>
<?php endwhile; else: ?>

		<h1 class="title">Ikke fundet</h1>
		<p>Undskyld, er du på udkig efter noget, der ikke er her. Prøv en anden søgning.</p>

<?php endif; ?>

</div>
</div>
<div class="four columns featured-sidebar">
		<?php if ( is_active_sidebar('sidebara') ) : ?>
	
		<?php get_sidebar('sidebara'); ?>
	
	<?php endif ?>
	</div>
</div>
<? get_footer();?>