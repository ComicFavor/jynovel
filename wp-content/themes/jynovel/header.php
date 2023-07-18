<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php echo bloginfo( 'name' ) ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ); ?>/style.css">
</head>
<body <?php body_class(); ?> style="zoom: 1">
  <div class="wrap">
    <?php 
      // get_template_part( 'template-parts/common/ads' );
      get_template_part( 'template-parts/common/logo' );
      get_template_part( 'template-parts/common/main-nav' );
    ?>
  </div>  