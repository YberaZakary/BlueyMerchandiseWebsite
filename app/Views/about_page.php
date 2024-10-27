<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>About</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


<section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">About</h1>
      <div class="uk-child-width-1-2@m" uk-grid>
        
      <div>

      <iframe src="https://www.youtube-nocookie.com/embed/ZrR9ML0sxEE?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
      </div>
    </div>

    

  </section>

  <?= $this->endSection('content') ?>