<div class="box">
  <div class="pos">
    当前位置：<a href="<?php echo get_home_url() ?>">首页</a>
    <?php 
      $post = get_queried_object();
      $tag = wp_get_post_tags($post->ID)[0];
      $categories = wp_get_post_categories($post->ID);
      $sub_category_id = $categories[0];
      $sub_category = get_term($sub_category_id);
      $master_category_id = $sub_category->parent;
      $master_category = get_term($master_category_id);
    ?>
     > 
    <a href="<?php echo get_term_link($master_category->term_id) ?>"><?php echo $master_category->name ?></a>
     > 
    <a href="<?php echo get_term_link($sub_category->term_id) ?>" class="acative"><?php echo $sub_category->name ?></a>
     > 
    <a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
     > 正文
    <a href="<?php echo get_tag_link($tag->term_id) ?>" class="right">回到目录>></a>
  </div>
  <div class="con">
    <div class="tit"><?php the_title() ?></div><!--章节名称-->
    <div class="arcticle">
      <?php echo the_content() ?>
    </div> <!--正文-->
  </div>
  <div class="prenext">
    <?php 
      // $prev_post = get_prev_charpter($post);
      // $next_post = get_next_charpter($post);
      $prev_post = get_previous_post(true, "", "post_tag");
      $next_post = get_next_post(true, "", "post_tag");

      if ($prev_post) {
    ?>
      <p class="left"><span class="icon"></span><a href="<?php echo get_post_permalink($prev_post->ID) ?>" class="ease"><?php echo $prev_post->post_title?></a></p>
    <?php 
      }

      if ($next_post) {
    ?>
      <p class="right"><span class="icon"></span><a href="<?php echo get_post_permalink($next_post->ID) ?>" class="ease"><?php echo $next_post->post_title?></a></p>
    <?php
      }
    ?>
  </div><!--上下章-->
</div><!--内容区结束-->