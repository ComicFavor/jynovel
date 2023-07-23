<div class="con left">
   <div class="position">
    <a href="<?php echo get_home_url() ?>" class="acative">首页</a>
    <?php 
      $current_category = get_queried_object();
    ?>
     > 
    <?php echo $current_category->name ?></div>
   <ul class="con_list clear">
    <?php 
      $count_of_page = get_page_of_books_by_category($current_category);

      $url = add_query_arg(array('page' => 1));

      $page = get_query_var('page');

      if(!$page) $page = 1;

      $tags = get_books_by_category_paging($current_category->name, (int)$page - 1);
      if($tags) {
        foreach($tags as $tag) {
    ?> 
        <li class="ease">
          <a href="<?php echo get_term_link($tag->term_id) ?>"><img src="<?php echo get_cover_url($tag) ?>"></a>
          <p class="s_n"><a href="<?php echo get_term_link($tag->term_id) ?>"><?php echo $tag->name ?></a></p>
        </li>
    <?php 
        }
      }
    ?>
   </ul>
   <!--列表内容-->
   
   <ul class="page clear">
        <li><a href="<?php echo add_query_arg(array('page' => 1));?>">首页</a></li>
        <?php 
          if ($page > 1) {
        ?>
          <li><a href="<?php echo add_query_arg(array('page' => $page - 1));?>">上一页</a></li>
        <?php 
          }
        ?>

        <?php 
          $index = $page;
          while($index <= $count_of_page && $index < $page + 5) {
            if ($index == $page) {
        ?>
              <li><a href="javascript:;" class="thispage"><?php echo $index?></a></li>
        <?php
            } else {
        ?>
              <li><a href="<?php echo add_query_arg(array('page' => $index));?>"><?php echo $index?></a></li>
        <?php 
            }
            $index++;
          }
        ?>  
        <?php 
          if ($count_of_page != $page) {
        ?>
          <li><a href="<?php echo add_query_arg(array('page' => $page + 1));?>">下一页</a></li>
        <?php 
          }
        ?>
       <li><a href="<?php echo add_query_arg(array('page' => $count_of_page));?>">尾页</a></li>
   </ul><!-- 分页 -->
   
 </div><!--右边内容页-->
