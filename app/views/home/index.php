<!-- carousel home -->
<div id="carouselSlide" class="carousel slide container-fluid" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img src="<?= BASEURL ?>/img/sneakers.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL ?>/img/oxford.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL ?>/img/loafers.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL ?>/img/classic canvas.png" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<div class="container-fluid home">
    <div class="row">
        <div class="col p-4">
            <h2>Categories</h2>
        </div>
    </div>
    <!-- categories -->
    <div class="row container-fluid categories mx-auto">
        <div class="container-fluid" style="width: 18rem;" data-bs-toggle="tooltip" title="Sneakers">
            <img src=" <?= BASEURL; ?>/img/sneakers_categore.png" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sneakers</h5>
                <a href="<?= BASEURL; ?>/shop/sneakers" class="text-decoration-none">View All</a>
            </div>
        </div>
        <div class="container-fluid" style="width: 18rem;" data-bs-toggle="tooltip" title="Oxfords">
            <img src="<?= BASEURL; ?>/img/oxfords_categore.png" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
                <h5 class="card-title">Oxfords</h5>
                <a href="<?= BASEURL; ?>/shop/oxfords" class="text-decoration-none">View All</a>
            </div>
        </div>
        <div class="container-fluid" style="width: 18rem;" data-bs-toggle="tooltip" title="Loafers">
            <img src="<?= BASEURL; ?>/img/loafers_categore.png" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
                <h5 class="card-title">Loafers</h5>
                <a href="<?= BASEURL; ?>/shop/loafers" class="text-decoration-none">View All</a>
            </div>
        </div>
        <div class="container-fluid" style="width: 18rem;" data-bs-toggle="tooltip" title="Classic Canvas">
            <img src="<?= BASEURL; ?>/img/canvas_categore.png" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
                <h5 class="card-title">Classic Canvas</h5>
                <a href="<?= BASEURL; ?>/shop/canvas" class="text-decoration-none">View All</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col p-4">
            <h2>Latest shoes</h2>
        </div>
    </div>
    <!-- latest shoes -->
    <div class="row container-fluid mx-auto">
        <?php foreach ($data['shoes'] as $shs) : ?>
            <div class="container-fluid card card-shoes mb-4" style="width: 14rem;" data-bs-toggle="tooltip" title="<?= $shs['nama_shoes']; ?>">
                <img src="<?= BASEURL; ?>/img-shoes/<?= $shs['gambar']; ?>" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-title fw-bold"><?= $shs['nama_shoes']; ?></p>
                    <p class="card-text"><?= rp($shs['harga']); ?></p>
                    <a data-bs-toggle="modal" data-bs-target="#checkModal" class="btn modalCheck" data-id="<?= $shs['id']; ?>">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="go-shop col p-4 mb-3">
            <a href="<?= BASEURL; ?>/shop">Shop</a>
        </div>
    </div>
</div>

<!-- modal check -->
<div class="modal fade" id="checkModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Detail Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid" id="imgShoes" src="" alt="">
                        </div>
                        <div class="col-md-6 mt-2">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Name Shoes</th>
                                    <td><input class="form-control" type=" text" id="nameShoes" readonly></td>
                                </tr>
                                <tr>
                                    <th>Categories</th>
                                    <td><input class=" form-control" type="text" id="categories" readonly></td>
                                </tr>
                                <tr>
                                    <th>Stock</th>
                                    <td><input class="form-control" type="text" id="stock" readonly></td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td><input class="form-control" type="text" id="price" readonly></td>
                                </tr>
                            </table>
                            <div class="text-center">
                                <a href="" class="btn btn-primary">Add Cart</a>
                                <a id="idBuy" href="" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer mb-4">
            </div>
        </div>
    </div>
</div>