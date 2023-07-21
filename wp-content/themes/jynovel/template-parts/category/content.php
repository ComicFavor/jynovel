<div class="con left">
   <div class="position">
    <a href="<?php echo get_home_url() ?>">首页</a>
    <?php 
      $current_category = get_queried_object();
      $master_category_id = $current_category->parent;
      $master_category = get_term($master_category_id);
    ?>
     > 
    <a href="#"><?php echo $master_category->name ?></a>
     > 
    <a href="<?php get_term_link($current_category->term_id) ?>" class="acative"><?php echo $current_category->name ?></a></div>
   <ul class="con_list clear">
    <?php 
      $count_of_page = get_page_of_tags_by_category($current_category);

      $url = add_query_arg(array('page' => 1));

      $page = get_query_var('page');

      if(!$page) $page = 1;

      $tags = get_tags_by_category_paging($current_category->name, (int)$page - 1);
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
        <li>上一页</li>
        <li><a href="javascript:;" class="thispage">1</a></li>
        <li><a href="javascript:;">2</a></li>
        <li><a href="javascript:;">3</a></li>
        <li><a href="javascript:;">4</a></li>
        <li><a href="javascript:;">5</a></li>
        <li><a href="javascript:;">下一页</a></li>
       <li><a href="<?php echo add_query_arg(array('page' => $count_of_page));?>">尾页</a></li>
   </ul><!-- 分页 -->
   
 </div><!--右边内容页-->
