<?php get_header(); ?>

	<div class="main">

		<div class="page post col-a content">

				<div>
				
					<h2>Page Not Found</h3>

					<div class="entry-content">
							
							<p>We can't find what you're looking for. There's a good chance you've gotten 
							here via a bookmark which has now broken since we've launced the new site. Find 
							the page you were looking for below and update your bookmark.</p>
							
							<ul>
								<?php wp_list_pages(array('title_li' => '', 'exclude' => '311,306')); ?>
								<li><a href="<?php bloginfo('url') ?>/forum">Forum</a></li>
							</ul>
							
					</div>
				
				</div>
		
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>		

<?php get_footer(); ?>
