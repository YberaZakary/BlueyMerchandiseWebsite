<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
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

  <section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">The Bluey Shop</h1>
      <button class="viewmenu mt-3">
        <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70);">Go To Catalog</a>
      </button>
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
            <button class="zoom viewmenu">
              <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70);">Go To Catalog</div>
            </button>
          </div>
      </div>
    </div>
  </section>

  <section>
    <hr style ="color: rgb(117, 85, 154)" class ="solid">
  </section>

  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-3">
          <a class="navbar-brand" href="#"><img src="<?= base_url('assets/images/logo.png')?>" class="image" style="width: 100px;"></a>
        </div>
        <div class="col-md-4 text-center mb-3">
          <p>The Official Legit Bluey Store <br> est. 2024</p>
          <p>Recto, Manila, Philippines</p>
        </div>
        <div class="col-md-4 text-center mb-3">
          <p>Follow Us!</p>
          <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-light me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
