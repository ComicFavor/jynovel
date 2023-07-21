<div class="list2">
  <div class="one">
      <p>新书上架</p>
      <div class="notice">
          <ul>
            <?php
              $tag = get_queried_object();
              $category = get_category_by_tag($tag);
              $tags = get_latest_tags_in_category($category, 10);
              foreach($tags as $tag) {
            ?>    
                <li><a href="<?php echo get_term_link($tag->term_id)?>"><?php echo $tag->name?></a></li>
            <?php
              }
            ?>
          </ul>
      </div>
  </div><!--新书上架结束-->
        
  <!-- <div class="two">
    <p><a href="javascript:;" class="active">本周最热排行</a><a href="javascript:;">本月最热排行</a></p>
            <ul class="active">
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">谢谢你曾来过我的世界</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            </ul>
            <ul>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">谢谢你曾来过我的世界</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">文化苦旅</a></li>
            <li><a href="javascrip:;">谢谢你曾来过我的世界</a></li>
            </ul>
  </div> -->
  <!--tab切换-->

</div><!--左边结束-->