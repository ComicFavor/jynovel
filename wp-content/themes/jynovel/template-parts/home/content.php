<div class="box">
  <div class="box_1 box_con">
    <h3>编者推荐</h3>
    <ul class="clear">
      <?php 
        $books = get_suggest_books(8);
        foreach ($books as $book) {
          $book_name = $book->name;
          $book_url = get_term_link( $book );
      ?>
        <li><a href="<?php echo $book_url?>"><img src="<?php echo get_cover_url($book) ?>"></a>
          <p><a href="<?php echo $book_url?>"><?php echo $book_name ?></a></p>
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
      $books = get_latest_books(20);
      foreach ($books as $book) {
        $book_name = $book->name;
        $book_url = get_term_link($book);
        $post = get_latest_post_by_book($book_name);
        $author = get_the_author_meta('display_name', $post->post_author);
        $post_url = get_post_permalink($post);
        $post_title = $post->post_title;
        $post_last_modified_time = $post->post_modified;
        $category = get_category_by_book($book);
        $master_category = get_parent_category($category);
        ?>
        <li><a href="<?php echo $book_url ?>"><span class="icon_span"></span></a>
          <a href="<?php echo get_category_link($category) ?>"><b>[
              <?php echo $category->name ?> ]
            </b></a>
          <a href="<?php echo $book_url ?>"><strong>
              <?php echo $book_name ?>
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

