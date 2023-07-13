<article class='bg-white row mt-2 p-3'>
    <div class='mb-2'>
        <a href="<?php echo get_permalink(); ?>">
        <?php the_title("<h2 class='text-dark'>","</h2>"); ?>
        </a>
    </div>
<?php the_excerpt(); ?>
</article>