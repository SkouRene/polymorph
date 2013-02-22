<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/app.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/general_enclosed_foundicons.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">

  <script src="<?php echo get_template_directory_uri()?>/javascripts/modernizr.foundation.js"></script>
</head>
<body>
	<div id="poly-header">
	<?php if ( is_active_sidebar('header') ) : ?>
	<div class="row">
		<?php get_sidebar('header'); ?>
	</div>
	<?php endif ?>
	<div class="row">
		<div class="twelve columns">
			<div>
				<?php 
                    wp_nav_menu( 
                        array( 'theme_location' => 'main',
                        'container' => 'nav',
                        'container_class' => 'mainmenu',
                    	'menu_class'=> 'nav-bar',
					 	'echo' => true,
						 'before' => '',
						 'after' => '',
						 'link_before' => '',
						 'link_after' => '',
						 'depth' => 0,
						 'walker' => new Walker_Nav_Bar()
                            )
                      );
              	?>
			</div>
		</div>
	</div>

</div>