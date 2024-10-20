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

    </div>

  </nav>

  <section >
    <div class="uk-background-cover d-flex flex-column align-items-center justify-content-center" data-src="<?= base_url('assets/images/neighborhood.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; color:rgb(43, 44, 65); font-size: 70px; text-align:center; width: 100%;">Welcome to The Bluey Store!</h1>
      <button class="viewmenu mt-3">
        <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70);">Go To Catalog</a>
      </button>
    </div>

    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid style="max-width: 80%; margin: auto;">
      <div class="uk-card-media-left uk-cover-container" style="padding: 50px;">
      <img class="card-img" src="<?= base_url('assets/images/BlueyAbouts.png')?>" alt="Card image cap" style="height: 100%; object-fit: none;">
      <canvas width="600" height="40"></canvas>
      </div>
      <div>
        <div class="uk-card-body" style="padding: 50px; margin-top: 10px;">
          <h1 style="font-family: DynaPuff; color:rgb(43, 44, 65);">What is Bluey all about?</h1>
          <h3 style="font-family: DynaPuff; color:rgb(43, 44, 65); text-align: justify;">Bluey follows the adventures of a lovable & inexhaustible blue heeler puppy, who along with her sister Bingo, parents and friends is learning all about the world.</h3>
        </div>
      </div>
    </div>
  </section>

  <section>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" style="max-width: 80%; margin: auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="<?= base_url('assets/images/trio2.png')?>" class="slideshow d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
            <h5 style = "color : black">Welcome to the Bluey Store</h5>
            <p style = "color : black">this store is very official and legit!!</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="<?= base_url('assets/images/trio.jpg')?>" class="slideshow d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style = "color : rgb(237,204,111)">Shop now!</h5>
            <p style = "color : rgb(237,204,111)">scroll down to see the featured items available in our legit shop!</p>
          </div>
    </div>
    <div class="carousel-item">
    <img src="<?= base_url('assets/images/trio3.png')?>" class="slideshow d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style = "color : white">wow look at this wholesome family</h5>
            <p style = "color : white">this is what i wanted as a kid</p>
          </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section>

  <!-- <section style="padding: 100px">

  </section> -->


  <section>
    <h2 style="text-align: center; color: rgb(226,122,55); font-weight: bold; background-color: rgb(64,64,102); padding: 20px;">Featured Merch Items</h2>
    <p class="featured-text">The Most Legit Bluey Collection</p>

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
