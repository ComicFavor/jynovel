<?php get_header(); ?>

<?php 
  the_category();

  $tags = get_tags();
  foreach ($tags as $tag) {
      $tag_name = $tag->name;
      $tag_url = get_tag_link( $tag );
      $post=get_latest_post_by_tag($tag_name);
      $author = get_the_author_meta('display_name', $post->post_author);
      $post_url = get_post_permalink($post);
      $post_title = $post->post_title;
      $categories=get_categories_by_tag($tag_name);
      $master_category = $categories[1];
      $sub_category = $categories[0];
  }
?>

<?php get_footer(); ?>
