<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php wp_head(); ?>
  <title><?php echo bloginfo('name') ?></title>

  <link  href="<?php echo get_template_directory_uri(); ?>/css/css.css" rel="stylesheet" type="text/css">
  <link  href="<?php echo get_template_directory_uri(); ?>/css/article3.css" rel="stylesheet" type="text/css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/js.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/article3.js"></script>

</head>
<body>
<?php get_template_part('template-parts/common/header') ?>