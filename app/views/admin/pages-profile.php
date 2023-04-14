<div class="main">
	<nav class="navbar navbar-expand navbar-light navbar-bg">
		<a class="sidebar-toggle js-sidebar-toggle">
			<i class="hamburger align-self-center"></i>
		</a>

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav navbar-align">

				<li class="nav-item dropdown">
					<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
						<i class="align-middle" data-feather="settings"></i>
					</a>

					<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						<span class="text-dark">Charles Hall</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#">Log out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<main class="content">
		<div class="container-fluid p-0">

			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"><strong>Profile</strong> Details</h1>
			</div>
			<div class="row">
				<div class="col-md-4 col-xl-3">
					<div class="card mb-3">
						<div class="card-body text-center">
							<!-- <?php foreach ($data['user_admin'] as $row) : ?>
								<h5 class="card-title mb-2"><?= $row['username']; ?></h5>
							<?php endforeach; ?> -->
							<h5 class="card-title mb-2">Mimin</h5>
							<div class="text-muted mb-1"><i class="align-middle" data-feather="mail"></i></div>
							<div class="text-muted mb-1"><i class="align-middle" data-feather="smartphone"></i></div>
						</div>
						<hr class="my-0" />
					</div>
				</div>

				<div class="col-md-8 col-xl-9">
					<div class="card">
						<div class="card-header">

							<h5 class="card-title mb-0">Note</h5>
						</div>
						<div class="card-body h-100">

							<hr />
							<div class="d-grid">
								<a href="#" class="btn btn-primary">Load more</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>