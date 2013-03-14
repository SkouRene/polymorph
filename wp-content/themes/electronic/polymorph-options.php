<?php


	add_action('admin_menu','director_create_menu');
	
	function director_create_menu() {
		add_theme_page('Polymorph Theme Options','Theme options', 'manage_options','polymorph_options', '_create_general_settings_page');
		add_action('admin_init','director_registrer_settings');
		
	}
	function director_registrer_settings() {
		
	}
function _create_general_settings_page( $active_tab = '' ) {
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"></div>
		<h2>Polymorph Theme Options</h2>
		<?php settings_errors();?>
		
		<?php 
			if( isset( $_GET['tab']	) ){
				$active_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'polymorph_general';
			}
		?>
		
		<h2 class="nav-tab-wrapper">
			<a href="?page=polymorph_options&tab=polymorph_general" class="nav-tab <?php echo $active_tab == 'polymorph_general' ? 'nav-tab-active':'';?>">General</a>
			<a href="?page=polymorph_options&tab=polymorph_style" class="nav-tab <?php echo $active_tab == 'polymorph_style' ? 'nav-tab-active':'';?>">Style</a>
			<a href="?page=polymorph_options&tab=polymorph_restrict_widgets" class="nav-tab <?php echo $active_tab == 'polymorph_restrict_widgets' ? 'nav-tab-active':'';?>">Restrict widgets</a>
		</h2>
		
		
		<form method="post" action="options.php">
			<?php 
			if($active_tab == 'polymorph_general'){
				settings_fields('general_settings_section');
				do_settings_sections('polymorph_theme_display_options');
			}elseif ($active_tab == 'polymorph_restrict_widgets'){
				
				
				
				
			}else {
				
			}
			
			
			
			
			submit_button();
			?>
		</form>
	</div>
	<?php
} 

	function polymorph_initialize_options(){
		//if the theme options don't excist, create them.
		if(false == get_option( 'polymorph_theme_display_options' ) ) {
			add_option('polymorph_theme_display_options');	
		}
		
		//register section
		add_settings_section('general_settings_section', 'General options', 'polymorph_general_options_callback', 'polymorph_theme_display_options');
		
		add_settings_field('polymorph_analytics', 'Google analytics tracking code', 'polymorph_build_analytics', 'polymorph_theme_display_options','general_settings_section');
		
		register_setting('general_settings_section', 'polymorph_theme_display_options');
		}
	add_action('admin_init','polymorph_initialize_options');
	
	function polymorph_general_options_callback(){
		
	}
	
	function polymorph_build_analytics(){
		$options = get_option('polymorph_theme_display_options');
		$html = '<input type="text" height="80" value="'.$options['polymorph_analytics'].'" name="polymorph_theme_display_options[polymorph_analytics]" />';
		
		
		echo $html;
	}

?>


