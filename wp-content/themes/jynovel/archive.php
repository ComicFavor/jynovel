<?php
get_header();
?>
<main class="col-sm-9">
<header class="page-header">
    <?php
    the_archive_title( '<h1 class="page-title">', '</h1>' );
    ?>
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