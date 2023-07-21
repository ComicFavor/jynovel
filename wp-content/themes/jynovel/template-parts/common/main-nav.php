<nav class="clear">
	<ul class="nav_1 clear">
	<?php 
			$categories = get_categories(array(
				'hide_empty' => 0,
				'parent' => 0,
				'meta_key' => 'display_order',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'
			));

			$current_category = get_queried_object();
			if(is_category() == true)
				$master_category = get_parent_category_in_category_page();
		?>			

		<div class="active"></div>
		<li><a href="<?php echo get_home_url() ?>">首页</a></li>

		<?php 
			if ($categories) {
				foreach ($categories as $category) {
					if ($category->term_id == $master_category->term_id) {
						echo '<script>
							$(function(){
								$("#li_'. $category->term_id .'").click();	
							});
						</script>';
					}
		?>					
				<li id="li_<?php echo $category->term_id ?>"><a href="javascript:;"><?php echo $category->name ?></a>
		<?php 		
				$sub_categories = get_categories(array(
					'hide_empty' => 0,
					'parent' => $category->term_id,
					'meta_key' => 'display_order',
					'orderby' => 'meta_value_num',
					'order' => 'ASC'
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