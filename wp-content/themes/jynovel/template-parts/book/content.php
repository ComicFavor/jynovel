<div class="list">
  <div class="pos">
     当前位置：<a href="<?php echo get_home_url()?>">首页</a>
      > 
      <?php 
        $book = get_queried_object();
        $category = get_category_by_book($book);
      ?>
      <a href="<?php echo get_term_link($category->term_id) ?>"><?php echo $category->name ?></a>
      > 
      <?php echo $book->name ?>
  </div>
  <h3><?php echo $book->name?></h3>

 <ul class="tab clear">
     <li class="active"><a href="#">简介</a></li>
     <li><a href="#">章节目录<b>(<?php echo $book->count?>)</b></a></li>
 </ul>
  <div class="tab_1">
    <div class="info clear">
     <img src="<?php echo get_cover_url($book) ?>" class="left" style="margin-right:20px;width:150px;"> 
      <p class="left" style="width:580px; overflow:hidden;"><?php echo $book->description ?></p>
     </div>
     <div class="fx clear">
        <div class="bdsharebuttonbox right">
          <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
          <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
          <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
          <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
          <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
          <a href="#" class="bds_more" data-cmd="more"></a>
        </div>
        <script>
          window._bd_share_config = {
            "common": {
              "bdSnsKey": {},
              "bdText": "",
              "bdMini": "2",
              "bdPic": "",
              "bdStyle": "0",
              "bdSize": "16"
            },
            "share": {}
          };
          with(document) 0[(getElementsByTagName('head')[0] || body)
            .appendChild(createElement('script'))
            .src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        </script>
        <p class="dsf">
          <b> 分享到:</b>
        </p>
     </div>
     <ul class="clear info_1">
     <p>基本信息</p>
     <li><span>作 &nbsp; &nbsp; &nbsp; 者：</span><?php echo get_author_by_book($book)?></li>
     <li><span>分 &nbsp; &nbsp; &nbsp; 类：</span><?php echo $category->name ?></li>
     </ul>
  </div><!--简介介绍-->
  
  <div class="tab_1">
     <div class="tit">章节目录<b>(<?php echo $book->count?>)</b></div>
     <div class="info_1">
         <ul class="clear">
          <?php 
            $book = get_queried_object();
            $args=array(
              'tax_query' => array(
                'relation' => 'AND',
                array(
                  'taxonomy' => 'book',
                  'field' => 'name',
                  'terms' => $book->name
                )
              ),
              'posts_per_page'=> -1, //所有文章,
              'orderby' => 'ID',
              'order' => 'ASC'
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) {
                
                $my_query->the_post();
                
          ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
          <?php 
              }
            } 

            wp_reset_query(); 
          ?>


         </ul>
     </div>
     <!-- <div  id="up" class="clear"><a href="javascript:;"><samp>查看全部</samp><span class="icon ease"></span></a></div> -->
  </div><!--章节目录-->
  
</div><!--左边结束-->