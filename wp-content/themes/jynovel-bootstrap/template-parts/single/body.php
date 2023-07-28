<?php
$post = get_queried_object();
$tag = wp_get_post_tags($post->ID)[0];
$categories = wp_get_post_categories($post->ID);
$sub_category_id = $categories[0];
$sub_category = get_term($sub_category_id);
$master_category_id = $sub_category->parent;
$master_category = get_term($master_category_id);
?>
<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          <?php the_title() ?>
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="card card-lg">
      <div class="card-body ">
        <div class="row g-4">
          <div class="col-12 markdown">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <ul class="pagination ">
        <?php 
          // 为什么要重新获取post，因为get_prev_charpter使用wp_query后，post发生了变化
          $post = get_queried_object();
          $prev_post = get_prev_charpter($post);
          $post = get_queried_object();
          $next_post = get_next_charpter($post);
          //$prev_post = get_previous_post(true, "", "post_tag");
          //$next_post = get_next_post(true, "", "post_tag");

          if ($prev_post) {
        ?>
          <li class="page-item page-prev">
            <a class="page-link" href="<?php echo get_post_permalink($prev_post->ID) ?>" tabindex="-1" aria-disabled="true">
              <div class="page-item-subtitle">上一页</div>
              <div class="page-item-title"><?php echo $prev_post->post_title?></div>
            </a>
          </li>
        <?php 
          }

          if ($next_post) {
        ?>
          <li class="page-item page-next">
            <a class="page-link" href="<?php echo get_post_permalink($next_post->ID) ?>">
              <div class="page-item-subtitle">下一页</div>
              <div class="page-item-title"><?php echo $next_post->post_title?></div>
            </a>
          </li>
        <?php
          }
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>