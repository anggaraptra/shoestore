<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title><?= $data['judul']; ?></title>

    <link href="<?= BASEURL; ?>/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="<?= BASEURL; ?>/admin">
                    <span class="align-middle"><span style="color:#e0004d">Shoe</span>store Admin</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item <?= $data['status1'] ?>">
                        <a class="sidebar-link" href="<?= BASEURL; ?>/admin">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= $data['status2'] ?>">
                        <a class="sidebar-link" href="<?= BASEURL; ?>/admin/profile">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= $data['status3'] ?>">
                        <a class="sidebar-link" href="<?= BASEURL; ?>/admin/shoes">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Shoes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>