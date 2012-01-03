<?php
/**
 * @package Lucia
 */
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php get_template_part('utility-title'); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/spin.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/date.format.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/uqcc.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		<h1 class="header">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<div class="nav">
			<ul class="primary">
				<?php wp_list_pages(array('title_li' => '', 'depth'  => '1')); ?> 
				<li class="page_item page-item-34 <?php if ($post->post_type == 'forum' || $post->post_type == 'topic') { echo "current_page_item"; } ?>"><a href="<?php bloginfo('url'); ?>/forum/">Forum</a></li>
			</ul>
			<?php
			
				// Work out what subnav we want to show
  			if ($post->post_parent) {
					// This is a subpage
					if (count($post->ancestors) > 1) {
						// This post is 3 levels deep, so show it's grandparent's children as subpages
						$parent = $post->ancestors[1];
					} else {
						// This post is 2 levels deep, show it's parent's subpages in the nav
						$parent = $post->post_parent;
					}
  			} else {
					// If the page is top level, show it's children as usual
					$parent = $post->ID;
				}
				
				$children = wp_list_pages(array('title_li' => '', 'child_of'  => $parent, 'echo'  => '0', 'depth' => '1'));
				
				// If there's subnav, show it
  			if ($children) { ?>
  				<ul class="secondary">
  					<?php echo $children; ?>
  				</ul>
  			<?php } ?>
				
		</div>
