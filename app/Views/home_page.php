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
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/neighborhood.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">The Bluey Shop</h1>
      <button class="viewmenu mt-3">
        <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70);">Go To Catalog</a>
      </button>
    </div>

    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2 uk-margin" uk-grid style="max-width: 80%; margin: auto;">
      <div class="uk-card-media-left uk-cover-container" style="padding: 50px;">
        <img class="card-img" src="<?= base_url('assets/images/familypicAbout.png')?>" alt="Card image cap" style="height: 350px; object-fit: cover;">
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
  <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/trio2.png')?>" style="max-width: 50%; margin: auto; height: 600px; object-fit: fill;" uk-img></div>
  </div>
  </section>

  <section>
    <h1 style="font-family: DynaPuff; text-align: center; color: rgb(255, 255, 255); text-shadow: 0px 2px 2px rgba(0,0,0,0.432); font-size: 70px; font-weight: bold; max-width:80%; margin: auto; padding: 10px;">Featured Merch Items</h1>
    <h2 class=" featured-text" style="font-family: DynaPuff; text-shadow: 0px 2px 2px rgba(0,0,0,0.432); max-width:80%; margin: auto; padding-bottom: 20px;">The Most Legit Bluey Collection</h2>
    <div class="uk-child-width-1-4@m" style="max-width: 80%; margin: auto;" uk-grid>
      <div data-aos="fade-right" data-aos-duration="4000"style="padding: 10px;">
      <div class="uk-card uk-card-default" style="border-radius: 10px;">
        <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
        <img src="<?= base_url('assets/images/muffin.jpg')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
        </div>
        <div class="uk-card-body" style="padding: 10px; border-radius: 0 0 10px 10px;">
        <h3 class="uk-card-title" style="font-size: 1rem;">Media Top</h3>
        <p style="font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div>
      </div>
      <div data-aos="fade-right" data-aos-duration="1000"style="padding: 10px;">
      <div class="uk-card uk-card-default" style="border-radius: 10px;">
        <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
        <img src="<?= base_url('assets/images/mingo.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
        </div>
        <div class="uk-card-body" style="padding: 10px; border-radius: 0 0 10px 10px;">
        <h3 class="uk-card-title" style="font-size: 1rem;">Media Top</h3>
        <p style="font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div>
      </div>
      <div data-aos="fade-right" data-aos-duration="2000"style="padding: 10px;">
      <div class="uk-card uk-card-default" style="border-radius: 10px;">
        <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
        <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
        </div>
        <div class="uk-card-body" style="padding: 10px; border-radius: 0 0 10px 10px;">
        <h3 class="uk-card-title" style="font-size: 1rem;">Media Top</h3>
        <p style="font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div>
      </div>
      <div data-aos="fade-right" data-aos-duration="3000"style="padding: 10px;">
      <div class="uk-card uk-card-default" style="border-radius: 10px;">
        <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
        <img src="<?= base_url('assets/images/bluy.png')?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
        </div>
        <div class="uk-card-body" style="padding: 10px; border-radius: 0 0 10px 10px;">
        <h3 class="uk-card-title" style="font-size: 1rem;">Media Top</h3>
        <p style="font-size: 0.875rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container1">
      <div class="featured-box zoom" data-aos="flip-right">
        <div style = "font-style:italic; font-weight: bold; color: rgb(64,64,102); text-align: center;">
          For Real Life?</div>
        <img class="center" src = "<?= base_url('assets/images/forreals.png')?>">
        <div class="box-text">
          FOR REAL LIFE?! (Graphic Hoodie)
        </div>
      </div>
      <div class="featured-box zoom" data-aos="flip-right">
        <div style = "font-style:italic; font-weight: bold; color: rgb(64,64,102); text-align: center;">
        Sleepy Time Tee</div>
        <img class="center" src = "<?= base_url('assets/images/sleepytime.png')?>">
        <div class="box-text">
          Sleepy Time (Graphic Tee)
        </div>
      </div>
      <div class="featured-box zoom" data-aos="flip-right">
        <div style = "font-style:italic; font-weight: bold; color: rgb(64,64,102); text-align: center;">
          The Sign Family Kids Hoodie</div>
        <img class="center" src = "<?= base_url('assets/images/familyhoodie.png')?>">
        <div class="box-text">
          The Sign Family Pic (Graphic Hoodie)
        </div>
      </div>
    </div>

    <div class="container1" style="padding: 20px;">
      <div class="featured-box zoom" data-aos="flip-right">
        <div style = "font-style:italic; font-weight: bold; color: rgb(64,64,102); text-align: center;">
          Bluey Plush</div>
        <img class="center" src = "<?= base_url('assets/images/bluy.png')?>">
        <div class="box-text">
          Main Character of the kid show: Bluey
        </div>
      </div>
      <div class="featured-box zoom" data-aos="flip-right">
        <div style = "font-style:italic; font-weight: bold; color: rgb(64,64,102); text-align: center;">
        Bingo Plush</div>
        <img class="center" src = "<?= base_url('assets/images/mingo.png')?>">
        <div class="box-text">
          Bluey's younger sibling, store's favorite character
        </div>
      </div>
      <div class="featured-box zoom" data-aos="flip-right">
        <div style = "font-style:italic; font-weight: bold; color: rgb(64,64,102); text-align: center;">
          Muffin Plush</div>
        <img class="center" src = "<?= base_url('assets/images/muffin.jpg')?>">
        <div class="box-text">
          Bluey and Bingo's cousin, another store favorite :)
        </div>
      </div>
    </div>
    <button class="viewmenu">
      <a href="<?= base_url('/menu'); ?>" style="color: rgb(47, 62, 70); text-decoration: none;">
     Browse More
      </a>
    </button>
  </section>
  
  <section>
    <hr style ="color: white" class ="solid">
  </section>


  <section>
    <hr style ="color: white" class ="solid">
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
