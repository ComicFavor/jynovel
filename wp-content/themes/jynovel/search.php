<?php
get_header();
get_template_part( 'template-parts/common/main-nav' )
?>

<div class="box">
<div class="box_2 box_con">
      <h3>
        <?php
            echo '关于 【 ';
            echo get_search_query();//输出您所搜索的文字
            echo ' 】 的搜索结果';
        ?>
    </h3>
      <ul class="clear">
        <?php
            $args = array(
                'taxonomy'      => array( 'book' ), // taxonomy name
                'orderby'       => 'id', 
                'order'         => 'ASC',
                'hide_empty'    => true,
                'fields'        => 'all',
                'name__like'    => get_search_query()
            ); 
            
            $books = get_terms( $args );
            
            foreach($books as $book) {
                $book_url = get_term_link($book->term_id);
                $category = get_category_by_book($book);
                $post = get_latest_post_by_book($book_name);
                $post_last_modified_time = $post->post_modified;
                
        ?>
                <li>
                    <a href="<?php echo $book_url?>"><span class="icon_span"></span></a>
                    <a href="<?php echo get_category_link($category) ?>"><b>[ <?php echo $category->name ?> ]</b></a>
                    <a href="<?php echo $book_url?>"><strong><?php echo $book->name ?></strong></a><time><?php echo $post_last_modified_time ?></time>
                </li>
        <?php
            }
        ?>
      </ul>
    </div>
</div>

</main>

<?php
get_footer();
?>