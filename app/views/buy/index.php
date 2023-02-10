<div class="container-fluid buy">
    <div class="row p-5">
        <div class="col-lg-6 text-center">
            <img src="<?= BASEURL; ?>/img-shoes/<?= $data['shoes']["gambar"]; ?>" class="card-img-top img-fluid rounded shadow-sm" style="width: 400px; height: 400px;" alt="...">
        </div>
        <div class="col-lg-6">
            <h3 class="text-capitalize"><?= $data['shoes']["nama_shoes"]; ?></h3>
            <div class="card mb-3">
                <div class="card-body rounded" style="background-color: #f5ebee;">
                    <h2><?= rp($data['shoes']["harga"]); ?></h2>
                </div>
            </div>
            <table class="table table-borderless">
                <tr>
                    <td>Kuantitas</td>
                    <td>:</td>
                    <td><input class="form-control" type="number"></td>
                </tr>
                <tr>
                    <td>Nama pembeli</td>
                    <td>:</td>
                    <td>Budi</td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-success">Buy</button></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>