<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>一起读</title>

  <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">
    <header id="masthead" class="site-header">
      <div class="site-branding">
        <?php 
        // 添加站点标题
        if ( is_front_page(  ) && is_home(  )):
          ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
          <?php
        else:
          ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ) ?></a></p>
          <?php
        endif
          ?>
      </div>
    </header>

    <nav class="navbar navbar-expand-md bg-white navbar-dark">
      <!-- Brand -->
      <div class="menu-logo">
        <?php
        if (is_front_page() && is_home()) :
        ?>
            <h1 class="site-title navbar-brand"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php
        else :
        ?>
            <p class="site-title navbar-brand"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
        <?php
        endif;
        ?>
        <!-- </a> -->
      </div>
    
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Navbar links -->
      <?php 
        echo wp_nav_menu( 
          array( 
            'container' => 'div',//容器标签 
            'container_class' => 'collapse navbar-collapse',//ul父节点class值 
            'container_id' => 'collapsibleNavbar',//ul节点id值 
            'theme_location' => 'PrimaryMenu',//导航别名 
            'items_wrap' => '<ul class="navbar-nav">%3$s</ul>', //如何包装列表 
          ) 
        ); 
      ?>

<?php get_search_form(); ?>
    </nav>
  </div>  