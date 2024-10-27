<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Bluey</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


  <section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">The Bluey Shop</h1>
      <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70); text-decoration: none;">
        <button class="zoom viewcatalog mt-3">Go To Catalog</button>
      </a>
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

  <section>
  <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/trio1.png')?>" style="max-width: 50%; margin: auto; height: 600px; object-fit: fill;" uk-img></div>
  </div>
  </section>

  <section>
    <h1 class="zoom" style=" font-family: DynaPuff; text-align: center; color: rgb(255, 255, 255); text-shadow: 0px 2px 2px rgba(0,0,0,0.432); font-size: 70px; font-weight: bold; max-width:80%; margin: auto; padding: 10px;">Featured Merch Items</h1>
    <h2 class="zoom featured-text" style="font-family: DynaPuff; text-shadow: 0px 2px 2px rgba(0,0,0,0.432); max-width:80%; margin: auto; padding-bottom: 50px;">The Most Legit Bluey Collection</h2>
  </section>

  <section>
    <div class="uk-background-cover" data-src="<?= base_url('assets/images/footerbackground.png')?>" style="object-fit: fill;" uk-img>
      <div style="background-color: rgba(255, 255, 255, 0.5);; border-radius: 20px; max-width: 80%; margin: auto;">
        <h2 style="font-family: DynaPuff; text-shadow: 0px 2px 2px rgba(0,0,0,0.432); color: rgb(117, 85, 154); padding-inline: 30px; padding-top: 30px; text-align: left;">FEATURED TOY ITEMS</h2>
          <div class="uk-slider-container-offset" style="margin: auto;" uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
              <div class="uk-slider-items uk-child-width-1-3@s uk-grid">
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000"data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/muffin.jpg')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/mingo.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
              </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
          </div>
        </div>

        <h2 style="font-family: DynaPuff; text-shadow: 0px 2px 2px rgba(0,0,0,0.432); color: rgb(117, 85, 154); padding-inline: 30px; text-align: left;">FEATURED APPAREL</h2>
          <div class="uk-slider-container-offset" style="margin: auto;" uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
              <div class="uk-slider-items uk-child-width-1-3@s uk-grid">
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000"data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="text-shadow: 0px 2px 2px rgba(0,0,0,0.432); border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/muffin.jpg')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="text-shadow: 0px 2px 2px rgba(0,0,0,0.432); border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/mingo.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="text-shadow: 0px 2px 2px rgba(0,0,0,0.432); border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="text-shadow: 0px 2px 2px rgba(0,0,0,0.432); border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="text-shadow: 0px 2px 2px rgba(0,0,0,0.432); border-radius: 10px;">
                      <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                      </div>
                      <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px;">
                      <h3 class="uk-card-title" style="color: white; font-size: 1rem;">Media Top</h3>
                      <p style="color: white; font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
              </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
          </div>
        </div>
          <div style="padding-bottom: 50px;">
          <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70); text-decoration: none;">
            <button class="zoom viewcatalog mt-3">Go To Catalog</button>
          </a>
          </div>
      </div>
    </div>
  </section>

  <?= $this->endSection('content') ?>
