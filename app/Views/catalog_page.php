<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/maincss.css') ?>">

    </script>
</head>

    <style>

    h1{
        font-family: raleway;
    }

    </style>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" >

    <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="<?= base_url(relativePath: 'assets/images/logo.png')?>" class="logo" style="width:100px; margin-left: 50px;" ></a>

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

    </div>

  </nav>


  <div class="line"></div>

  <div class="about-header">
    <p class="text-center" style="font-family: raleway;">Catalog</p>
  </div>

  <div class="line"></div>

  <div class="line"></div>

  <div class="about-header" data-aos="zoom-in">
    <p class="text-center" style="font-family: raleway;">DRINKS</p>
  </div>

  <div class="line"></div>

  <br>

    <br>
    <br>

  <div class="container">
    <div class="row align-items-start">
      <br>
      <div class="col" data-aos="zoom-in">
         <div class="card lemonade" >
          <h1>Iced Americano</h1>
          <img src="americano.png" >
          <p><b>₱199.00</b></p>
         </div>
         <br>
      </div>

      <div class="col">
        <div class="card strawberry" data-aos="zoom-in" >
          <h1>Iced Latte</h1>
          <img src="icedlatte.png">
          <p><b>₱249.00</b></p>
        </div>
        <br>
      </div>

      <div class="col">
        <div class="card lemonade" data-aos="zoom-in">
         <h1>Iced Mocha</h1>
         <img src="icedmocha.png">
         <p><b>₱249.00</b></p>
        </div>
        <br>
      </div>

    </div>
  </div>

  <br>

  <div class="container">
    <div class="row align-items-start" data-aos="zoom-in">

      <br>

      <div class="col">
         <div class="card lemonade" data-aos="zoom-in">
          <h1 style="font-size: 30px;">Iced Caramel Machiatto</h1>
          <img src="coffee.png">
          <p><b>₱299.00</b></p>
         </div>
         <br>
      </div>

      <div class="col">

        <div class="card strawberry" data-aos="zoom-in">
          <h1>Iced French Vanilla</h1>
          <img src="Iced French Vanilla.png">
          <p><b>₱249.00</b></p>
        </div>
        <br>
      </div>

      <div class="col">
        <div class="card lemonade" data-aos="zoom-in">
         <h1>Iced Hazelnut</h1>
         <img src="hazelnut.png">
         <p><b>₱249.00</b></p>
      </div>
      <br>
      </div>

    </div>
  </div>

  <br>

  <div class="line"></div>

  <div class="about-header" data-aos="zoom-in">
    <p class="text-center" style="font-family: raleway;">SNACKS</p>
  </div>

  <div class="line"></div>

  <br>

  <div class="container">
    <div class="row align-items-start">

      <br>
      <br>

      <div class="col" >
         <div class="card lemonade"   data-aos="zoom-in">
          <h1>Plain Waffle</h1>
          <img src="plainwaffle.png" style="width: 400px; margin-top: 30px;">
          <p><b>₱99.00</b></p>
         </div>
         <br>
      </div>

      <div class="col">

        <div class="card strawberry"  data-aos="zoom-in" >
          <h1>Caramel Waffle</h1>
          <img src="Caramelwaffle.png" style="width: 350px;">
          <p><b>₱149.00</b></p>
        </div>
        <br>
      </div>

      <div class="col">
        <div class="card lemonade" data-aos="zoom-in">
         <h1>Chocolate Fondue</h1>
         <img src="choclatefund.png" style="width: 350px; margin-top: 90px;">
         <p><b>₱199.00</b></p>
      </div>
      <br>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row align-items-start">

      <br>
      <br>

      <div class="col" >
         <div class="card lemonade" data-aos="zoom-in">
          <h1>Peanut Butter Waffle</h1>
          <img src="peanutbutter.png" style="width: 400px;">
          <p><b>₱149.00</b></p>
         </div>
         <br>
      </div>

      <div class="col">

        <div class="card strawberry" data-aos="zoom-in">
          <h1>Ice Cream Waffle</h1>
          <img src="icecream.png" style="width: 400px;">
          <p><b>₱149.00</b></p>
        </div>
        <br>
      </div>

      <div class="col">
        <div class="card lemonade" data-aos="zoom-in">
         <h1>Ultimate Waffle</h1>
         <img src="ultimatewaffles.png" style="width: 400px;">
         <p><b>₱249.00</b></p>
      </div>
      <br>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<section>
  <hr style ="color: white" class ="solid">
</section>

<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="column">
        <a class="navbar-brand" href="#"><img src="beanbox.png" class="image"></a>
      </div>
      <div class="column">
        <p class="text-light">Beanbox MNL <br> est. 2016</p>
        <p class="text-light">San Sebastian College, Manila, Philippines</p>
        <p class="text-light">Follow Us! <br> <a href="https://www.facebook.com/BeanBoxMNL/" target="_blank" class="bi bi-facebook text-light"> facebook</a>
          <a href="https://www.instagram.com/beanboxmnl/" target="_blank" class="bi bi-instagram text-light"> instagram</a></p>
      </div>
    </div>

  </div>
</footer>

</body>

</html>


