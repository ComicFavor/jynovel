<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          
          <?php echo get_queried_object()->name?>
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
                <div class="card-body">
                  <ul class="pagination ">
                    <?php 
                      $count_of_page = get_page_of_books_by_category($current_category);

                      $url = add_query_arg(array('page' => 1));
                
                      $page = get_query_var('page');
                
                      if(!$page) $page = 1;
                    ?>  

                    <li class="page-item"><a class="page-link" href="<?php echo add_query_arg(array('page' => 1));?>">首页</a></li>
                  
                    <li class="page-item <?php if ($page == 1) echo "disabled"?>">
                      <a class="page-link" href="<?php echo add_query_arg(array('page' => $page - 1));?>">
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                      </a>
                    </li>

                    <?php 
                      $index = $page;
                      while($index <= $count_of_page && $index < $page + 5) {
                        if ($index == $page) {
                    ?>
                          <li class="page-item active"><a class="page-link" href="#"><?php echo $index?></a></li>
                    <?php
                        } else {
                    ?>
                          <li class="page-item"><a class="page-link" href="<?php echo add_query_arg(array('page' => $index));?>"><?php echo $index?></a></li>
                    <?php 
                        }
                        $index++;
                      }
                    ?>  
                    <li class="page-item <?php if ($count_of_page == $page) echo "disabled"?>">
                      <a class="page-link" href="<?php echo add_query_arg(array('page' => $page + 1));?>">
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="<?php echo add_query_arg(array('page' => $count_of_page));?>">尾页</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>