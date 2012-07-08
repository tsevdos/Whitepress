<?php get_header(); ?>
	<div id="content">
		<div id="posts">
		<!--single.php-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="post">
				<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="date_author_comments">
					<span class="date"><?php the_time('F jS, Y') ?></span>
					<span class="author">by <?php the_author() ?> | </span>
					<span class="category">Filed under <?php the_category(', ') ?></span>
					<?php edit_post_link('Edit', ' | <span class="edit">', '</span>'); ?>
				</div>
				<div class="post_body">
					<!--post with more link -->
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<!--if you paginate pages-->
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
					<!--end of post and end of loop-->
					<span class="tags"><img src="<?php bloginfo('template_directory'); ?>/images/tag_icon.gif" alt="tag_icon" /><?php the_tags('<strong>Tags:</strong> ', ' | ', ''); ?></span>

					<!--all options if pingbacks on or not, if comments are open or not and so on-->
					<p id="post_meta">You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.			

						<?php } ?>

				<?php comments_template(); ?>
				<!--all options over and out-->
				
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; else: ?>
	<!--do not delete-->

	Sorry, no posts matched your criteria.

<?php endif; ?>
<!--single.php end-->
<?php get_sidebar(); ?>

	<div id="footer">

		<ul id="more_reading">
			<li><?php previous_post_link('%link', 'Previous Post'); ?>&nbsp;</li>
			<li><a href="#container" title="Top">Top</a></li>
			<li>&nbsp;<?php next_post_link('%link', 'Next Post'); ?></li>
		</ul>
<!--include footer-->
<?php get_footer(); ?>