<?php
	function joke_styles(){
		wp_enqueue_style('joke-style', get_bloginfo('template_url') . '/style.css',false,'1.1','all');
	}
	add_action('wp_head','joke_styles');
?>