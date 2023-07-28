<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">

          <?php echo get_queried_object()->name ?>
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
          <div class="col-12">
            <div class="space-y">
              <?php
              $current_category = get_queried_object();
              $count_of_page = get_page_of_books_by_category($current_category);

              $url = add_query_arg(array('page' => 1));

              $page = get_query_var('page');

              if (!$page)
                $page = 1;

              $books = get_books_by_category_paging($current_category->term_id, (int) $page - 1);

              if ($books) {
                foreach ($books as $book) {
                  $book_name = $book->name;
                  $book_url = get_term_link($book);
                  $author = get_author_by_book($book);
                  $category = get_category_by_book($book);
                  ?>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(<?php echo get_cover_url($book); ?>)">
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="<?php echo $book_url ?>"><?php echo $book_name ?></a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                  </svg>
                                  <?php echo $author ?>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">神话</a>
                                <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">志怪</a>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
              ?>
            </div>
          </div>
          <!-- 分页控件 -->
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <ul class="pagination ">
                  <?php
                  $count_of_page = get_page_of_books_by_category($current_category);

                  $url = add_query_arg(array('page' => 1));

                  $page = get_query_var('page');

                  if (!$page)
                    $page = 1;
                  ?>

                  <li class="page-item"><a class="page-link"
                      href="<?php echo add_query_arg(array('page' => 1)); ?>">首页</a></li>

                  <li class="page-item <?php if ($page == 1)
                    echo "disabled" ?>">
                    <a class="page-link" href="<?php echo add_query_arg(array('page' => $page - 1)); ?>">
                      <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                      </svg>
                    </a>
                  </li>

                  <?php
                  $index = $page;
                  while ($index <= $count_of_page && $index < $page + 5) {
                    if ($index == $page) {
                      ?>
                      <li class="page-item active"><a class="page-link" href="#">
                          <?php echo $index ?>
                        </a></li>
                      <?php
                    } else {
                      ?>
                      <li class="page-item"><a class="page-link"
                          href="<?php echo add_query_arg(array('page' => $index)); ?>"><?php echo $index ?></a></li>
                      <?php
                    }
                    $index++;
                  }
                  ?>
                  <li class="page-item <?php if ($count_of_page == $page)
                    echo "disabled" ?>">
                    <a class="page-link" href="<?php echo add_query_arg(array('page' => $page + 1)); ?>">
                      <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                      </svg>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link"
                      href="<?php echo add_query_arg(array('page' => $count_of_page)); ?>">尾页</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>