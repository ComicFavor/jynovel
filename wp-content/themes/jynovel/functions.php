<?php

//注册导航栏菜单
register_nav_menus(array(
    'PrimaryMenu'=>'导航',//左边是别名,右边是后台菜单界面显示的名字
    'friendlinks'=>'友情链接',
    'footer_nav'=>'页脚导航'));
add_theme_support('nav_menus'); 

// 给菜单栏的li标签添加class
function addli_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'PrimaryMenu') { //这里的 PrimaryMenu 是填写菜单别名
     $classes[] = 'nav-item'; //这里的 nav-item 是要添加的class类
  }
  return $classes;
 }
add_filter('nav_menu_css_class','addli_menu_classes',1,3);

// 给菜单栏的a标签添加class
function adda_menu_link_atts( $atts, $item, $args ) {
$atts['class'] = 'nav-link';
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'adda_menu_link_atts', 10, 3 );

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
?>
