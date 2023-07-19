<?php get_template_part('template-parts/home/banner') ?>

<div class="box">
  <div class="box_1 box_con">
    <h3>编者推荐</h3>
    <ul class="clear">
      <?php 
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
      ?>
        <li><a href="javascript:;"><img src="https://images.bookuu.com/book/C/01229/97875511000382057419-fm.jpg"></a>
          <p><a href="javascript:;"><?php echo $tag_name ?></a></p>
        </li>
      <?php 
        }
      ?>
    </ul>
  </div>

  <div class="box_2 box_con">
    <h3>最新上架</h3>
    <ul class="clear">
      <?php
      $tags = get_tags();
      foreach ($tags as $tag) {
        $tag_name = $tag->name;
        $tag_url = get_tag_link($tag);
        $post = get_latest_post_by_tag($tag_name);
        $author = get_the_author_meta('display_name', $post->post_author);
        $post_url = get_post_permalink($post);
        $post_title = $post->post_title;
        $post_last_modified_time = $post->post_modified;
        $categories = get_categories_by_tag($tag_name);
        $master_category = $categories[1];
        $sub_category = $categories[0];
        $sub_category_name = $sub_category->name;
        $sub_category_url = get_category_link($sub_category->term_id);
        ?>
        <li><a href="<?php echo $tag_url ?>"><span class="icon_span"></span></a>
          <a href="<?php echo $sub_category_url ?>"><b>[
              <?php echo $sub_category_name ?> ]
            </b></a>
          <a href="<?php echo $tag_url ?>"><strong>
              <?php echo $tag_name ?>
            </strong></a><time>
            <?php echo $post_last_modified_time ?>
          </time>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>

  <div class="box_3 clear">
    <!-- <ul class="author clear">
      <h4>作者</h4>
      <li>
        <a href="http://bb.com"><img src="img/other.jpg">
          <div class="mask"></div>
          <p>路遥</p>
        </a>
      </li>
    </ul> -->
    <!--作者-->
  </div>

</div><!--内容-->

