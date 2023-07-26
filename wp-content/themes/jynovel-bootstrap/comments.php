<h3>共有 <?php echo get_comments_number();?> 条评论</h3>

<ol>
<?php wp_list_comments(); ?>
</ol>

<?php the_comments_navigation();?>

<?php comment_form(); ?>