<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <div class="container-fluid">
            <a href="<?= BASEURL; ?>" class="navbar-brand fw-bold"><span>SHOE</span>STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php if ($activeTab == 'home') : ?>
                            <a class="nav-link aktif" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                        <?php else : ?>
                            <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($activeTab == 'shop') : ?>
                            <a class="nav-link aktif" href="<?= BASEURL; ?>/shop">Shop</a>
                        <?php else : ?>
                            <a class="nav-link" href="<?= BASEURL; ?>/shop">Shop</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</a>
                    </li>
                </ul>
                <div class="form">
                    <form action="<?= BASEURL; ?>/shop/search" method="post" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search Shoes" aria-label="Search" name="keyword" id="keyword" required autofocus autocomplete="off">
                        <button class="btn" type="submit" id="tombolCari">Search</button>
                    </form>
                </div>
                <ul class=" ms-2 navbar-nav ">
                    <li class=" nav-item">
                        <a href="" class="nav-link"><i class="bi bi-person-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- modal -->
    <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <form action="" name="contact-us" id="formKontak" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="nama" type="text" class="form-control" id="nama" required autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Message</label>
                            <textarea name="pesan" class="form-control" rows="3" required></textarea>
                        </div>
                </div>
                <div class="modal-footer kontak-kami">
                    <button type="submit" class="btn" id="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>