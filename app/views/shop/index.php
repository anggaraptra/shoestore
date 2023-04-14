<div class="container-fluid mb-5 goshop">
    <!-- shoes -->
    <div class="row">
        <div class="col p-4 allShoesHeader">
            <h3>All Shoes</h3>
            <div class="filter"><i class="fa-solid fa-arrow-down-wide-short"></i></div>
        </div>
    </div>
    <div class="row container-fluid mx-auto">
        <div class="filterNav"></div>
        <?php foreach ($data['shoes'] as $shs) : ?>
            <div class="container-fluid card card-shoes mb-5" style="width: 16rem;" data-bs-toggle="tooltip" title="<?= $shs['nama_shoes']; ?>">
                <img src="<?= BASEURL; ?>/img-shoes/<?= $shs['gambar'] ?>" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-title fw-bold"><?= $shs['nama_shoes']; ?></p>
                    <p class="card-text"><?= rp($shs['harga']); ?></p>
                    <a href="" data-bs-toggle="modal" data-bs-target="#checkModal" class="btn modalCheck" data-id="<?= $shs['id'] ?>">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
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
                                    <td><input class="form-control" type="text" id="categories" readonly></td>
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
                            <a href="" class="btn btn-primary">Add Cart</a>
                            <a id="idBuy" href="" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer mb-4">
            </div>
        </div>
    </div>
</div>