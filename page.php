<?php get_header(); ?>
	<div id="content">
		<div id="posts">
		<!--page.php-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			
			<div id="post-<?php the_ID(); ?>" class="post">
				<h2><a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="post_body">
					<!--post with more link -->
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<!--if you paginate pages-->
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
					<!--end of post and end of loop-->
	  			<?php endwhile; endif; ?>

				</div>

			</div>
		</div>

	</div>

<!--page.php end-->
<!--include sidebar-->
<?php get_sidebar(); ?>
<div id="footer">
<!--include footer-->
<?php get_footer(); ?>