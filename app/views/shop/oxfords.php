<div class="container-fluid mb-5 oxfords">
    <div class="row">
        <div class="col p-4">
            <h3>Oxfords</h3>
        </div>
    </div>
    <div class="row container-fluid mx-auto">
        <?php if ($data['oxfords'] != null) : ?>
            <?php foreach ($data['oxfords'] as $ofd) : ?>
                <div class="container-fluid card card-shoes mb-5" style="width: 16rem;" data-bs-toggle="tooltip" title="<?= $ofd['nama_shoes']; ?>">
                    <img src="<?= BASEURL; ?>/img-shoes/<?= $ofd['gambar'] ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bold"><?= $ofd['nama_shoes']; ?></p>
                        <p class="card-text"><?= rp($ofd['harga']); ?></p>
                        <a href="" data-bs-toggle="modal" data-bs-target="#checkModal" class="btn modalCheck" data-id="<?= $ofd['id']; ?>">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col text-center">
                        <h5>Shoes Not Found</h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
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