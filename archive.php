<?php get_header(); ?>
	<div id="content">

		<div id="posts">
		<!--the loop-->

		<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h1 class="archive">Category : <?php echo single_cat_title(); ?></h1>
		
 	  	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="archive">Archive for <?php the_time('F jS, Y'); ?></h1>
		
	 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="archive">Archive for <?php the_time('F, Y'); ?></h1>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="archive">Archive for <?php the_time('Y'); ?></h1>
		
	  	<?php /* If this is a search */ } elseif (is_search()) { ?>
		<h1 class="archive">Search Results for "<?php the_search_query() ?>"</h1>
		
	  	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="archive">Author Archive</h1>
		
		<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
		<h1 class="archive">Tag Archive for "<?php single_tag_title(); ?>" tag</h1>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="archive">Blog Archives</h1>

               <!--do not delete-->
		<?php } ?>
		
		<!--loop article begin-->
		<?php while (have_posts()) : the_post(); ?>
			<!-- post begin -->
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

	       <!--post end-->
		<?php endwhile; ?>

	<?php else : ?>

		Not Found
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>	

		</div>
	</div>

<!--include sidebar-->
<?php get_sidebar(); ?>
<!--include footer-->
<div id="footer">

		<ul id="more_reading">
			<li><?php next_posts_link('&laquo; Older Entries'); ?>&nbsp;</li>
			<li><a href="#container" title="Top">Top</a></li>
			<li>&nbsp;<?php previous_posts_link('Newer Entries &raquo;');?></li>
		</ul>
	<!--include footer-->
<?php get_footer(); ?>
