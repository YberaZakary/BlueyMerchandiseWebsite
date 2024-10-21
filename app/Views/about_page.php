<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Bluey</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


  <div class="line"></div>

  <div class="about-header">
    <p class="text-center" style="font-family: raleway;">ABOUT BEAN BOX</p>
  </div>

  <div class="line"></div>

  <div class="about-container">
    <div class="image1">
      <img src="beanboxAbout.jpg" alt="aboutlogo" class="about-image img-fluid d-none d-md-block" data-aos="fade-right">
  </div>
    <p class="about-text text-lg-start text-sm-center mt-5 " data-aos="fade-right"> 
      Beanbox Recto is a well-known coffee shop located in Recto Avenue, Manila, Philippines. It has gained popularity for its quality coffee and cozy ambiance. Here's a brief history of Beanbox Recto:

Beanbox Recto was established around 2016 by Beng Pacaldo. The coffee shop started as a small, humble establishment with a mission to provide the local community with a welcoming space to enjoy specialty coffee and delicious snacks.

From its inception, Beanbox Recto quickly became a favorite among students, professionals, and coffee enthusiasts in the area. Its prime location near universities and business centers contributed to its popularity, attracting a diverse clientele.
    </p>
  </div>

  <section class="history">
    <div class="container-fluid mt-5" style="background-color: rgb(34, 34, 34);">
      <div class="row">
        <div class="col">
  <h2 class="text-center mt-5 text-light" data-aos="fade-right" style="font-family: raleway;">Brief History about Bean box</h2>
  <br>
  <div class="angels-container" data-aos="fade-left">
    <p class="angels-text text-lg-start text-sm-center">

Beanbox Recto is a renowned coffee shop located in Recto Avenue, Manila, Philippines. 
Founded with a passion for quality coffee and a cozy environment, it quickly became a 
favorite among students, professionals, and coffee enthusiasts. Offering a wide range of 
specialty coffee beverages and delectable snacks, Beanbox Recto established itself as a social
 hub and a go-to destination for its loyal clientele. While expanding to other locations, the
  original branch in Recto Avenue remained a beloved landmark, known for its exceptional customer 
  service and commitment to providing a remarkable coffee experience. Today, Beanbox Recto continues 
  to thrive, preserving its unique charm and serving as a gathering place in the heart of Recto Avenue.
    </p>

    <div>
    <img src="beanboxfood.jpg" alt="angels" class="angels-image d-none d-md-block">
    </div>
  </div>
  </div>
</div>
</div>
</section>
  <br>
  <br>

  <div class="container-fluid" style="background-color: rgb(34, 34, 34);">
    <div class="row justify-content-center align-items-center">

      <div class="col-lg-6" data-aos="fade-right">
    <img src="beanbox3.jpg" alt="core" class="core-image img-fluid d-none d-md-block">
    </div>

    <div class="col-lg-5 text-light text-center" data-aos="fade-left">
      <div >
      <h3>Mission</h3>
      <p class="py-2 mb-3">To satisfy the Filipino's appetite anytime and<br> anywhere one coffee, or two, at a time.</p>

      <h3>Vision</h3>
      <p>To become the coffee of choice<br> for all Filipinos.</p>
      </div>
    </div>
  </div>
  </div>
  </div>

  <br>

  <section>
    <hr style ="color: white" class ="solid">
  </section>

  <?= $this->endSection('content') ?>