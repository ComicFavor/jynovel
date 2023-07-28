<?php
$book = get_queried_object();
$category = get_category_by_book($book);
?>

<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">

          <?php echo $book->name ?>
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-md-12">
        <div class="row row-cards">
          <div class="col-md-6 col-lg-9">
            <div class="card" style="min-height: 10rem;">
              <div class="row row-0">
                <div class="col-3">
                  <!-- Photo -->
                  <img src="<?php echo get_cover_url($book) ?>" class="w-100 h-100 object-cover card-img-start"
                    alt="<?php echo $book->name ?>">
                </div>
                <div class="col">
                  <div class="card-body">
                    <p class="text-muted">
                      <?php echo $book->description ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="card-title">基础信息</div>
                <div class="mb-2">
                  <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                    <line x1="3" y1="6" x2="3" y2="19"></line>
                    <line x1="12" y1="6" x2="12" y2="19"></line>
                    <line x1="21" y1="6" x2="21" y2="19"></line>
                  </svg>
                  作者: <strong>
                    <?php echo get_author_by_book($book); ?>
                  </strong>
                </div>
                <div class="mb-2">
                  <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                  </svg>
                  分类: <strong><?php echo $category->name?></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-status-top bg-blue"></div>
          <div class="card-header">
            <h3 class="card-title">章节目录<b>(
                <?php echo $book->count ?>)
              </b></h3>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter">
              <tbody>
              <?php 
                $book = get_queried_object();
                $args=array(
                  'tax_query' => array(
                    'relation' => 'AND',
                    array(
                      'taxonomy' => 'book',
                      'field' => 'name',
                      'terms' => $book->name
                    )
                  ),
                  'posts_per_page'=> -1, //所有文章,
                  'orderby' => 'ID',
                  'order' => 'ASC'
                );
                $my_query = new WP_Query($args);
                $index = 0;
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) {
                    $my_query->the_post();
                    $index++;
                    if ($index % 2 == 1) {
                ?>
                    <tr>
                        <td class="w-50">
                          <a href="<?php the_permalink() ?>" class="text-reset"><?php the_title() ?></a>
                        </td>
                <?php
                    }  else {
                ?>
                        <td class="w-50">
                          <a href="<?php the_permalink() ?>" class="text-reset"><?php the_title() ?></a>
                        </td>
                    </tr>
                <?php
                    } 
                ?>

              <?php 
                    
                  }
                } 

                wp_reset_query(); 

                // 如果最后一行只有一个item，最后需要关闭tr节点
                if ($index % 2 == 1) {
              ?>
                  </tr>
              <?php
                } 
              ?>
                
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>