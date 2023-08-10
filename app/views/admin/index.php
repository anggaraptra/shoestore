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
						<a class="dropdown-item" href="<?= BASEURL ?>/admin/profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Log out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<main class="content">
		<div class="container-fluid p-0">

			<div class="flash-data" data-flashdata="<?= Flasher::flash(); ?>"></div>

			<h1 class="h3 mb-3"><strong>Order List</strong> Dashboard</h1>

			<div class="row">
				<div class="col-12">
					<div class="card flex-fill w-100">
						<div class="card-header">
							<h5 class="card-title mb-0">Latest Order</h5>
						</div>
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Date</th>
										<th>Customer Name</th>
										<th>Shoes Name</th>
										<th>Quantity</th>
										<th>Phone Num</th>
										<th>Total</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data['pesanan'] as $psn) : ?>
										<tr>
											<td><?= $psn['date']; ?></td>
											<td><?= $psn['nama_pemesan']; ?></td>
											<td><?= $psn['nama_shoes']; ?></td>
											<td><?= $psn['jumlah_pesanan']; ?></td>
											<td><?= $psn['no_hp']; ?></td>
											<td><?= rp($psn['total_pesanan']); ?></td>
											<td><span class="badge bg-success"><?= $psn['status']; ?></span></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>