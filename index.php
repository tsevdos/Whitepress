<?php get_header(); ?>
	<div id="content">
		<div id="posts">
		<!--index.php-->
		<?php if (have_posts()) : ?>
		<!--the loop-->
			<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="post">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="date_author_comments">
					<span class="date"><?php the_time('F jS, Y') ?></span>
					<span class="author">by <?php the_author() ?> | </span>
					<span class="comments"><?php comments_popup_link('0', '1 comment', '% comments'); ?></span>
					<?php edit_post_link('Edit', ' | <span class="edit">', '</span>'); ?>
				</div>
				<div class="post_body">
					 <?php the_excerpt(); ?>
				</div>
			</div>
			
			<?php endwhile; ?>
		
		<?php else : ?>
		Not Found
		Sorry, but you are looking for something that isn't here.
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		
		<?php endif; ?>
		</div>
	</div>

	<!--index.php end-->
	<!--include sidebar-->
	<?php get_sidebar(); ?>
	
	<div id="footer">

		<ul id="more_reading">
			<li><?php next_posts_link('&laquo; Older Entries'); ?>&nbsp;</li>
			<li><a href="#container" title="Top">Top</a></li>
			<li>&nbsp;<?php previous_posts_link('Newer Entries &raquo;');?></li>
		</ul>
	<!--include footer-->
	<?php get_footer(); ?>