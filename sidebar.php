<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar') ) : else : ?>
<!--sidebar.php-->
<!--widget start for Right Sidebar-->
	<div id="sidebar">

		<div id="search">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</div>

		<div id="first_container">

			<ul id="first_container_nav">
				<li><a href="#categories" title="Categories">Categories</a></li>
				<li><a href="#tagcoud" title="Tag Cloud" class="selected">Tag Cloud</a></li>
				<li><a href="#archives" title="Archives">Archives</a></li>
			</ul>

			<div id="categories">
				<ul>
					<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
			</div>

			<div id="tagcoud">
				<p><?php wp_tag_cloud(); ?></p>
			</div>
			
			<div id="archives">
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>

		</div>

		<div id="second_container">

			<ul id="second_container_nav">
				<li><a href="#blogroll" title="Blogroll" class="selected">Blogroll</a></li>
				<li><a href="#lifestream" title="Life Stream">Life Stream</a></li>
				<li><a href="#misc_links" title="Misc Info">Misc Info</a></li>
			</ul>
			
			<div id="blogroll">
				<ul>
					<?php wp_list_bookmarks('categorize=0&title_li='); ?>
				</ul>
			</div>

			<div id="lifestream">
				<ul>
					<li>Life-stream item 1</li>
					<li>Life-stream item 2</li>
					<li>Life-stream item 3</li>
					<li>Life-stream item 4</li>
					<li>Life-stream item 5</li>
				</ul>
			</div>

			<div id="misc_links">
				<p>Check out <a href="http://code.google.com/p/whipress/" title="Whitepress official page">Whitepress official page</a> for customization tips, news and updates.</p>
			</div>

		</div>

		<div id="ads_container">

			<h3>Banners and Sponsored links</h3>
			
			<div id="ads">

				<h4>Some banners Ads</h4>
				
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/test_image1.jpg" alt="test_image1" /></a>
				<a href="#" title="Tsevdos.com"><img src="<?php bloginfo('template_directory'); ?>/images/test_image2.jpg" alt="test_image2" /></a>
				
				<h4>Some link lists Ads</h4>
				
				<ul>
				    <li><a href="#" title="Link ad">Link ad</a></li>
				</ul>

			<?php /* If this is the frontpage */ if ( is_home() ) { ?>
				<h4>Meta</h4>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				<!--end of if-->
			<?php } ?>

<!--widget end-->
			</div>
		</div>
	</div>
<?php endif; ?>
<!--sidebar.php end-->