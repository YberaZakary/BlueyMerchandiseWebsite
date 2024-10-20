<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
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

  <div class="about-header" >
    <p class="text-center" >CONTACT US</p>
  </div>

  <div class="line"></div>

  <br>
  <br>

  <div class="container">
    <div class="row align-items-start">

      <br>

      <div class="col">
         <div class="card lemonade" >
          <h1 >Located at</h1>
          <img src="pin.png" data-aos="flip-right">
          <p style="font-size: 30px;margin-top: 50px;">

         <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: black; border: none;">
    Click me!
    </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Location</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="beanboxloc.png" style="width: 400px;">
          <p>Address: JX3H+V79, Recto Ave, Santa Cruz, Manila, 1008 Metro Manila</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: black;">Understood</button>
        </div>
      </div>
    </div>
  </div>

        </p>

         </div>
         <br>
      </div>

      <div class="col">

        <div class="card strawberry">
          <h1>Call Us</h1>
          <img src="Telephone.png" style="margin-top: 20px;" data-aos="flip-right">
          <p style="font-size: 30px;margin-top: 50px;" ><b>+63 995 325 8069.</b></p>
        </div>
        <br>
      </div>

      <div class="col">
        <div class="card lemonade">
         <h1>Members</h1>
         <img src="manface.jpg" data-aos="flip-right">
         <p style="font-size: 30px;margin-top: 50px;" ><b>

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Bastian Ybera</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Created contact and helped members on their given work.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="background-color: black;">Next</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Rei Batoon</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Created home page and also helped on other members work.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" style="background-color: black;">Next</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Cedric Valencia</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Created Menu Page
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" style="background-color: black;">Next</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Shaun Calvin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Created About Page
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="background-color: black;">Back to first</button>
        </div>
      </div>
    </div>
  </div>

<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="background-color: black; border: none; font-size: 20px;margin-top: 40px;">Hansome Members</button>

         </b></p>
      </div>
      <br>
      </div>

    </div>

  </div>
  <div class="about-header">
    <p class="text-center">FAQ</p>
  </div>

  <div class="line"></div>

  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" >
          What time do we open?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Beanbox opens excatly at 9:00AM and closes after 9:00PM</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Are pets allowed?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Beanbox does not allow any pets inside the premise, since it is hold area.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Where are we located?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Beanbox is located at  Recto Ave, Santa Cruz, Manila, 1008 Metro Manila infront of UE College.</div>
      </div>

    </div>
  </div>

  <section>
    <hr style ="color: white" class ="solid">
  </section>

  <footer>
    <div class="container-fluid" style="background-color: rgb(34, 34, 34);">
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>

