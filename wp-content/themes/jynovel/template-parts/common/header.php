<header class="clear">
  <img src="<?php echo get_template_directory_uri( ); ?>/img/logo.jpg">
  <div class="logo">
    <h1><?php echo bloginfo('name') ?></h1>
    <div class="clear"></div>
    <p>一起阅读，共同鉴赏</p>
  </div>
  <div class="search left">
    <!-- <form action="" method="get">
      <input type="text" value="" placeholder="请输入书名或作者名称">
      <input type="submit" value="搜索">
    </form> -->
    <?php get_search_form() ?>
    <p class="left">
      <span>热门推荐：</span>
      <?php 
        $tags = get_suggest_books(4);
        foreach ($tags as $tag) {
      ?>
          <a href="<?php echo get_term_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
      <?php
        }
      
      ?>
    </p>
  </div>
  <!-- <div class="reg">
    <div class="delu2 clear">
      <div class="self ease">
        <a href="javascript:;" class="clear">雪剑无影<span class="icon ease"></span></a>
        <div class="clear"></div>
        <ul class="clear">
          <li><a href="self.html">个人中心</a></li>
          <li><a href="javascript:;">我的书架</a></li>
          <li><a href="javascript:;">账号设置</a></li>
          <li><a href="javascript:;">退出登录</a></li>
        </ul>
      </div>
      <span class="split">|</span>
      <a href="javascript:;" title="您有3条未读消息" class="news">消息<b>3</b></a>
    </div>
    <span>|</span>
    <a href="tousu.html">意见反馈</a>
  </div> -->
</header><!--头部结束-->