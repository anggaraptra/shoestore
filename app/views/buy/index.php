<div class="container-fluid buy p-5">
    <div class="row m-5">
        <div class="col-lg-5">
            <img src="<?= BASEURL; ?>/img-shoes/<?= $data['shoes']["gambar"]; ?>" class="card-img-top img-fluid rounded shadow-sm" style="width: 400px; height: 400px;" alt="...">
        </div>
        <div class="col-lg-7">
            <h3 class="text-capitalize"><?= $data['shoes']["nama_shoes"]; ?></h3>
            <div class="card mb-3">
                <div class="card-body rounded" style="background-color: #f5ebee;">
                    <h2><?= rp($data['shoes']["harga"]); ?></h2>
                </div>
            </div>

            <h5 class="text-capitalize">Description</h5>
            <p class="card-text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, dignissimos!
            </p>

            <table class="table table-borderless">
                <tr>
                    <td>Quantity</td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                    <i class="bi bi-dash"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-secondary btn-number" data-type="plus" data-field="">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Add Cart</button>
                        <button type="submit" class="btn btn-success">Buy</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>