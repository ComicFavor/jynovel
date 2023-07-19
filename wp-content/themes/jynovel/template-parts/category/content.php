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
      $current_category = get_the_category()[0];
      
      $tags = get_tags_by_category($current_category->term_id);
      foreach($tags as $tag) {
    ?> 
        <li class="ease">
          <a href="<?php echo get_term_link($tag->term_id) ?>"><img src="https://images.bookuu.com/book/C/01229/97875511000382057419-fm.jpg"></a>
          <p class="s_n"><a href="<?php echo get_term_link($tag->term_id) ?>"><?php echo $tag->name ?></a></p>
        </li>
    <?php 
      }
    ?>
   </ul>
   <!--列表内容-->
   
   <ul class="page clear">
        <li>首页</li>
        <li>上一页</li>
        <li><a href="javascript:;" class="thispage">1</a></li>
        <li><a href="javascript:;">2</a></li>
        <li><a href="javascript:;">3</a></li>
        <li><a href="javascript:;">4</a></li>
        <li><a href="javascript:;">5</a></li>
        <li><a href="javascript:;">下一页</a></li>
       <li><a href="javascript:;">尾页</a></li>
       <li class="tz"><select>
       <option value="1">1</option>
       <option value="1">1</option>
       <option value="1">1</option>
       </select><a href="javascript:;">跳转</a>
       </li>
       <li>共 1/3 页</li>
   </ul><!--分页-->
   
 </div><!--右边内容页-->
