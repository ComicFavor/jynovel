<ul class="list left">
  <?php



    $master_category = get_parent_category_in_category_page();
    $sub_categories = get_categories(array(
      'parent' => $master_category->term_id,
      'hide_empty' => 0
    ));
  ?>

    <p><?php echo @$master_category->name?></p>

    <?php
      if ($sub_categories) {
        foreach ($sub_categories as $sub_category) {
          $class = '';
          if ($current_category->term_id == $sub_category->term_id) {
            $class = 'class="active"';
          }
    ?>
          <li <?php echo $class ?>><a href="<?php echo get_term_link($sub_category->term_id) ?>"><?php echo $sub_category->name ?></a></li>
    <?php
        }
      }
    ?>
 </ul><!--左边列表-->