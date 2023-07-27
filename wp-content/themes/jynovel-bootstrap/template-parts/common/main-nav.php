<!-- Navbar -->
<header class="navbar navbar-expand-md navbar-light d-print-none">
	<div class="container-xl">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
			aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
			<a href=".">
				<img src="<?php echo get_template_directory_uri(); ?>/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
			</a>
		</h1>
		<div class="navbar-nav flex-row order-md-last">
			<div class="nav-item d-none d-md-flex me-3">
				<div class="btn-list">
					<a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
						<!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path
								d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
						</svg>
						Source code
					</a>
					<a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
						<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
						</svg>
						Sponsor
					</a>
				</div>
			</div>
			<div class="d-none d-md-flex">
				<a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
					data-bs-placement="bottom">
					<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
						stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
					</svg>
				</a>
				<a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
					data-bs-placement="bottom">
					<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
						stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<circle cx="12" cy="12" r="4" />
						<path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
					</svg>
				</a>
				<div class="nav-item dropdown d-none d-md-flex me-3">
					<a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
						<!-- Download SVG icon from http://tabler-icons.io/i/bell -->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
							<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
						</svg>
						<span class="badge bg-red"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Last updates</h3>
							</div>
							<div class="list-group list-group-flush list-group-hoverable">
								<div class="list-group-item">
									<div class="row align-items-center">
										<div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
										<div class="col text-truncate">
											<a href="#" class="text-body d-block">Example 1</a>
											<div class="d-block text-muted text-truncate mt-n1">
												Change deprecated html tags to text decoration classes (#29604)
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
								<div class="list-group-item">
									<div class="row align-items-center">
										<div class="col-auto"><span class="status-dot d-block"></span></div>
										<div class="col text-truncate">
											<a href="#" class="text-body d-block">Example 2</a>
											<div class="d-block text-muted text-truncate mt-n1">
												justify-content:between ⇒ justify-content:space-between (#29734)
											</div>
										</div>
										<div class="col-auto">
											<a href="#" class="list-group-item-actions show">
												<!-- Download SVG icon from http://tabler-icons.io/i/star -->
												<svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24"
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
								<div class="list-group-item">
									<div class="row align-items-center">
										<div class="col-auto"><span class="status-dot d-block"></span></div>
										<div class="col text-truncate">
											<a href="#" class="text-body d-block">Example 3</a>
											<div class="d-block text-muted text-truncate mt-n1">
												Update change-version.js (#29736)
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
								<div class="list-group-item">
									<div class="row align-items-center">
										<div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
										<div class="col text-truncate">
											<a href="#" class="text-body d-block">Example 4</a>
											<div class="d-block text-muted text-truncate mt-n1">
												Regenerate package-lock.json (#29730)
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
					<span class="avatar avatar-sm" style="background-image: url(<?php echo get_template_directory_uri(); ?>/static/avatars/000m.jpg)"></span>
					<div class="d-none d-xl-block ps-2">
						<div>Paweł Kuna</div>
						<div class="mt-1 small text-muted">UI Designer</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
					<a href="#" class="dropdown-item">Status</a>
					<a href="#" class="dropdown-item">Profile</a>
					<a href="#" class="dropdown-item">Feedback</a>
					<div class="dropdown-divider"></div>
					<a href="./settings.html" class="dropdown-item">Settings</a>
					<a href="./sign-in.html" class="dropdown-item">Logout</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="navbar-expand-md">
	<div class="collapse navbar-collapse" id="navbar-menu">
		<div class="navbar navbar-light">
			<div class="container-xl">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo get_site_url();?>">
							<span
								class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
									stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<polyline points="5 12 3 12 12 3 21 12 19 12" />
									<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
									<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
								</svg>
							</span>
							<span class="nav-link-title">
								主页
							</span>
						</a>
					</li>
					<?php 
						$categories = get_categories(array(
							'hide_empty' => 0,
							'parent' => 0,
							'meta_key' => 'display_order',
							'orderby' => 'meta_value_num',
							'order' => 'ASC'
						));

						$current_category = get_queried_object();
						if(is_category() == true)
							$master_category = get_parent_category_in_category_page();
					?>	
					<?php 
						if ($categories) {
							foreach ($categories as $category) {
					?>					
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
								data-bs-auto-close="outside" role="button" aria-expanded="false">
									<span
										class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-storybook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path d="M5 4l.5 16.5l13.5 .5v-18z"></path>
											<path d="M9 15c.6 1.5 1.639 2 3.283 2h-.283c1.8 0 3 -.974 3 -2.435c0 -1.194 -.831 -1.799 -2.147 -2.333l-1.975 -.802c-1.15 -.467 -1.878 -1.422 -1.878 -2.467c0 -.97 .899 -1.786 2.087 -1.893l.613 -.055c1.528 -.138 3 .762 3.3 1.985"></path>
											<path d="M16 3.5v1"></path>
										</svg>
									</span>
									<span class="nav-link-title">
										<?php echo $category->name ?>
									</span>
								</a>
								<div class="dropdown-menu">
									<div class="dropdown-menu-columns">
										<div class="dropdown-menu-column">
					<?php 		
							$sub_categories = get_sub_categories($category);

							if ($sub_categories) {
								foreach ($sub_categories as $sub_category) {
					?>
									<a class="dropdown-item" href="<?php echo get_category_link($sub_category->term_id) ?>">
										<?php echo $sub_category->name ?>
									</a>
					<?php 
								}
					?>
										</div>
									</div>
								</div>
							</li>
					<?php 
							}
						}
					}
					?>
				</ul>
				<div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
					<form action="./" method="get" autocomplete="off" novalidate>
						<div class="input-icon">
							<span class="input-icon-addon">
								<!-- Download SVG icon from http://tabler-icons.io/i/search -->
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
									stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<circle cx="10" cy="10" r="7" />
									<line x1="21" y1="21" x2="15" y2="15" />
								</svg>
							</span>
							<input type="text" value="" class="form-control" placeholder="书籍/作者" aria-label="在网站中搜索">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>