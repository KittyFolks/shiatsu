<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

 if(!function_exists('getPageContent'))
	{
		function getPageContent($pageId)
		{
			if(!is_numeric($pageId))
			{
				return;
			}
			global $wpdb;
			$sql_query = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
			' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
			$posts = $wpdb->get_results($sql_query);
			if(!empty($posts))
			{
				foreach($posts as $post)
				{
					return nl2br($post->post_content);
				}
			}
		}
	}
	
	if(!function_exists('getPageTitle'))
	{
		function getPageTitle($pageId)
		{
			if(!is_numeric($pageId))
			{
				return;
			}
			global $wpdb;
			$sql_query = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
			' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
			$posts = $wpdb->get_results($sql_query);
			if(!empty($posts))
			{
				foreach($posts as $post)
				{
					return nl2br($post->post_title);
				}
			}
		}
	}

if(!function_exists('getPageMeta'))
	{
		function getPageMeta($pageId)
		{
			if(!is_numeric($pageId))
			{
				return;
			}
			global $wpdb;
			$sql_query = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
			' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
			$posts = $wpdb->get_results($sql_query);
			if(!empty($posts))
			{
				foreach($posts as $post)
				{
					return nl2br($post->post_meta);
				}
			}
		}
	}


if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'over_menu' => 'First Menu',
  		  'bottom_menu' => 'Second Menu',
  		  'lb_menu' => 'Third Menu'
  		)
  	);
}

?>