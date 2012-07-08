<!--footer.php-->
		<ul id="pages">
			<li><a href="<?php echo get_settings('home'); ?>" title="Home" class="selected">Home</a></li>
			<?php wp_list_pages('title_li='); ?>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to the RSS feed">RSS</a></li>
		</ul>
		<ul id="copyright">
			<li>Copyright &copy; <?php the_time('Y'); ?> - <?php bloginfo('name'); ?> - is proudly powered by <a href="http://www.wordpress.org" title="Wordpress">WordPress</a> - Whitepress Theme Designed By <a href="http://www.tsevdos.com/" title="Tsevdos.com">John Tsevdos</a></li>
		</ul>
	</div>
<?php wp_footer(); ?>
</div>
</body>
</html>