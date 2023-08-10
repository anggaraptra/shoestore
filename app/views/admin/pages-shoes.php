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

			<h1 class="h3 mb-3"><strong>All Shoes</strong> Data</h1>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0"></h5>
						</div>
						<div class="card-body">
							<div class="row container-fluid mx-auto">
								<?php foreach ($data['shoes'] as $shs) : ?>
									<div class="container-fluid card mb-4" style="width: 14rem;">
										<img src="<?= BASEURL; ?>/img-shoes/<?= $shs['gambar'] ?>" class="card-img-top img-fluid" alt="...">
										<div class="card-body">
											<p class="card-title fw-bold"><?= $shs['nama_shoes']; ?></p>
											<ul class="list-unstyled">
												<li>Stock : <?= $shs['stok']; ?></li>
												<li>Categories : <?= $shs['kategori']; ?></li>
												<li>Price : <?= rp($shs['harga']); ?></li>
											</ul>
											<a href="<?= BASEURL; ?>/admin/getEdit/<?= $shs['id']; ?>" class="btn btn-secondary">Edit</a>
											<a href="<?= BASEURL; ?>/admin/delete/<?= $shs['id']; ?>" class="btn btn-danger buttonDelete">Delete</a>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<h1 class="h3 mb-3"><strong>Input Shoes</strong> Data</h1>

			<div class="row">
				<div class="col-12">
					<div class="card flex-fill w-100 p-3">
						<form action="<?= BASEURL; ?>/admin/add" method="post" enctype="multipart/form-data">
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

		</div>
	</main>