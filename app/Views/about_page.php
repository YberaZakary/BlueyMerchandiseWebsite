<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>About</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


<section>
    <div class="uk-background-cover d-flex flex-column justify-content-start align-items-start" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill; padding-left: 20px;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-left: 23%; padding-top: 20px;">About</h1>
      <div class="uk-child-width-1-2@m" uk-grid>

      </div>

    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid style="margin: auto;">
      <div class="uk-card-media-left uk-cover-container">
        <iframe src="https://www.youtube-nocookie.com/embed/ZrR9ML0sxEE?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="100%" height="100%" allowfullscreen uk-responsive uk-video="automute: true" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
        <canvas width="700" height="450"></canvas>
      </div>
      <div>
        <div class="uk-card-body">
          <h3 class="uk-card-title"> 
            <img class="card-img" src="<?= base_url('assets/images/blueybook.png')?>" alt="Card image cap" style="width: 50%; height: auto; object-fit: cover;">
          </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div>
    </div>
</div>

    

  </section>

  <?= $this->endSection('content') ?>