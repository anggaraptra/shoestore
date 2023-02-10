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
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Edit Shoes Data</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASEURL; ?>/admin/edit" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $data['shoes']['id']; ?>">
                                <input type="hidden" name="old-pict" value="<?= BASEURL; ?>/img-shoes/<?= $data['shoes']['gambar']; ?>">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><label for="shoesName" class="form-label">Shoes Name</label></td>
                                        <td></td>
                                        <td><input value="<?= $data['shoes']['nama_shoes']; ?>" type="text" name="shoesName" id="shoesName" class="form-control" autocomplete="off" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="stock" class="form-label">Stock</label></td>
                                        <td></td>
                                        <td><input value="<?= $data['shoes']['stok']; ?>" type="number" name="stock" id="stock" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="categories" class="form-label">Categories</label></td>
                                        <td></td>
                                        <td><select class="form-select" id="categories" name="categories" required>
                                                <option selected><?= $data['shoes']['kategori']; ?></option>
                                                <option value="Sneakers">Sneakers</option>
                                                <option value="Oxfords">Oxfords</option>
                                                <option value="Loafers">Loafers</option>
                                                <option value="Classic Canvas">Classic Canvas</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label for="price" class="form-label">Price</label></td>
                                        <td></td>
                                        <td><input value="<?= $data['shoes']['harga']; ?>" type="number" name="price" id="price" class="form-control" autocomplete="off" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">Old Pict</label></td>
                                        <td></td>
                                        <td><img src="<?= BASEURL; ?>/img-shoes/<?= $data['shoes']['gambar']; ?>" alt="old" width="500" height="500"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="pict" class="form-label">New Pict</label></td>
                                        <td></td>
                                        <td><input type="file" name="pict" id="pict" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><button type="submit" name="submit-edit" class="btn btn-primary mt-1">Edit</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>