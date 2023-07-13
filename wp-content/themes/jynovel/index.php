<?php get_header(); ?>

<main id="primary" class="container site-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <?php
            while (have_posts()) {
              the_post();

              get_template_part( 'template-parts/content' );
            }
            
            the_posts_pagination( array(
                    'mid_size' => 2, //当前页码数的 两边 显示几个页码。
                    'prev_text' =>'上一页', //上一页
                    'next_text' =>'下一页', //下一页
                    ) );
            ?>

            

        </div>

        <div class="col-sm-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
</main>

<?php get_footer(); ?>
