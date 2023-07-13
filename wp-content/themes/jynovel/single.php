<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      
      <?php
      while (have_posts()) {
          the_post();
          
          the_title('<h1 class="post-title text-center">','</h1>');//输出文章标题,并用H1标签包裹

          ?>
          <div class='text-center'>
          <!-- 显示文章作者 -->
          <span class='mx-3'>作者：<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a></span>
          <!-- 显示文章发布时间 -->
          <span class='mx-3'>日期：<?php echo get_the_time('Y-m-d G:i:s'); ?></span>
          <span class='mx-3'>阅读次数：<?php echo get_post_views($post -> ID); ?></span>
          </div>
          <?php
          the_content();//输出文章内容

          
      }
      ?>

      <!-- 分页 -->
      <?php
          wp_link_pages(array(
              'before' => '<div class="fenye">分页阅读： ',
              'after' => '',
              'next_or_number' => 'next',
              'previouspagelink' => '<span class="fenye-link">上一页</span>',
              'nextpagelink' => ""
          ));
          wp_link_pages(array(
              'before' => '',
              'after' => '',
              'next_or_number' => 'number',
              'link_before' => '<span class="fenye-link">',
              'link_after' => '</span>'
          )); 
          wp_link_pages(array(
              'before' => '',
              'after' => '</div>',
              'next_or_number' => 'next',
              'previouspagelink' => '',
              'nextpagelink' => '<span class="fenye-link">下一页</span>',
          ));
      ?>

      <?php
      //文章导航
      the_post_navigation(
        array(
            'prev_text' => '<span class="nav-subtitle">上一篇：</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">下一篇：</span> <span class="nav-title">%title</span>',
            )
      );
      ?>

      <?php 
      //显示文章评论
      comments_template();
      ?>
    </div>
    <div class="col-sm-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php
get_footer();
?>