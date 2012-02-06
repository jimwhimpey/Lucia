<div class="nav">
	
	<a class="mobile-menu-toggle">Menu</a>
	
	<ul class="primary">
		
		<?php wp_list_pages(array('title_li' => '', 'depth'  => '1', 'exclude' => '306,311')); ?> 
		
		<li class="page_item page-item-34 <?php if ($post->post_type == 'forum' || $post->post_type == 'topic' || $post->ID == 306 || $post->ID == 289) { echo "current_page_item"; } ?>"><a href="<?php bloginfo('url'); ?>/forum/">Forum</a></li>
		
		<?php if(is_user_logged_in()) { ?>
			<li class="page_item page-item-311 <?php if ($post->ID == 311) { echo "current_page_item"; } ?>"><a href="<?php bloginfo('url'); ?>/documents/">Documents</a></li>
		<?php } ?>
		
	</ul>
	
	<?php
			
		// Work out what subnav we want to show
		if ($post->post_parent) {
			// This is a subpage
			if (count($post->ancestors) > 1) {
				// This post is 3 levels deep, so parent/auties/uncles as subpages
				$parent = $post->ancestors[1];
			} else {
				// This post is 2 levels deep, show it's parent's subpages in the nav
				$parent = $post->post_parent;
			}
		} else {
			// If the page is top level, show it's children as usual
			$parent = $post->ID;
		}
				
		if (isset($parent)) {
			$children = wp_list_pages(array('title_li' => '', 'child_of'  => $parent, 'echo'  => '0', 'depth' => '1'));
		}
		
				
		// If there's subnav, show it
		if ($children) { ?>
			<ul class="secondary">
				<?php echo $children; ?>
			</ul>
		<?php } ?>
				
</div>