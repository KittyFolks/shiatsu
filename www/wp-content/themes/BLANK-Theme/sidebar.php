<?php 
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	$anc = get_post_ancestors( $post->ID );
	foreach($anc as $ancestor) {
		if(is_page() && $ancestor == $pid) {
			return true;
		}
	}
	if(is_page()&&(is_page($pid))) {
    
    }
  
  };
?>
<div id="menu">
<?php
wp_nav_menu(array('menu' => 'First Menu', 'menu_class' => 'shiatsu' ));
wp_nav_menu(array('menu' => 'Second Menu', 'menu_class' => 'menu_sec' ));
wp_nav_menu(array('menu' => 'Third Menu', 'menu_class' => 'shiatsu_' ));
?>
</div>