<nav class="clear">
	<ul class="nav_1 clear">
		<div class="active"></div>
		<li><a href="<?php echo get_home_url() ?>">首页</a></li>

		<?php 
			$categories = get_categories(array(
				'hide_empty' => 0,
				'parent' => 0
			));
			if ($categories) {
				foreach ($categories as $category) {
					if ($category->name == '未分类') continue;
		?>					
				<!-- <li><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a> -->
				<li><a href="#"><?php echo $category->name ?></a>
		<?php 		
				$sub_categories = get_categories(array(
					'hide_empty' => 0,
					'parent' => $category->term_id
				));

				if ($sub_categories) {
		?>
				<ul class="clear">
		<?php 
					foreach ($sub_categories as $sub_category) {
		?>
						<li><a href="<?php echo get_category_link($sub_category->term_id) ?>"><?php echo $sub_category->name ?></a></li>
		<?php 
					}
		?>
				</ul>
		<?php 
				}
			}
		}
		?>
	</ul>
</nav> <!--导航结束-->