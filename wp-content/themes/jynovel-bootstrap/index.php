<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <?php wp_head(); ?>
    <title><?php echo bloginfo('name') ?></title>

    <!-- CSS files -->
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/tabler.min.css?1668287865" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/tabler-flags.min.css?1668287865" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/tabler-payments.min.css?1668287865" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/demo.min.css?1668287865" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
  </head>
  <body>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/demo-theme.min.js?1668287865"></script>
    <div class="page">
      <!-- Navbar -->
      <?php get_template_part("template-parts/common/main-nav") ?>
      <div class="page-wrapper">
        <?php get_template_part("template-parts/home/body") ?>  
        <?php get_footer() ?>
      </div>
    </div>
    <!-- Tabler Core -->
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/tabler.min.js?1668287865" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/demo.min.js?1668287865" defer></script>
  </body>
</html>