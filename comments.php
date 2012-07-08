<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- Comments section starts. -->

<div id="comments">
<?php if ($comments) : ?>
		<h3><?php comments_number('No Responses', '1 Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;.</h3>		
			<ol id="commentslist">

			<?php foreach ($comments as $comment) : ?>
			
			<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
				<div class="author_meta">
				
<?php
	if (function_exists('get_avatar')) {
		echo get_avatar( $comment->comment_author_email, $size = '48', $comment->comment_author_link);
   }
?>

				<?php comment_author_link() ?> :</div>
				<div class="comment_body"><?php if ($comment->comment_approved == '0') : ?>
				<em>Your comment is awaiting moderation.</em>
				<?php endif; ?>
				<?php comment_text() ?>
				</div>
				<div class="comment_meta"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('edit','',''); ?></div>
			</li>
			
			<?php /* Changes every other comment to a different class */	
			if ('alt' == $oddcomment) $oddcomment = '';
				else $oddcomment = 'alt';
			?>

			<?php endforeach; /* end for each comment */ ?>
			</ol>

			<?php else : // this is displayed if there are no comments so far ?>
			
				<?php if ('open' == $post->comment_status) : ?>
				<!-- If comments are open, but there are no comments. -->
				<?php else : // comments are closed ?>
				<!-- If comments are closed. -->
				<h3>Comments are closed.</h3>
				<?php endif; ?>

			<?php endif; ?>
			
			<?php if ('open' == $post->comment_status) : ?>
			<h3>Leave a comment.</h3>
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>
			<fieldset>
				<legend>
					
					Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
					
					<a href="<?php echo get_settings('siteurl') .
'/wp-login.php?action=logout&amp;redirect_to=' .
 $_SERVER['REQUEST_URI']; ?>"><?php _e('Logout'); ?></a>
					
				</legend>
				<ol>
			<?php else : ?>
			<fieldset>
				<legend>To leave a comment, please fill in the fields below.</legend>
				<ol>
				<li><label for="author">Name <?php if ($req) echo "<span class=\"required\">(required)</span>"; ?></label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></li>
				<li><label for="email">Mail <?php if ($req) echo "<span class=\"required\">(required - will not be published)</span>"; ?></label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></li>
				<li><label for="url">Website</label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></li>
			<?php endif; ?>
				<li><label>Comment :</label><textarea name="comment" id="comment" cols="50" rows="12" tabindex="4"></textarea></li>
				<li>
					<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				</li>
				</ol>
			</fieldset>
		</form>
	</div>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>