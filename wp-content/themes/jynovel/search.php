<?php
get_header();
?>
<main class="col-sm-9">
<header class="page-header">
    <h1 class="page-title">
    <?php
    echo '关于 【 ';
    echo get_search_query();//输出您所搜索的文字
    echo ' 】 的搜索结果';
    ?>
    </h1>
</header>

<?php
while (have_posts()) {
    the_post();
    get_template_part('template-parts/content');
}

?>
</main>

<?php
get_sidebar();
get_footer();
?>