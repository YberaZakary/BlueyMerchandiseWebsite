<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('assets/css/maincss.css') ?>">
    <script type="text/javascript"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >

    <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="<?= base_url('assets/images/logo.png')?>" class="logo" style="width:100px; margin-left: 50px;" ></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>" style="font-family: raleway;" >Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/catalog'); ?>" style="font-family: raleway;">Catalog</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/about'); ?>" style="font-family: raleway;" >About</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/contact'); ?>" style="font-family: raleway;" >Contact</a>
        </li>
        </ul>
    </div>

    <div class="d-flex">
        <a href="<?= base_url('/cart'); ?>" class="cart-icon">
        <i class="bi bi-cart4" style="font-size: 30px; color: rgb(210,235,255);"></i>
        </a>
    </div>

    </nav>
</body>
</html>