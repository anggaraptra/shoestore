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

			<div class="flash-data" data-flashdata="<?= Flash_message::flash(); ?>"></div>

			<h1 class="h3 mb-3"><strong>Order List</strong> Dashboard</h1>

			<div class="row">
				<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
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

			<h1 class="h3 mb-3"><strong>Input Shoes Data</strong> Dashboard</h1>

			<div class="row">
				<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
					<div class="card flex-fill w-100 p-3">
						<form action="<?= BASEURL; ?>/admin/tambah" method="post" enctype="multipart/form-data">
							<table class="table table-borderless">
								<tr>
									<td><label for="shoesName" class="form-label">Shoes Name</label></td>
									<td></td>
									<td><input type="text" name="shoesName" id="shoesName" class="form-control" autocomplete="off" required></td>
								</tr>
								<tr>
									<td><label for="stock" class="form-label">Stock</label></td>
									<td></td>
									<td><input type="number" name="stock" id="stock" class="form-control" required></td>
								</tr>
								<tr>
									<td><label for="categories" class="form-label">Categories</label></td>
									<td></td>
									<td><select class="form-select" id="categories" name="categories" required>
											<option selected></option>
											<option value="Sneakers">Sneakers</option>
											<option value="Oxfords">Oxfords</option>
											<option value="Loafers">Loafers</option>
											<option value="Classic Canvas">Classic Canvas</option>
										</select></td>
								</tr>
								<tr>
									<td><label for="price" class="form-label">Price</label></td>
									<td></td>
									<td><input type="number" name="price" id="price" class="form-control" autocomplete="off" placeholder="Rp. " required></td>
								</tr>
								<tr>
									<td><label for="pict" class="form-label">Shoes Pict</label></td>
									<td></td>
									<td><input type="file" name="pict" id="pict" class="form-control"></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><button type="submit" name="submit-add" class="btn btn-primary mt-1">Add</button></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>

			<h1 class="h3 mb-3"><strong>Date</strong> Dashboard</h1>

			<div class="row">
				<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1 mx-auto">
					<div class="card flex-fill w-100">
						<div class="card-header">

							<h5 class="card-title mb-0">Calendar</h5>
						</div>
						<div class="card-body d-flex">
							<div class="align-self-center w-100">
								<div class="chart">
									<div id="datetimepicker-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 0 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>