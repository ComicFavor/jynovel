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

  if ($master_category_id)
    $master_category = get_term($master_category_id);
  else
    $master_category = $current_category;

  return $master_category;
}

// 根据分类获取标签
function get_page_of_books_by_category($category_name) {
  $books = get_terms(array(
    'taxonomy' => 'book',
    'meta_query' => array(
      'relation' => 'AND',
      array(
        'key' => 'category',
        'value' => $category_name
      )
    )
  ));

  return floor(count($books) / 10) + 1;
} 

// 根据分类获取标签
function get_books_by_category_paging($category_name, $offset) {
  $books = get_terms(array(
    'taxonomy' => 'book',
    'orderby' => 'name',
    'order' => 'ASC',
    'number' => 10, //每页数量
    'offset' => $offset,
    'meta_query' => array(
      'relation' => 'AND',
      array(
        'key' => 'category',
        'value' => $category_name
      )
    )
  ));

  return $books;
} 

function get_cover_url (WP_Term $book) {
  return get_field('cover_url', 'book_' . $book->term_id);
}

function get_latest_books_in_category (WP_Term $category, int $count) {
  $books = get_terms(array(
    'taxonomy' => 'book',
    'meta_query' => array(
      'relation' => 'AND',
      array(
        'key' => 'category',
        'value' => $category->name
      )
    )
  ));

  $books_id_with_time = array();
  foreach($books as $book) {
    $books_id_with_time[$book->term_id] = get_latest_post_by_book($book->name)->post_modified;
  }

  arsort($books_id_with_time);
  $latest_books_id = array_slice($books_id_with_time, 0, $count, true);
  
  $latest_books = array();
  foreach($latest_books_id as $book_id=>$book_time) {
    $latest_books[] = get_term($book_id);
  }

  return $latest_books;
}

function get_latest_books (int $count) {
  $books = get_terms(array(
    'taxonomy' => 'book'
  ));
  $books_id_with_time = array();
  foreach($books as $book) {
    $books_id_with_time[$book->term_id] = get_latest_post_by_book($book->name)->post_modified;
  }

  arsort($books_id_with_time);
  $latest_books_id = array_slice($books_id_with_time, 0, $count, true);
  
  $latest_books = array();
  foreach($latest_books_id as $book_id=>$book_time) {
    $latest_books[] = get_term($book_id);
  }

  return $latest_books;
}

function get_suggest_books (int $count) {
  $books = get_terms(array(
    'taxonomy' => 'book',
    'orderby' => 'name',
    'order' => 'ASC',
    'number' => $count,
    'meta_query' => array(
      'relation' => 'AND',
      array(
        'key' => 'recommended',
        'value' => true
      )
    )
  ));
  
  return $books;
}

function get_latest_post_by_book ( $book_name ) {
  $args=array(
    'tax_query' => array(
      'taxonomy' => 'book',
      'field' => 'name',
      'terms' => $book_name

    ),
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

function get_author_by_book (WP_Term $book ) {
  return get_field('author', 'book_' . $book->term_id);
}

function get_category_by_book (WP_Term $book ) {
  $category_id = get_field('category', 'book_' . $book->term_id);
  
  return get_term_by('term_id', $category_id, 'category');
}

// 获取父级分类
function get_parent_category(WP_Term $category) {
  return get_term_by('term_id', $category->parent, 'category');
}

// 获取小说章数
function get_book_post_count_by_id( $book_id ) {
  $book = get_term_by( 'id', $book_id, 'book' );
 _make_cat_compat( $book );
  return $book->count;
}

function get_prev_charpter(WP_Post $post) {
  $args=array(
    'tax_query' => array(
      'taxonomy' => 'book',
      'field' => 'name',
      'terms' => $post->tags_input[0]

    ),
    'posts_per_page'=> -1, //所有文章,
    'orderby' => 'ID',
    'order' => 'DESC'
  );

  $is_prev = false;
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) {
      $my_query->the_post();
      $p = get_post();

      if ($is_prev) {
        return $p;
      }

      if ($p->ID == $post->ID) {
        $is_prev = true;
      }
    }
  } 
  wp_reset_query(); 
}

function get_next_charpter(WP_Post $post) {
  $args=array(
    'tax_query' => array(
      'taxonomy' => 'book',
      'field' => 'name',
      'terms' => $post->tags_input[0]

    ),
    'posts_per_page'=> -1, //所有文章,
    'orderby' => 'ID',
    'order' => 'ASC'
  );
  $is_next = false;
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) {
      $my_query->the_post();
      $p = get_post();

      if ($is_next) {
        return $p;
      }

      if ($p->ID == $post->ID) {
        $is_next = true;
      }
    }
  } 
  wp_reset_query(); 
}
?>
