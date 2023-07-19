<div class="list">
  <div class="pos">
     当前位置：<a href="javascript:;">首页</a>
      > 
      <?php 
        $tag = get_queried_object();
        $categories = get_categories_by_tag($tag->name);
      ?>
      <a href="<?php echo get_term_link($categories[1]->term_id) ?>"><?php echo $categories[1]->name ?></a>
       > 
      <a href="<?php echo get_term_link($categories[0]->term_id) ?>"><?php echo $categories[0]->name ?></a>
      > 
      <?php echo $tag->name ?>
  </div>
  <h3>文化苦旅</h3>

 <ul class="tab clear">
     <li class="active"><a href="#">简介</a></li>
     <li><a href="#">章节目录<b>(20)</b></a></li>
 </ul>
  <div class="tab_1">
    <div class="info clear">
     <img src="https://images.bookuu.com/book/C/01229/97875511000382057419-fm.jpg" class="left" style="margin-right:20px;width:150px;"> 
      <p class="left" style="width:580px; overflow:hidden;"><?php echo $tag->description ?></p>
     </div>
     <div class="fx clear">
         <div class="bdsharebuttonbox right"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
             <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
         </script>
         <p class="dsf">
         <b> 分享到:</b>
         </p>
     </div>
     <ul class="clear info_1">
     <p>基本信息</p>
     <li><span>作 &nbsp; &nbsp; &nbsp; 者：</span>余秋雨</li>
     <li><span>出 &nbsp;版 &nbsp;社：</span>长江文艺出版社</li>
     <li><span>版 &nbsp;权 &nbsp;方：</span>北京时代华语图书股份有限公司</li>
     <li><span>出版时间：</span>2014-04-01</li>
     <li><span>分 &nbsp; &nbsp; &nbsp; 类：</span>文学艺术 散文随笔</li>
     <li><span>评 &nbsp; &nbsp; &nbsp; 价：</span>956人评论 <samp>|</samp> 138888人在读</li>
     </ul>
  </div><!--简介介绍-->
  
  <div class="tab_1">
     <div class="tit">章节目录<b>(20)</b></div>
     <div class="info_1">
         <ul class="clear">
          <?php 
            $args=array(
              'tag' => $tag->name,
              'orderby' => 'name',
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
          ?>


         </ul>
     </div>
     <div  id="up" class="clear"><a href="javascript:;"><samp>查看全部</samp><span class="icon ease"></span></a></div>
  </div><!--章节目录-->
  
</div><!--左边结束-->