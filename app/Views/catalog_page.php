<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Bluey</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


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

<?= $this->endSection('content') ?>



