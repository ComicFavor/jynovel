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
            $all_tag_name = array();
            while (have_posts()) {
                the_post();
                $post = get_post();
                $tag_name = $post->tags_input[0];
                if (in_array($tag_name, $all_tag_name) == false) {
                    $all_tag_name[] = $tag_name;
                }
            }

            foreach($all_tag_name as $tag_name) {
                $tag = get_term_by('name', $tag_name, 'post_tag');
                $tag_url = get_term_link($tag->term_id);
                $category = get_category_by_tag($tag);
                $post = get_latest_post_by_tag($tag_name);
                $post_last_modified_time = $post->post_modified;
                
        ?>
                <li>
                    <a href="<?php echo $tag_url?>"><span class="icon_span"></span></a>
                    <a href="<?php echo get_category_link($category) ?>"><b>[ <?php echo $category->name ?> ]</b></a>
                    <a href="<?php echo $tag_url?>"><strong><?php echo $tag->name ?></strong></a><time><?php echo $post_last_modified_time ?></time>
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