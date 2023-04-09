<?php
function soran_theme_files(){
	wp_enqueue_style('soran_theme_main_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','soran_theme_files');