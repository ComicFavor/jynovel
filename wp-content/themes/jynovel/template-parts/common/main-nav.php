<div class="main-nav-wrap" data-l1="3">
	<?php 
		if (function_exists('wp_nav_menu')) {
			wp_nav_menu( array(
				'theme_location' => 'top_nav', 
				'container_id' => 'top-nav',
				'container_class' => 'main-nav box-center cf',
				'menu_class' => 'nav-li'
			) );
		}

	?>


	<!-- <div class="main-nav box-center cf" id="type-hover">
		<ul>
			<li class="nav-li">
				<a href="//www.qidian.com/all/" data-eid="qd_A15" class="act">小说</a>
			</li>
			<li class="nav-li">
				<a href="//www.qidian.com/rank/" data-eid="qd_A16">诗歌</a>
			</li>
			<li class="nav-li">
				<a href="//www.qidian.com/finish/" data-eid="qd_A17">书城</a>
			</li>
			<li class="nav-li">
				<a href="//www.qidian.com/free/" data-eid="qd_A18">新闻</a>
			</li>
			<li class="nav-li">
				<a href="//www.qidian.com/soushu/" target="_blank" data-eid="qd_A13">搜索</a>
			</li>
		</ul>
	</div> -->
</div>