<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          首页
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">编辑推荐</h3>
              </div>
              <div class="card-body">
                <div class="row g-3">
                <?php 
                    $books = get_suggest_books(8);
                    foreach ($books as $book) {
                        $book_name = $book->name;
                        $book_url = get_term_link( $book );
                        $author = get_author_by_book($book);
                        $category = get_category_by_book($book);
                ?>
                    <div class="col-6">
                        <div class="row g-3 align-items-center">
                        <a href="<?php echo $book_url?>" class="col-auto">
                            <span class="avatar" style="background-image: url(<?php echo get_cover_url($book); ?>)">
                        </a>
                        <div class="col text-truncate">
                                <a href="<?php echo $book_url ?>" class="text-reset d-block"><?php echo $book_name?></a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                    <a href="<?php echo get_category_link($category) ?>"><b>[<?php echo $category->name ?> ]</b></a> 
                                    <?php echo $author ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">最新入库</h3>
              </div>
              <div class="list-group list-group-flush list-group-hoverable">
              <?php
                $books = get_latest_books(20);
                foreach ($books as $book) {
                    $book_name = $book->name;
                    $book_url = get_term_link($book);
                    $post = get_latest_post_by_book($book_name);
                    $author = get_author_by_book($book);
                    $post_url = get_post_permalink($post);
                    $post_title = $post->post_title;
                    $post_last_modified_time = $post->post_modified;
                    $category = get_category_by_book($book);
                    $master_category = get_parent_category($category);
                ?>
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <!-- <div class="col-auto"><span class="badge bg-red"></span></div> -->
                            <div class="col-auto">
                            <a href="<?php echo $book_url ?>">
                                <span class="avatar" style="background-image: url(<?php echo get_cover_url($book)?>)"></span>
                            </a>
                            </div>
                            <div class="col text-truncate">
                                <a href="<?php echo $book_url ?>" class="text-reset d-block"><?php echo $book_name?></a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                    <a href="<?php echo get_category_link($category) ?>"><b>[<?php echo $category->name ?> ]</b></a> 
                                    <?php echo $author ?> <?php echo $post_last_modified_time ?>
                                </div>
                            </div>
                            <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                </svg>
                            </a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                
                </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">名家</h3>
              </div>
              <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                <div class="list-group-header sticky-top">A</div>
                <div class="list-group-item">
                  <div class="row">
                    <div class="col-auto">
                      <a href="#">
                        <span class="avatar" style="background-image: url(<?php echo get_template_directory_uri(); ?>/static/avatars/023f.jpg)"></span>
                      </a>
                    </div>
                    <div class="col text-truncate">
                      <a href="#" class="text-body d-block">Eva Acres</a>
                      <div class="text-muted text-truncate mt-n1">Change deprecated html tags to text decoration classes
                        (#29604)</div>
                    </div>
                  </div>
                </div>
                <div class="list-group-header sticky-top">B</div>
                <div class="list-group-item">
                  <div class="row">
                    <div class="col-auto">
                      <a href="#">
                        <span class="avatar" style="background-image: url(<?php echo get_template_directory_uri(); ?>/static/avatars/024m.jpg)"></span>
                      </a>
                    </div>
                    <div class="col text-truncate">
                      <a href="#" class="text-body d-block">Cary Baleine</a>
                      <div class="text-muted text-truncate mt-n1">Set vertical-align on .form-check-input (#29521)</div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>