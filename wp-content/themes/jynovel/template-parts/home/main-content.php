<div class="main-content-wrap fl" data-l1="5">
		<div class="tool-bar cf">
			<div class="view-mode" id="view-mode">
				<a id="img-text" class="iconfont act" href="javascript:;" data-eid="qd_B54"></a>
				<em>|</em>
				<a id="only-text" class="iconfont " href="javascript:;" data-eid="qd_B55"></a>
			</div>
			<div class="select-wrap">
				<a data-id="" class="act" href="//www.qidian.com/all/" data-eid="qd_B62">人气排序<cite class="iconfont"></cite>
				</a>
				<a data-id="11" href="//www.qidian.com/all/orderId11/" data-eid="qd_B80">总收藏</a>
				<a data-id="3" href="//www.qidian.com/all/orderId3/" data-eid="qd_B52">总字数</a>
				<div id="#recomm" class="lbf-combobox recomm">
					<a href="javascript:;" class="lbf-button lbf-combobox-label " data-value="0" hidefocus="true">
						<span class="lbf-combobox-caption">推荐票</span>
						<span class="lbf-icon lbf-icon-down lbf-combobox-icon"></span>
					</a>
				</div>
				<div class="sort-count count-info" id="sort-count">
					<div class="count-text">共<span>1097614</span>本相关作品</div>
					<div class="yiwen" id="yiwen">
						<div class="iconfont"></div>
					</div>
					<i>|</i>
				</div>
			</div>
		</div>
		<div class="all-book-list">
			<div class="book-img-text" id="book-img-text">
				<ul class="all-img-list cf">
                    <?php 
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        $categoryName = $category->name
                    ?>
					<li data-rid="1">
						<div class="book-img-box">
							<a href="//www.qidian.com/book/1031940621/" data-bid="1031940621" data-eid="qd_B57" target="_blank">
								<img src="https://images.bookuu.com/book/C/01229/97875511000382057419-fm.jpg" alt="<?php echo $categoryName ?>在线阅读">
							</a>
						</div>
						<div class="book-mid-info">
							<h2>
								<a href="//www.qidian.com/book/1031940621/" target="_blank" data-eid="qd_B58" data-bid="1031940621" title="<?php echo $categoryName ?>最新章节在线阅读">
                                    <?php echo $categoryName ?>
                                </a>
							</h2>
							<p class="author">
								<img src="//qdfepccdn.qidian.com/www.qidian.com/images/user.bcb60..png">
								<a class="name" href="//my.qidian.com/author/9639927/" data-eid="qd_B59" target="_blank">吴承恩</a>
								<em>|</em>
								<a href="//www.qidian.com/kehuan/" target="_blank" data-eid="qd_B60">仙侠</a>
								<i>·</i>
								<a class="go-sub-type" data-typeid="9" data-subtypeid="252" href="//www.qidian.com/all/chanId9-subCateId252/" data-eid="qd_B61">封神</a>
								<em>|</em>
								<span>完结</span>
							</p>
							<p class="intro"> <?php echo $category->description ?> </p>
							<p class="update">
								<span>
									<style>@font-face { font-family: ajGsoRMb; src: url('https://qidian.gtimg.com/qd_anti_spider/ajGsoRMb.eot?') format('eot'); src: url('https://qidian.gtimg.com/qd_anti_spider/ajGsoRMb.woff') format('woff'), url('https://qidian.gtimg.com/qd_anti_spider/ajGsoRMb.ttf') format('truetype'); } .ajGsoRMb { font-family: 'ajGsoRMb' !important;     display: initial !important; color: inherit !important; vertical-align: initial !important; }</style>
									<span class="ajGsoRMb">𘜋𘜆𘜌𘜑𘜍𘜌</span>万字 <em>|</em>
									<a href="//www.qidian.com/chapter/1031940621/759853797/" title="第一百章问话">第一百章问话</a>
								</span>
							</p>
						</div>
					</li>
                    <?php                                            
                    }
                    ?>
				</ul>
			</div>
		</div>
		<div class="page-box cf">
			<div class="pagination fr" data-eid="qd_C44" id="page-container" data-pagemax="5" data-page="1">



				<div class="lbf-pagination">
					<ul class="lbf-pagination-item-list">

						<li class="lbf-pagination-item">
							<a href="javascript:;" class="lbf-pagination-prev lbf-pagination-disabled">&lt;</a>
						</li>

						<li class="lbf-pagination-item">
							<a data-page="1" href="//www.qidian.com/all/" class="lbf-pagination-page  lbf-pagination-current">1</a>
						</li>



						<li class="lbf-pagination-item">
							<a data-page="2" href="//www.qidian.com/all/page2/" class="lbf-pagination-page  ">2</a>
						</li>

						<li class="lbf-pagination-item">
							<a data-page="3" href="//www.qidian.com/all/page3/" class="lbf-pagination-page  ">3</a>
						</li>

						<li class="lbf-pagination-item">
							<a data-page="4" href="//www.qidian.com/all/page4/" class="lbf-pagination-page  ">4</a>
						</li>

						<li class="lbf-pagination-item">
							<a data-page="5" href="//www.qidian.com/all/page5/" class="lbf-pagination-page  ">5</a>
						</li>



						<li class="lbf-pagination-item">
							<a href="//www.qidian.com/all/page2/" class="lbf-pagination-next ">&gt;</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>