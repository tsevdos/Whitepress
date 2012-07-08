<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
  <div id="content">
    <div id="archives">
      <h1>Archives by Month:</h1>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>

      <h1>Archives by Subject:</h1>
      <ul>
        <?php wp_list_cats(); ?>
      </ul>
    </div>
  </div>
<!--include sidebar-->
<?php get_sidebar(); ?>
<!--include footer-->
<div id="footer">
<!--include footer-->
<?php get_footer(); ?>