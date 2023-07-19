<?php

//注册导航栏菜单
register_nav_menus(array(
    'top_nav'=>'顶部导航',//左边是别名,右边是后台菜单界面显示的名字
    'friendlinks'=>'友情链接',
    'footer_nav'=>'页脚导航'));
add_theme_support('nav_menus'); 

// 给菜单栏的li标签添加class
// function addli_menu_classes($classes, $item, $args) {
//   if($args->theme_location == 'PrimaryMenu') { //这里的 PrimaryMenu 是填写菜单别名
//      $classes[] = 'nav-item'; //这里的 nav-item 是要添加的class类
//   }
//   return $classes;
//  }
// add_filter('nav_menu_css_class','addli_menu_classes',1,3);

// 给菜单栏的a标签添加class
// function adda_menu_link_atts( $atts, $item, $args ) {
// $atts['class'] = 'nav-link';
// return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'adda_menu_link_atts', 10, 3 );

// 自定义侧边栏
function my_custom_sidebar() {
  register_sidebar(
      array (
          'name' => '瑾瑜主题的侧边栏',//侧边栏名称
          'id' => 'custom-side-bar',//侧边栏ID
          'description' => '这里是侧边栏的描述',//侧边栏描述
          'before_widget' => '<div class="widget-content">',//侧边栏前面的代码
          'after_widget' => "</div>",//侧边栏后面的代码
          'before_title' => '<h3 class="widget-title">',//侧边栏标题的前面的代码
          'after_title' => '</h3>',//侧边栏标题的后面的代码
      )
  );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

// 获取文章的阅读次数
function get_post_views ($post_id) {  
   
  $count_key = 'views';  
  $count = get_post_meta($post_id, $count_key, true);  
 
  if ($count == '') {  
      delete_post_meta($post_id, $count_key);  
      add_post_meta($post_id, $count_key, '0');  
      $count = '0';  
  }  
 
  echo number_format_i18n($count);  
 
}  

// 设置更新文章的阅读次数
function set_post_views () {  

  global $post;  
 
  $post_id = $post -> ID;  
  $count_key = 'views';  
  $count = get_post_meta($post_id, $count_key, true);  
 
  if (is_single() || is_page()) {  
 
      if ($count == '') {  
          delete_post_meta($post_id, $count_key);  
          add_post_meta($post_id, $count_key, '0');  
      } else {  
          update_post_meta($post_id, $count_key, $count + 1);  
      }  
 
  }  
 
}  
add_action('get_header', 'set_post_views');


// 通用方法
function print_log ($log) {
  var_dump($log);
}

// 在分类页面获取父级分类
function get_parent_category_in_category_page() : WP_Term {
  $current_category = get_queried_object();
  $master_category_id = $current_category->parent;
  $master_category = get_term($master_category_id);

  return $master_category;
}

// 根据分类获取标签
function get_tags_by_category($category_id) {
  $custom_query = new WP_Query( array(
    'posts_per_page' => -1,
    'cate' => $category_id
  ));

  $all_tag_ids = array();

  if ( $custom_query->have_posts() ) :
    while ( $custom_query->have_posts() ) : $custom_query->the_post();
      $posttags = get_the_tags();
      if ( $posttags ) {
        foreach( $posttags as $tag ) {
          if (in_array($tag->term_id, $all_tag_ids)) continue;
          $all_tag_ids[] = $tag->term_id;
        }
      }
    endwhile;
  endif;

  foreach($all_tag_ids as $tag_id) {
    $all_tags[] = get_tag($tag_id);
  }

  return $all_tags;
} 

function get_suggest_posts () {
  $args = array(
    'showposts'=>1, //文章数量
    'caller_get_posts'=>1
  );

  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) {
      $my_query->the_post();
      return get_post();
    }
  } 
  
  wp_reset_query();
}

function get_latest_post_by_tag ( $tag ) {
  $args=array(
    'tag' => $tag,
    'showposts'=>1, //文章数量
    'caller_get_posts'=>1
  );
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) {
      $my_query->the_post();
      return get_post();
    }
  } 
  wp_reset_query(); 
}

function get_categories_by_tag ( $tag ) {
  $args=array(
    'tag' => $tag,
    'showposts'=>1, //文章数量
    'caller_get_posts'=>1
  );
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) {
      $my_query->the_post();
      return get_the_category();
    }
  } 
  wp_reset_query(); 
}
?>
