<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Bluey</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


<section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">About</h1>
    </div>

    <div data-aos="zoom-in" class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2 uk-margin" uk-grid style="max-width: 80%; margin: auto;">
      <div class="uk-card-media-left uk-cover-container" style="padding: 50px;">
        <img class="card-img" src="<?= base_url('assets/images/blueyfamily.png')?>" alt="Card image cap" style="height: 350px; object-fit: cover;">
        <canvas width="600" height="1"></canvas>
      </div>
      <div>
        <div class="uk-card-body" style="padding: 50px; margin-top: 10px;">
          <h1 style="font-family: DynaPuff; color:rgb(43, 44, 65); text-align: center; text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.432);">Welcome to Bluey Store!</h1>
          <h2 style="font-family: DynaPuff; color:rgb(43, 44, 65); text-align: justify; ">Bluey follows the adventures of a lovable & inexhaustible blue heeler puppy, who along with her sister Bingo, parents and friends is learning all about the world. Buy our legit merch!</h2>
        </div>
      </div>
    </div>
  </section>

  <?= $this->endSection('content') ?>