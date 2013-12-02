<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >
	<link rel="icon" href="backup_files/pics/favicon.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
?></title>	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<?php
  add_filter('body_class','browser_body_class');
  function browser_body_class($classes) {
  	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
  
  	if($is_lynx) $classes[] = 'lynx';
  	elseif($is_gecko) $classes[] = 'gecko';
  	elseif($is_opera) $classes[] = 'opera';
  	elseif($is_NS4) $classes[] = 'ns4';
  	elseif($is_safari) $classes[] = 'safari';
  	elseif($is_chrome) $classes[] = 'chrome';
  	elseif($is_IE) $classes[] = 'ie';
  	else $classes[] = 'unknown';
  
  	if($is_iphone) $classes[] = 'iphone';
  	return $classes;
  }
  ?>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/commons.js" charset="utf-8"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bottom.js" charset="utf-8"></script>
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js"></script>
  <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.1.1.js"></script>
	
</head>
<body <?php body_class(); ?>>
  <div id="back"><img src="<?php bloginfo('template_directory'); ?>/images/sommertupp3.png" /></div>
  <div id="all">
    <div id="bg"></div>
    <div id="container">
  	 <div id="flash">
  	   <?php echo getPageContent(8); ?>
     </div>
     <button class="slide_nav" id="pauseButton">Pause</button><button class="slide_nav" id="resumeButton">Fortsett</button>
      <div id="holder">
        <div id="logo" class="floater"></div>

