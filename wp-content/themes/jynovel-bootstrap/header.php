<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php wp_head(); ?>
  <title><?php echo bloginfo('name') ?></title>

  <script src="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/js/tabler.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/css/tabler.min.css">

</head>
<body class="antialiased">
  <div class="wrapper">
    <?php get_template_part('template-parts/common/header') ?>