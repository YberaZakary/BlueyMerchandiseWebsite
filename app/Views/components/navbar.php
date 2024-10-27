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
            <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>" style="font-family: raleway; text-decoration: none;" >Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/catalog'); ?>" style="font-family: raleway; text-decoration: none;">Catalog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/about'); ?>" style="font-family: raleway; text-decoration: none;" >About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/contact'); ?>" style="font-family: raleway; text-decoration: none;" >Contact</a>
          </li>
        </ul>
      </div>

      <div class="d-flex">
        <a href="<?= base_url('/cart'); ?>" class="cart-icon">
          <i class="bi bi-cart4" style="font-size: 30px; color: rgb(210,235,255);"></i>
        </a>
    </div>

    <div class="d-flex">
        <a href="<?= base_url('/cart'); ?>" class="cart-icon">
          <i class="bi bi-cart4" style="font-size: 30px; color: rgb(210,235,255);"></i>
        </a>
    </div>

  </nav>