<?php get_header(); ?>
	<div id="content">

		<div id="error_page">
			<h2>404 ERROR - Page not found!</h2>
			<p>
				The page you are looking for cannot be found! Go <a href="<?php echo get_settings('home'); ?>" title="Home">home</a> and try something else...
			</p>
			<?php if(function_exists('aa_google_404'))aa_google_404();?>
		</div>
	</div>

<!--include sidebar-->
<?php get_sidebar(); ?>
<div id="footer">
<!--include footer-->
<?php get_footer(); ?>