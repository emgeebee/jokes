<?php
	function joke_styles(){
		wp_enqueue_style('joke-style', get_stylesheet_directory_uri() . '/style.css',false,'1.1','all');
	}
	add_action('wp_head','joke_styles');
?>